<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UG Admissions Playground</title>
<link href="base.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:500,700,500italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
<script type="text/javascript">
	function _ajax_request(url, data, callback, type, method) {
		if (jQuery.isFunction(data)) {
			callback = data;
			data = {};
		}
		return jQuery.ajax({
			type: method,
			url: url,
			data: data,
			success: callback,
			dataType: type
			});
	}
	
	jQuery.extend({
		put: function(url, data, callback, type) {
			return _ajax_request(url, data, callback, type, 'PUT');
		},
		delete_: function(url, data, callback, type) {
			return _ajax_request(url, data, callback, type, 'DELETE');
		}
	});
</script>
<script>

	var API_KEY = "fso5owg8x6edpmwnhpb2";

	var count = 0;
	var length = 0;

	var i = 1; function inc(){ return i++;}
	
	var markup = '<tr class="row">' +
					  '<td align="center" valign="middle">${inc()}.</td>' +
					  '<td align="center" valign="middle"><input type="text" value="${name}" class="name" /></td>' +
					  '<td align="center" valign="middle"><input type="text" value="${code}" class="code" /></td>' +
					  '<td align="center" valign="middle"><input type="text" value="${degree}" class="degree" /></td>' +
					  '<td align="center" valign="middle"><input type="checkbox" {{if is_major == "true"}}checked="checked"{{/if}} class="is_major" /></td>' +
					  '<td align="center" valign="middle"><input type="checkbox" {{if is_minor == "true"}}checked="checked"{{/if}} class="is_minor" /></td>' +
					  '<td align="center" valign="middle"><input type="checkbox" {{if is_combined == "true"}}checked="checked"{{/if}} class="is_combined" /></td>' +
					  '<td align="center" valign="middle"><input type="text" value="${concentration}" class="conc"/></td>' +
  					  '<td align="center" valign="middle"><button class="button black small save"><img src="images/save.png"></button>&nbsp;<button class="button black small delete"><img src="images/delete.png"></button>' +
					  '<input type="hidden" class="exists" value="{{if count > length}}0{{else}}1{{/if}}" />' +
					  '<input type="hidden" class="id" value="{{if count <= length}}${_id.$oid}"{{/if}}" />' +					  
					  '</td>' + 
				  '</tr>';	
	
	$.template( "programTemplate", markup );
	  
	$(document).ready(function() {
        
		$.getJSON('https://api.mongohq.com/databases/Programs/collections/majors/documents/?_apikey=fso5owg8x6edpmwnhpb2&sort=%7B%22name%22%3A%20%22asc%22%7D&limit=100&callback=?', 
			function(data,textStatus,jqXHR) {
				//$("#list").empty();
				$.tmpl("programTemplate", data).appendTo("#list");
				count = length = data.length;
				$("#loading").hide();
				//var headers = jqXHR.getResponseHeader('X-Mongohq-Count');
				//console.log(jqXHR.status);
				//alert(XMLHttpRequest.getResponseHeader('X-Mongohq-Count'));
				
				
				if(count == 100){
					$("#loading").show();
					$.getJSON('https://api.mongohq.com/databases/Programs/collections/majors/documents/?_apikey=fso5owg8x6edpmwnhpb2&sort=%7B%22name%22%3A%20%22asc%22%7D&limit=100&skip=100&callback=?', 
						function(data) {
							$.tmpl("programTemplate", data).appendTo("#list");
							count += data.length;
							$("#loading").hide();
					});
					
					
				}
		});
		
		$("#add").click(function(){
			count++;
			$.tmpl("programTemplate", {"is_major":"false","is_minor":"false","is_combined":"false"}).appendTo("#list");
			$('html, body').animate({scrollTop: $("#add").offset().top}, 2000);
		});
		
		$("button.save").live('click',function(){
			var parent = $(this).parents('tr.row');			
			var name = $(parent).find("input.name").val();	
			var degree = $(parent).find('input.degree').val();
			var code = $(parent).find('input.code').val();
			var con = $.trim($(parent).find("input.conc").val());
			var concent = (con == "")?new Array():con.split(',');
			var isMajor = $(parent).find('input.is_major').is(':checked');
			var isMinor = $(parent).find('input.is_minor').is(':checked');
			var isCombined = $(parent).find('input.is_combined').is(':checked');
			var exists = $(parent).find('input.exists').val();
			var program = new Program(name,code,degree,isMajor,isMinor,isCombined,concent,exists,$(parent).find('input.id').val());
			var url = "https://api.mongohq.com/databases/Programs/collections/majors/documents/";
			var type = 'POST';
			
			console.log(program.name);
			var programData = {"document":program};
			
			if(parseInt(exists)){
				 type = 'PUT';
				 var id = $(parent).find('input.id').val();
				 url += id;
				 //programData.doc_id = {"$oid": id};
			}
			
			url += "?_apikey=" + API_KEY;
			//url += "&callback=?";
			
			$(parent).css('background-color','#ccc');
			$("#loading").show();
				
			$.ajax({
			  type: type,
			  url: url,
			  data: programData,
			  dataType: 'json',
			  success: function(data){
				$(parent).css('background-color','#0c0');
				$("#loading").hide();
				
				if(data.ok == "1"){
					$(parent).find('input.exists').val(1);
					$(parent).find('input.id').val(data._id);
				}
			  }
			});
				
		});
		
		$("button.delete").live('click',function(){
			
			var parent = $(this).parents('tr');
			
			var url = "https://api.mongohq.com/databases/Programs/collections/majors/documents/";
			url += $(parent).find('input.id').val();
			url += "?_apikey=" + API_KEY;
			
			$("#loading").show();
				
			$.ajax({
			  type: 'DELETE',
			  url: url,
			  dataType: "json",
			  success: function(data){
				$("#loading").hide();
				$(parent).css('background-color','#900').remove();
				count--;
			  }
			});
			
		});
		
		$("#rockmongo").click(function(){
			window.open("/playground/rockmongo/");
		});
		
		$("#apihelp").click(function(){
			window.open("http://support.mongohq.com/api/documents/index.html");
		});
		
		$("#api").click(function(){
			window.open("https://api.mongohq.com/databases/Programs/collections/majors/documents/?_apikey=fso5owg8x6edpmwnhpb2&limit=100");
		});
		
		$("#plugin").click(function(){
			window.open("https://chrome.google.com/webstore/detail/bcjindcccaagfpapjjmafapmmgkkhgoa");
		});
		
		$("#godown").click(function(){
			$('html, body').animate({scrollTop: $("#add").offset().top}, 1000);
			$("#add").click();
		});
		
		$("#gotop").click(function(){
			$('html, body').animate({scrollTop: $("#rockmongo").offset().top}, 1000);
		});
		
	});	
	
	
	function Program(name,code,degree,is_major,is_minor,is_combined,concentration,exists,id){
		this.name = name;
		this.code = code;
		this.degree = degree;
		this.is_major = (is_major===true)?true:false;
		this.is_minor = is_minor;
		this.is_combined = is_combined;
		if(concentration.length) this.concentration = concentration;
		//if(parseInt(exists)) this._id = id;
		//if(parseInt(exists)) this.doc_id = {"$oid": id};	
	}

</script>


</head>

<body>

<div id="wrapper">

	<div align="center"><h2>SB Majors, Minors and Combined Degree Programs</h2></div>
    <div class="spc10"></div>
    <div align="center">
    	<button id="rockmongo" class="button black">DB Admin(Rockmongo)</button> &nbsp;
        <button id="godown" class="button black">Add New Program</button> &nbsp;
        <button id="apihelp" class="button black">API Docs</button> &nbsp;
        <button id="api" class="button black">API Data Preview</button> &nbsp;
        <button id="plugin" class="button black">Chrome Plugin</button> &nbsp;
    </div>
    <div class="spc10"></div>
    <table id="list" width="100%" border="1" cellpadding="5" cellspacing="3">
      	<tr bgcolor="#333" style="color:white;">
        	<th align="center" valign="middle">#</th>
            <th align="center" valign="middle" width="30%">Name</th>
            <th align="center" valign="middle" width="5%">Code</th>
            <th align="center" valign="middle" width="5%">Degree</th>
            <th align="center" valign="middle" width="5%">Major?</th>
            <th align="center" valign="middle" width="5%">Minor?</th>
            <th align="center" valign="middle" width="5%">Combined?</th>
            <th align="center" valign="middle" width="35%">Concentration</th>
            <th align="center" valign="middle" width="10%"></th>
		</tr>
    </table>

    <div class="spc10"></div>
    <div align="center"><img src="images/loader.gif" id="loading" /></div>    
    <div class="spc10"></div>
    <div align="center"><button id="add" class="button black">Add Row</button>&nbsp;<button id="gotop" class="button black">Fly to Top</button></div>
    
</div>

</body>
</html>
