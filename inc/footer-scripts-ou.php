<?php 
/*
echo $social_feed_channel["twitter"];
echo 'social_feed_num_items: '.$social_feed_num_items;
echo 'social_feed_widget: '.$social_feed_widget;
echo 'social_channel_id: '.$social_channel_id;
*/
if($social_feed_widget) { ?>
	<script src="https://www.stonybrook.edu/js/social-v2/js/jquery.social.stream.wall.1.7.js"></script>
	<script src="https://www.stonybrook.edu/js/social-v2/js/jquery.social.stream.1.6.js"></script>
	<script src="https://www.stonybrook.edu/js/social/preload-messages.js"></script>

	<?php if($live_filter==true) { ?>
		<?php includeAsset('js','https://www.stonybrook.edu/js/vendor/jquery.fastLiveFilter.js'); ?>
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
									url: 'https://www.stonybrook.edu/social/v2/twitter.php',
									retweets: true
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
									url: 'https://www.stonybrook.edu/social/v2/facebook.php'
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
									url: 'https://www.stonybrook.edu/social/v2/rss.php'
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
	
	<script type="text/javascript" src="https://www.stonybrook.edu/js/social/custom.js"></script>

<?php } ?>