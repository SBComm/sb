<?php if($mega_nav_ou==true) { ?>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/jquery/jquery-1.11.1.min.js"></script>

	<?php includeAsset('js','js/plugins.js'); ?>
	<?php includeAsset('js','js/main.js'); ?>

	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/jquery.animateNumber.min.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/responsive.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/plugins.js"></script>

	<script type="text/javascript" src="http://www.stonybrook.edu/js/vendor/jquery.sticky.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/js/vendor/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/js/vendor/jquery.easing.compatibility.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/jquery.fittext.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/jquery.fastLiveFilter.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/jquery.localScroll.min.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/js/vendor/jquery.ba-bbq.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/js/vendor/jquery.motio.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/js/vendor/jquery.tooltipster.min.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/filter/text-filter.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/waypoints/jquery.waypoints.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/waypoints/shortcuts/inview.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/countUp.min.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/plugins/slick/slick.min.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/plugins/nivo-lightbox/nivo-lightbox.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb-v2/main.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/plugins/tablesaw/tablesaw.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb/accordion-nav/accordion-nav.js"></script>
	<script type="text/javascript" src="http://www.stonybrook.edu/commcms/_resources/js/sb/vendor/tooltipster/jquery.tooltipster.min.js"></script>
<?php } ?>
<?php if($mega_nav==true) { ?>
	<?php includeAsset('js','js/mega-nav-2017.js'); ?>
	<?php includeAsset('js','js/mlpushmenu/classie.js'); ?>
	<?php includeAsset('js','js/mlpushmenu/mlpushmenu.js'); ?>
<?php } ?>
<script>
	new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
</script>

<?php 
/*
echo $social_feed_channel["twitter"];
echo 'social_feed_num_items: '.$social_feed_num_items;
echo 'social_feed_widget: '.$social_feed_widget;
echo 'social_channel_id: '.$social_channel_id;
*/
if($social_feed_widget) { ?>
	<script src="/js/social-v2/js/jquery.social.stream.wall.1.7.js"></script>
	<script src="/js/social-v2/js/jquery.social.stream.1.6.js"></script>
	<?php includeAsset('js','/js/social/preload-messages.js'); ?>

	<?php if($live_filter==true) { ?>
		<?php includeAsset('js','js/vendor/jquery.fastLiveFilter.js'); ?>
		<script>
			$('#live-filter-search').fastLiveFilter('#live-filter-list ul');
		</script>
    <?php } ?>

	<?php
		$social_feeds = '';
		for($i=1; $i<=$social_feed_widget_num; $i++) {

			if($social_channel[$i]=='twitter') { ?>
				<script type="text/javascript">
					$(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								twitter: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: '',
									search: '',
									out: 'intro,thumb,text,share',
									thumb: true,
									url: '/social/v2/twitter.php'
								}
							},
							rotate: {
								delay: 0
							},
							control: false,
							filter: false,
							wall: false,
							order: 'date',
							max: 'limit',
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } else if($social_channel[$i]=='facebook') { ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								facebook: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: '',
									search: '',
									feed: 'posts',
									text: 'contentSnippet',
									url: '/social/v2/facebook.php'
								}
							},
							rotate: {
								delay: 0
							},
							control: false,
							filter: false,
							wall: false,
							image_width: 3, //3 = 600 4 = 480 5 = 320 6 = 180
							order: 'date',
							max: 'limit',
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } else if($social_channel[$i]=='flickr') { ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								flickr: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: ''
								}
							},
							rotate: {
								delay: 0
							},
							control: false,
							filter: false,
							wall: false,
							image_width: 3, //3 = 600 4 = 480 5 = 320 6 = 180
							order: 'date',
							max: 'limit',
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } else if($social_channel[$i]=='instagram') { ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								instagram: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: '',
									accessToken: '46695629.992187b.160cb0d8518e4cb8ab72461002480d03',
									clientId: '992187b36560494abe8ea63eebf2c9c3',
									thumb: 'standard_resolution',
									comments: 3,
									likes: 10
								}
							},
							rotate: {
								delay: 0
							},
							control: false,
							filter: false,
							wall: false,
							order: 'date',
							max: 'limit',
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } else if($social_channel[$i]=='youtube') { ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								youtube: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: '',
									thumb: '0'
								}
							},
							rotate: {
								delay: 0
							},
							control: false,
							filter: false,
							wall: false,
							order: 'date',
							max: 'limit',
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } else if($social_channel[$i]=='rss') { ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								rss: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: '',
									url: '/social/v2/rss.php'
								},
							},
							rotate: {
								delay: 0
							},
							control: false,
							filter: false,
							wall: false,
							order: 'date',
							max: 'limit',
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } 

		}
	?>
	
	<script type="text/javascript" src="/js/social/custom.js"></script>

<?php } ?>