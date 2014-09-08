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

var API_KEY = "jjxUrWp6BcGOFUJG2Sysa4oiPY7u6Q7LMwFcBLt8";

var MAINCOUNT = 0;
var LENGTH = 0;

var PROGRAMS = new Array();

var i = 1; function inc(){ return i++;}

if (typeof String.prototype.startsWith != 'function') {
	String.prototype.startsWith = function (str){
		return this.slice(0, str.length) == str;
	};
}

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
				  '<input type="hidden" class="exists" value="{{if MAINCOUNT > LENGTH}}0{{else}}1{{/if}}" />' +
				  '<input type="hidden" class="id" value="{{if MAINCOUNT <= LENGTH}}${_id.$oid}"{{/if}}" />' +					  
				  '</td>' + 
			  '</tr>';	

$.template( "programTemplate", markup );

function createDropDown(){
	
	var count = 0;
	var combined_list = new Array();
	
	$("#pg1 option:not(:first-child),#pg2 option:not(:first-child)").remove();
	
	$(PROGRAMS).each(function(i,item){
		
		if(item.degree.startsWith('B')){
			$("#pg1").append('<option value="'+item._id.$oid+'">'+item.name + '(' + item.degree + ')' +'</option>');
			if( item.hasOwnProperty('combined_with') ){
				count += item.combined_with.length;
				combined_list.push(item._id.$oid);
			}
		}else if(item.degree.startsWith('M'))
			$("#pg2").append('<option value="'+item._id.$oid+'">'+item.name + '(' + item.degree + ')' +'</option>');
			
		PROGRAMS[''+item._id.$oid] = item;
	});

	$("#pg1,#pg2").combobox();
	
	$("#combinedlistcount").html(count + " combined degrees created<br/>");
	
	$('#combinedlist').empty();
	
	$(combined_list).each(function(i,item){
		var bs = PROGRAMS[item];
		$(bs.combined_with).each(function(i,item){
			var ms = PROGRAMS[item];
			$('#combinedlist').append('<div class="combineditem">'+bs.name+'('+bs.degree+') + '+ ms.name +'('+ ms.degree +') <a class="remove uiCloseButtonSmall"></a></div>');
		});
	});
	
	$("a.remove").live('click',function(){
		$("#combinedresult").html("Trying to remove? Not yet").fadeIn('slow',function(){$(this).fadeOut(3000);});
	});
	
}

function loadData(){
	
	i = 1;MAINCOUNT=0;LENGTH=0;
	
	$.getJSON('https://api.mongohq.com/2011-09/databases/Programs/collections/majors/documents/?_apikey='+API_KEY+'&sort=%7B%22name%22%3A%20%22asc%22%7D&limit=100&callback=?', 
		function(data,textStatus,jqXHR) {
				
			$("#list").empty();
			$("#list").append($("#listTemplate").html());
			
			$.tmpl("programTemplate", data).appendTo("#list");
			MAINCOUNT = LENGTH = data.length;
			$("#loading").hide();
			//var headers = jqXHR.getResponseHeader('X-Mongohq-Count');
			//console.log(jqXHR.status);
			//alert(XMLHttpRequest.getResponseHeader('X-Mongohq-Count'));
			
			PROGRAMS = new Array();
			
			PROGRAMS = PROGRAMS.concat(data);
			
			if(MAINCOUNT == 100){
				$("#loading").show();
				$.getJSON('https://api.mongohq.com/2011-09/databases/Programs/collections/majors/documents/?_apikey='+API_KEY+'&sort=%7B%22name%22%3A%20%22asc%22%7D&limit=100&skip=100&callback=?', 
					function(data) {
						$.tmpl("programTemplate", data).appendTo("#list");
						MAINCOUNT += data.length;
						$("#loading").hide();
						
						PROGRAMS = PROGRAMS.concat(data);
						createDropDown();
				});
			}else{
				createDropDown();
			}
	});	
	
}
  
$(document).ready(function() {
	
	loadData();	
	
	$("#add").click(function(){
		MAINCOUNT++;
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
		var url = "https://api.mongohq.com/2011-09/databases/Programs/collections/majors/documents/";
		var type = 'POST';
		
		console.log(program.name);
		
		if(parseInt(exists)){
			type = 'PUT';
			var id = $(parent).find('input.id').val();
			url += id;
			if( PROGRAMS[id].hasOwnProperty('combined_with') ) program.combined_with = PROGRAMS[id].combined_with;
			if( PROGRAMS[id].hasOwnProperty('combined_exists') ) program.combined_exists = PROGRAMS[id].combined_exists;	
		}
		
		var programData = {"document":program};
		
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
		
		var url = "https://api.mongohq.com/2011-09/databases/Programs/collections/majors/documents/";
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
			MAINCOUNT--;
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
		window.open("https://api.mongohq.com/2011-09/databases/Programs/collections/majors/documents/?_apikey="+API_KEY+"&limit=100");
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
	
	$("#combined,#closecombined").click(function(){
		if($("#combinedwrapper").is(":visible"))
			$("#combinedwrapper").slideUp();
		else
			$("#combinedwrapper").slideDown();
	});
	
	$("#createcombined").live('click',function(){
		var bs_id = $("#pg1").val();			
		var ms_id = $("#pg2").val();
		
		var bs_combined_with;
		
		if( PROGRAMS[bs_id].hasOwnProperty('combined_with') )	bs_combined_with = PROGRAMS[bs_id].combined_with;
		else bs_combined_with = new Array();
		
		bs_combined_with.push(ms_id);
		
		var newProgramData = {"document": {"$set" : {"combined_with" : bs_combined_with, "combined_exists": "true"} }};		
		var url = "https://api.mongohq.com/2011-09/databases/Programs/collections/majors/documents/";
		var type = 'PUT';
		url += bs_id;
		url += "?_apikey=" + API_KEY;
		//url += "&callback=?";
		
		$("#combinedwrapper").css('background-color','#ddd');
		$("#combinedloading").show();
			
		$.ajax({
		  type: type,
		  url: url,
		  data: newProgramData,
		  dataType: 'json',
		  success: function(data){
			$("#combinedwrapper").css('background-color','#fff');
			$("#combinedloading").hide();
			$("#combinedresult").html(PROGRAMS[bs_id].name + ' + ' +  PROGRAMS[ms_id].name +' created').show().css('display','inline');
			$("#pg1 option:eq(1)").attr('selected', 'selected');
			$("#combinedwrapper .ui-combobox-input").val("");
			loadData();
			
			if(data.ok == "1"){
				
			}
		  }
		});
			
	});
	
	$("#logout").click(function(){
		
		var dataString = 'formname=logout'; 
		
		$.ajax({  
			type: "POST",  
			url: "index.php",  
			data: dataString,  
			success: function(data) {
				document.location.reload(true);
			}  
		});
		
		return false;
	});
	
});	
	
	
function Program(name,code,degree,is_major,is_minor,is_combined,concentration,exists,id,combined_with,combined_exists){
	this.name = name;
	this.code = code;
	this.degree = degree;
	this.is_major = (is_major===true)?true:false;
	this.is_minor = is_minor;
	this.is_combined = is_combined;
	if(concentration.length) this.concentration = concentration;
	
	if(combined_with) this.combined_width = combined_with;
	if(combined_exists) this.combined_exists = combined_exists;
	
	//if(parseInt(exists)) this._id = id;
	//if(parseInt(exists)) this.doc_id = {"$oid": id};	
}

(function( $ ) {
	$.widget( "ui.combobox", {
		_create: function() {
			var input,
				self = this,
				select = this.element.hide(),
				selected = select.children( ":selected" ),
				value = selected.val() ? selected.text() : "",
				wrapper = this.wrapper = $( "<span>" )
					.addClass( "ui-combobox" )
					.insertAfter( select );

			input = $( "<input>" )
				.appendTo( wrapper )
				.val( value )
				.addClass( "ui-state-default ui-combobox-input" )
				.autocomplete({
					delay: 0,
					minLength: 0,
					source: function( request, response ) {
						var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
						response( select.children( "option" ).map(function() {
							var text = $( this ).text();
							if ( this.value && ( !request.term || matcher.test(text) ) )
								return {
									label: text.replace(
										new RegExp(
											"(?![^&;]+;)(?!<[^<>]*)(" +
											$.ui.autocomplete.escapeRegex(request.term) +
											")(?![^<>]*>)(?![^&;]+;)", "gi"
										), "<strong>$1</strong>" ),
									value: text,
									option: this
								};
						}) );
					},
					select: function( event, ui ) {
						ui.item.option.selected = true;
						self._trigger( "selected", event, {
							item: ui.item.option
						});
					},
					change: function( event, ui ) {
						if ( !ui.item ) {
							var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( $(this).val() ) + "$", "i" ),
								valid = false;
							select.children( "option" ).each(function() {
								if ( $( this ).text().match( matcher ) ) {
									this.selected = valid = true;
									return false;
								}
							});
							if ( !valid ) {
								// remove invalid value, as it didn't match anything
								$( this ).val( "" );
								select.val( "" );
								input.data( "autocomplete" ).term = "";
								return false;
							}
						}
					}
				})
				.addClass( "ui-widget ui-widget-content ui-corner-left" );

			input.data( "autocomplete" )._renderItem = function( ul, item ) {
				return $( "<li></li>" )
					.data( "item.autocomplete", item )
					.append( "<a>" + item.label + "</a>" )
					.appendTo( ul );
			};

			$( "<a>" )
				.attr( "tabIndex", -1 )
				.attr( "title", "Show All Items" )
				.appendTo( wrapper )
				.button({
					icons: {
						primary: "ui-icon-triangle-1-s"
					},
					text: false
				})
				.removeClass( "ui-corner-all" )
				.addClass( "ui-corner-right ui-combobox-toggle" )
				.click(function() {
					// close if already visible
					if ( input.autocomplete( "widget" ).is( ":visible" ) ) {
						input.autocomplete( "close" );
						return;
					}

					// work around a bug (likely same cause as #5265)
					$( this ).blur();

					// pass empty string as value to search for, displaying all results
					input.autocomplete( "search", "" );
					input.focus();
				});
		},

		destroy: function() {
			this.wrapper.remove();
			this.element.show();
			$.Widget.prototype.destroy.call( this );
		}
	});
})( jQuery );