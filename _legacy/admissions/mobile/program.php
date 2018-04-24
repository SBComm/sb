<?php 

require_once "simple_html_dom.php";

$url_prefix = "http://sb.cc.stonybrook.edu/bulletin/current/academicprograms/";
$program_code = "";

if($_GET){
	$program_code = $_GET['p'];
	if(empty($program_code)) header('Location: academics');
}
else
	header('Location: academics');
	
$url_home 			= $url_prefix.$program_code;
$url_desc 			= $url_prefix.$program_code."/about.php";
$url_courses		= $url_prefix.$program_code."/courses.php";

$html_raw_home 		= file_get_html($url_home);
$html_raw_desc 		= file_get_html($url_desc);
//$html_raw_courses 	= file_get_html($url_courses);

$title = $html_raw_home->find('div.column_2_text h2',0)->innertext;

?>

<?php $prefix = "../"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>SB Admissions</title>
<link href="<?php echo $prefix; ?>style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript">
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/blackberry/gi)) || (navigator.userAgent.match(/Android/gi))) {
		window.scrollTo(0,1);
	 }
</script>
<script type="text/javascript" src="<?php echo $prefix; ?>custom.js"></script>
<script type="text/javascript">
	
	$(document).ready(function(){
		$("a.loadcourses").click(function(){
			$("#loader").show();
			$.get('http://admissions.cc.stonybrook.edu/mobile/program-courses?p=<?php echo $program_code; ?>', function(data) {
				$('#courses_container').html(data);
				$("#courses").slideDown();
				$("#showcourses").slideUp();
			});
			return false;
		});
	
	});
	
</script>
</head>

<body onload="preloadImages('<?php echo $prefix; ?>images/banner.jpg');">

<div id="wrapper">

	<div id="container">
    
    	<div id="header">
        	
            <div id="topnav">
            
            	<div id="back"><a href="/mobile/academics" id="back_button"><img src="<?php echo $prefix; ?>images/back.png" border="0"/></a></div>
                
                <div id="page-title">Program</div>
            
          </div>
            <!-- /topnav -->
            
            <div id="banner">
            	<img src="<?php echo $prefix; ?>images/banner.jpg" width="100%" height="auto" id="bannerpic" />
            </div>
            <!-- /Banner -->
        
        </div>
        <!-- /Header -->
        
        <div id="content">
            
            <div id="content-red">
            	<div>
                	
                    <div class="content-rounded-white">
                    	<div>
                        	<span class="boldred"><?php echo $title; ?></span>
                        	                            
                            <?php 
								$i=0;
								foreach($html_raw_home->find('div.column_2_text p') as $p) {
									//if($i++ == 0) continue;
									if(trim($p->innertext) == "") continue;
									echo "<p>".trim($p->innertext)."</p>";
								}
							?>  
                            <hr />
                            <?php
								$n = 0;
								if(isset($html_raw_desc->find('div.column_2_text p',$n)->class)) $n++;
								
								echo "<p>".$html_raw_desc->find('div.column_2_text p',$n)->innertext."</p>";
								echo "<p>".$html_raw_desc->find('div.column_2_text p',$n)->next_sibling ()->innertext."</p>";
							?>                          
                            
                      </div>
               	  </div> 
                    <!-- /content-rounded-white --> 
                    
                    <div class="spc15"></div>
                    
                    <div class="content-second-nav" id="showcourses">
                    	<div id="vmenu-second">
                            <ul class="gray">
                                <li class="vmenu-second"><a class="loadcourses" href="#">Show All Courses <img src="../images/loaders/white-loader.gif" align="absmiddle" id="loader" hspace="10" style="display:none;"/></a></li>
                            </ul>
                        </div>
                        <!-- /vmenu -->
                    </div>  
                    <!-- /content-second-nav --> 
                    
                    <div class="content-second-nav" id="courses" style="display:none;">
                    	<div id="vmenu-second">
                            <ul class="gray">
                                <li class="vmenu-header"><span>All Courses</span></li>
                                <li class="vmenu-second-white">
                                	<div>
	                                    <p id="courses_container">
                                        	  
                                        
                                        </p>                                
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /vmenu -->
                    </div>  
                    <!-- /content-second-nav -->  
                    
                    <!--
                    <div class="content-second-nav">
                    	<div id="vmenu-second">
                            <ul class="gray">
                            	<li class="vmenu-header"><span>Download PDFs</span></li>
                                <li class="vmenu-second"><a href="<?php //echo $url_home."/index.pdf"; ?>" target="_blank">Program</a></li>
                                <li class="vmenu-second"><a href="<?php //echo $url_home."/courses.pdf"; ?>" target="_blank">Courses</a></li>
                            </ul>
                        </div>
                        <!-- /vmenu 
                    </div>  
                    <!-- /content-second-nav --> 
                    
                    <div class="spc15"></div>
                    
                    <div class="content-second-nav">
                    	<div id="vmenu-second">
                            <ul class="gray">
                                <li class="vmenu-second"><a href="<?php echo $url_home; ?>" target="_blank">Read More Info</a></li>
                            </ul>
                        </div>
                        <!-- /vmenu -->
                    </div>  
                    <!-- /content-second-nav -->
                                          
                    
                </div>            
            </div>
            <!-- /content-red -->
            
        
        </div>
        <!-- /content -->
        
        <div id="footer">
        	<div id="social">
            	<div>
                <a href="http://m.facebook.com/stonybrooku" target="_blank"><img src="http://admissions.cc.stonybrook.edu/mobile/images/facebook.png" alt="" border="0" /></a>
                <a href="http://www.twitter.com/stonybrooku" target="_blank"><img src="http://admissions.cc.stonybrook.edu/mobile/images/twitter.png" alt="" border="0" /></a>
				<a href="http://instagram.com/stonybrooku"><img src="http://admissions.cc.stonybrook.edu/mobile/images/instagram.png" alt="instagram" width="35" height="35" border="0" /></a>
                <a href="http://www.youtube.com/user/SBUAdmissions" target="_blank"><img src="http://admissions.cc.stonybrook.edu/mobile/images/youtube.png" alt="" border="0" /></a></div>
          </div>
            <!-- /social -->
            
            <div id="bottombar">
            	<div>Stony Brook University	</div>
            </div>
            <!-- /bottom bar -->
        </div>
        <!-- /footer -->    
    
    </div>
    <!-- /Container -->

</div>
<!-- /Wrapper -->

</body>
</html>
