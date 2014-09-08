<?php

	include('functions.php');
	
	session_start();
	$proceed = true;
	
	if($_POST){
		if(isset($_POST['formname'])){
			if($_POST['formname'] == "login"){
				$response = login(trim($_POST['username']),$_POST['password']);
				
				$output = array();
				
				if(count($response)){
					if( strcmp($_POST['password'],$response[0]['password']) == 0 ){
						$output['is_error'] = false;
						$_SESSION['user'] = $_POST['username'];
					}else{
						$output['is_error'] = true; $output['error'] = "Wrong password"; 
					}
				}else{
					$output['is_error'] = true; $output['error'] = "Invalid username"; 
				}
				
				outputJSON($output);
				$proceed = false;
			}
			
			if($_POST['formname'] == "logout"){
				
				unset($_SESSION['user']);
				session_destroy();
				
				$proceed = false;
				
			}
		}
	}
	
	if($proceed){

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UG Admissions - Programs Database</title>
<link href="base.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:500,700,500italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
<script src="js/jquery-ui-1.8.22.custom/js/jquery-ui-1.8.22.custom.min.js" type="text/javascript"></script>
<link href="js/jquery-ui-1.8.22.custom/css/ui-lightness/jquery-ui-1.8.22.custom.css" rel="stylesheet" type="text/css" />

<?php if(isset($_SESSION['user'])){ ?>
	<script type="text/javascript" src="script.js"></script>
<?php }else{ ?>
	<script type="text/javascript" src="login.js"></script>
    <style type="text/css">
    	body{overflow:hidden;}
    </style>
<?php } ?>

</head>

<body>

<div id="wrapper">
	
  <div class="spc10">	</div>
    
    <?php if(!isset($_SESSION['user'])){ ?>
        
        <table align="center" border="0" cellspacing="0" cellpadding="0" class="logintable">
            <tr><td colspan="2" vertical-align="bottom"><img src="images/topbar.png"></td></tr>
            <tr><td colspan="2" align="center"><h2>Playground</h2></td></tr>
            <tr><td colspan="2" align="center">
            
                <form method="post" action="." id="login" name="login">
                    <table width="100%" border="0" cellspacing="5" cellpadding="10">
                        <tr>
                            <td align="right" width="30%"><strong>Username</strong></td>
                          	<td width="70%"><input id="username" type="text" name="username" /></td>
                        </tr>
                        <tr>
                            <td align="right"><strong>Password</strong></td>
                          <td><input id="password" type="password" name="password" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" class="button red" value="Enter Playground" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><div id="loginstatus">&nbsp;</div></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">Copyright ©2012 | Stony Brook University<br /><br /></td>
                        </tr>
                    </table>
                    <input type="hidden" name="formname" value="login" />
                </form>
        
            </td></tr>
        </table>
    
    <?php }else{ ?>
    
    	<div align="center"><img src="images/topbar.png"></div>    	
        <div align="center"><h2>SB Majors, Minors and Combined Degree Programs</h2></div>
        <div class="spc10"></div>

        <div align="center">
            <button id="rockmongo" class="button black">DB Admin(Rockmongo)</button> &nbsp;
            <button id="godown" class="button black">Add Program</button> &nbsp;
            <button id="combined" class="button black">Create Combined</button> &nbsp;
            <button id="apihelp" class="button black">API Docs</button> &nbsp;
            <button id="api" class="button black">API Preview</button> &nbsp;
            <button id="plugin" class="button black">Chrome Plugin</button> &nbsp;
          	<button id="logout" class="button black">Logout</button>
        </div>
        <div class="spc10"></div>
        
        <div id="combinedwrapper">
        	<h2>Combined Degree Programs</h2>
            
            <span id="combinedlistcount"></span>
            <div id="combinedlist"></div>
            
            <div class="clearfix"></div>            
            <div class="spc10"></div>
            
        	<select id="pg1">
                <option value="">Select one...</option>
            </select>
            
            <select id="pg2">
                <option value="">Select one...</option>
            </select>
            
            <button id="createcombined" class="button black">Create</button>&nbsp;
			<button id="closecombined" class="button black">Close</button>
            <div class="spc10"></div>
            <img src="images/loader.gif" id="combinedloading" align="left" />
            <div id="combinedresult"></div>
        
        </div>
        
        <table id="list" width="100%" border="1" cellpadding="5" cellspacing="3"></table>
        
        <table id="listTemplate">
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
    
    <?php } ?>

</div>

</body>
</html>

<?php } ?>
