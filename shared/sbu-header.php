	<!-- inc -->
	<?php
		$this_dir = $_SERVER['REQUEST_URI'];
		$dev_dir  = '/development/sb/';
		$prod_dir = '/sb/';
		$is_dev = strpos($this_dir,$dev_dir);
		if($is_dev !== false) {
			$inc = $_SERVER['DOCUMENT_ROOT'] . $dev_dir . "inc/inc.php";
		} else {
			$inc = $_SERVER['DOCUMENT_ROOT'] . $prod_dir . "inc/inc.php";
		}
		include($inc);
		include('sbu-head-code.php');
	?>
	<!-- /inc -->

    <div class="sbu-wrapper clearfix">
    	<div class="sbu-sub-wrapper">

	        <div class="header-container">
	        	<div class="nav-elements-container">
		        	<!-- <quick-nav> -->
						<?php
							include($path . $quick_nav);
						?>
					<!-- </quick-nav> -->
		            <!-- <more-nav> -->
						<?php 
							include($path . $more_nav);
						?>
					<!-- </more-nav> -->
		            <!-- <audience-nav> -->
						<?php if($audience_nav==1) {
							include($path . $audience_nav);
						}?>
					<!-- </audience-nav> -->
				</div>
				<!-- <logo-container> -->
					<?php 
						include($path . $logo_container);
					?>
				<!-- </logo-container> -->
	        </div>
	        <div class="main-nav-container clearfix">
	        	<!-- <site-nav> -->
					<?php 
						if($nav_site=='alumni') {
							$nav_type = 'big-n-bold';
							$include_nav = 'nav/alumni-nav.php';
						} else {
							$nav_type = 'default';
							$include_nav = $site_nav;
						}
						include($path . $include_nav);
					?>
				<!-- </site-nav> -->
	        </div>

	    </div>
	</div>


	<script type="text/javascript">

	    var initSBListeners = function() {
	        $( function() {
	            $( '#cd-dropdown' ).dropdown( {
	                gutter : 0
	            } );
	        });
	        //main.js init
	        var $moreNav = $('.more-nav');
	        var $audienceNav = $('.audience-nav');
	        $('.more-trigger').on('click',function(){
	            //console.log('clicked more-trigger');

	            if($(window).width()>=1008) {
	                if ( $audienceNav.is( ":visible" ) && $moreNav.is( ":hidden" ) ) {
	                    //console.log('audienceNav:visible and moreNav:hidden');
	                    $('.audience-trigger').click();
	                }
	            }

	            if ( $moreNav.is( ":hidden" ) ) {
	                $moreNav.slideDown();
	                //$moreNav.show().animate({ height : moreNavHeight }, { duration: 600 });
	                $(this).addClass('selected');
	            } else {
	                $moreNav.slideUp();
	                /*$moreNav.animate({ height: 0 }, { duration: 600, complete: function () {
	                    $moreNav.hide();
	                  } 
	                });*/
	                $(this).removeClass('selected');
	            }
	        });
	        //audience-trigger
	        $('.audience-trigger').on('click',function(){
	            //console.log('clicked audience-trigger');
	            if($(window).width()>=1008) {
	                if ( $moreNav.is( ":visible" ) && $audienceNav.is( ":hidden" ) ) {
	                    //console.log('audienceNav:hidden and moreNav:visible');
	                    $('.more-trigger').click();
	                }
	            }

	            if ( $audienceNav.is( ":hidden" ) ) {
	                $(this).find('.fa-caret-right').addClass('fa-caret-up').removeClass('fa-caret-right');
	                $(this).closest('li').prev().addClass('before-selected');
	                $audienceNav.slideDown();
	                $(this).addClass('selected');
	            } else {
	                $(this).find('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-right');
	                $audienceNav.slideUp();
	                $(this).removeClass('selected');
	            }
	        });
	        //search position
	        var timeoutID;
	        var searchContainer = $('.search-container.default');
	        var configuredSearch = false;

	        function setSearchPosition() {
	            timeoutID = window.setTimeout(configureSearchPosition, 750);
	        }

	        function configureSearchPosition() {
	            if(configuredSearch) {
	                searchContainer.removeClass('set-top-0');
	                return;
	            }

	            var headerContainer = $('.header-container');
	            var headerContainerHeight = headerContainer.height();
	            
	            //formula is top = h - 2h - 2
	            searchContainerTop = headerContainerHeight - (headerContainerHeight * 2) - 2;
	            var cssFriendlyTop = searchContainerTop + "px";

	            searchContainer.css( { top : cssFriendlyTop } );

	            configuredSearch = true;
	        }

	        function resetSearchPosition() {
	            searchContainer.addClass('set-top-0');
	        }

	        function clearSearchPositionTimer() {
	            window.clearTimeout(timeoutID);
	        }
	        if($(window).width()>=1022) {
	            setSearchPosition();
	        }

	        $(window).resize(function(){
	            if($(window).width()>=1022) {
	                configureSearchPosition();
	            } else {
	                if(configuredSearch && !$('html').hasClass('ie9')) {
	                    resetSearchPosition();
	                }
	            }
	        });
	    };

	    var getSource = function() {
	        //header
	        var headerURL = 'http://mobile.cc.stonybrook.edu/sb/shared/sbu-header.php?include=0&pageTitle=Calendar&pageURL=http://calendar.activedatax.com/stonybrook';
	        $.ajax({
	            url: 'http://mobile.cc.stonybrook.edu/sb/shared/get-json.php?url='+encodeURIComponent(headerURL),
	            type: 'GET',
	            dataType: 'jsonp',
	            error: function(xhr, status, error) {
	                console.log(status + ": " + error);
	            },
	            success: function(header) {
	                $('#static-header-code').replaceWith(header);
	                initSBListeners();
	            }
	        });
	        //footer
	        var footerURL = 'http://mobile.cc.stonybrook.edu/sb/shared/sbu-footer.php?include=0&footer=1&footerbar=1&totop=1';
	        $.ajax({
	            url: 'http://mobile.cc.stonybrook.edu/sb/shared/get-json.php?url='+encodeURIComponent(footerURL),
	            type: 'GET',
	            dataType: 'jsonp',
	            error: function(xhr, status, error) {
	                console.log(status + ": " + error);
	            },
	            success: function(footer) {
	                $('#static-footer-code').replaceWith(footer);
	                $('#totop').on('click',function(event) {
	                    $('body').scrollTo('0px',800);
	                });

	                //custom footer modifications here
	                
	            }
	        });
	    };
	    
	    getSource();

	</script>
		        