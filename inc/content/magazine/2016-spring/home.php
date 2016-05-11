<section class="magazine-feature rays-border-left rays-border-right" style="background-image: url('magazine/2016-spring/images/hero/ocean.jpg')">
	<h2 class="magazine-feature_title">Ocean <br />Hero</h2>
	<p class="magazine-feature_sub">Ellen Pikitch has gracefully assumed the role of a traveling expert on fisheries management <cite class="magazine-feature_author">by Elizabeth Royte</cite></p>
	<a class="magazine-feature_button brand-button" href="magazine/2016-spring/ocean-hero">Full Story</a>
	<a class="magazine-feature_more-button" href="#stories" data-disable-history-state="true" data-offset="true" data-offset-top="-124" data-offset-breakpoint-start="1320">More from <span>Stony Brook Magazine</span></a>
</section>
<section id="stories" class="mag-articles grid-3 clearfix">

	<?php
		/* Outputs the spotlights from Happenings */
		/* --- TEMPLATE --- */
		/*
			<article class="grid-item grid-item--red grid-item--hover-image grid-item--hover-state-show-on-mobile grid-item--star-instead-of-line">
				<img src="magazine/2016-spring/images/grid/1-presidents-letter-hover-state.jpg" alt="" />
				<a href="#">
					<div class="mag-articles_title">
						<h3>President's <br />Letter
						<p>Samuel L. Stanley Jr., MD <span class="nowrap">looks FAR BEYOND</span></p></h3>
						<button class="brand-button">Read Story</button>
					</div>
				</a>
			</article>
		 */
        $file = "scripts/get-magazine-stories.php";
        include($path . $file);
    ?>

<?php /*
	<article class="grid-item grid-item--red grid-item--hover-image grid-item--hover-state-show-on-mobile grid-item--star-instead-of-line grid-item--hide-close-button">
		<img src="magazine/2016-spring/images/grid/1-presidents-letter-hover-state.jpg" alt="" />
		<a href="#">
			<div class="mag-articles_title">
				<h3>President's <br />Letter
				<p>Samuel L. Stanley Jr., MD <span class="nowrap">looks FAR BEYOND</span></p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/2-ocean-hero.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--primary">Feature</span>
			<div class="mag-articles_title">
				<h3>Ocean <br />Hero
				<p>From Shinnecock Bay to the UN, Ellen Pikitch is saving the sea</p></h3>
				<button class="brand-button">Read Story</button>
				<span class="grid-item_close-overlay"><span class="grid-item_close-overlay_x">Back to story</span></span>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/3-no-dream-too-big.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--primary">Feature</span>
			<div class="mag-articles_title">
				<h3>No Dream <br />Too Big
				<p>College was the last thing on Jonathan Conyers’ mind</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/4-personalizing-brain-surgery.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--primary">Feature</span>
			<div class="mag-articles_title">
				<h3>Personalizing <br />Brain Surgery
				<p>A vascular simulator is revolutionizing neurosurgery</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/5-case-for-stony-brook.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--primary">Feature</span>
			<div class="mag-articles_title">
				<h3>The Case for <br />Stony Brook
				<p>Campaign co-chairs share a passion for excellence</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/6-where-creativity-lives-on.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--primary">Feature</span>
			<div class="mag-articles_title">
				<h3>Where Creativity <br />Lives On
				<p>Pollock-Krasner House illuminates art history</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/7-heforshe.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--secondary">Momentum: <span>How &amp; Why</span></span>
			<div class="mag-articles_title">
				<h3>We Are <br />Heforshe
				<p>A commitment to the most pressing issues of our time</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/8-roy-lacey-1.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--secondary">Momentum: <span>Who</span></span>
			<div class="mag-articles_title">
				<h3>Roy Lacey: An Accelerating Cereer in Nuclear Chemistry
				<p>Stony Brook faculty at the forefront of discovery</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/9-dispatches-from-our-labs.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--secondary">Momentum: <span>News &amp; Notes</span></span>
			<div class="mag-articles_title">
				<h3>News &amp; <br />Notes
				<p>Dispatches from our labs and beyond</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/10-by-the-numbers.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--secondary">Momentum: <span>By the Numbers</span></span>
			<div class="mag-articles_title">
				<h3>The Public Research University Of Tomorrow
				<p>Numbers tell a story of access, impact and innovation</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/11-campus-to-table.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--secondary">Community</span>
			<div class="mag-articles_title">
				<h3>Campus To Table
				<p>Two gardens sow seeds for health</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item grid-item--swap-images-on-hover grid-item--cursor-all">
		<img class="grid-item_hover-hide" src="magazine/2016-spring/images/grid/12-an-air-of-respect.jpg" alt="" />
		<img class="grid-item_hover-show" src="magazine/2016-spring/images/grid/12-an-air-of-respect-hover.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--secondary">Community</span>
			<div class="mag-articles_title hide-accessible">
				<h3>An Air of Respect
				<p>Stony Brook Universty is now tobacco-free</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item">
		<img src="magazine/2016-spring/images/grid/13-together-we-transform.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--secondary">Community</span>
			<div class="mag-articles_title">
				<h3>Together We Transform
				<p>A bold vision for Stony Brook Athletics</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
	<article class="grid-item grid-item--swap-images-on-hover grid-item--cursor-all">
		<img class="grid-item_hover-hide" src="magazine/2016-spring/images/grid/14-class-notes-w-text.jpg" alt="" />
		<img class="grid-item_hover-show" src="magazine/2016-spring/images/grid/14-class-notes-w-hover.jpg" alt="" />
		<a href="#">
			<div class="mag-articles_title hide-accessible"><h3>Class Notes</h3></div>
		</a>
	</article>
	<article class="grid-item grid-item--no-title-default">
		<img src="magazine/2016-spring/images/grid/15-q-and-a.jpg" alt="" />
		<a href="#">
			<span class="grid-item_category grid-item_category--secondary">Focus</span>
			<div class="mag-articles_title">
				<h3>Q&amp;A
				<p>Karen Kernan connects undergraduates with exciting research</p></h3>
				<button class="brand-button">Read Story</button>
			</div>
		</a>
	</article>
*/ ?>
</section>
<section class="mag-gallery clearfix">
	<div class="mag-gallery_images">

		<h3>Gallery</h3>

		<?php echo $main_gallery; ?>

<?php /*
		<a class="item nivo-lightbox mag-gallery_images_thumb" href="#image-1" data-lightbox-type="inline" data-caption="true" data-lightbox-gallery="mag-gallery">
			<img src="magazine/2016-spring/images/gallery/gallery-thumb-1.jpg" alt="" />
		</a>
		<div id="image-1" class="inline-lightbox-content">
			<img class="mag-gallery_images_image" src="magazine/2016-spring/images/gallery/gallery-thumb-1.jpg" alt="" />
			<div class="mag-gallery_images_caption">
				<button class="mag-gallery_images_caption_view-trigger"><span>View</span> caption</button>
				<div>
					<h4>HEALING THE BAY</h4>
					<p>Fish from Shinnecock Bay are collected and analyzed by Stony Brook University scientists seeking to understand and rebuild the health of an endangered ecosystem. The effort is managed by the Shinnecock Bay Restoration Project through Stony Brook’s School of Marine and Atmospheric Sciences. Photo: Pete Thompson.</p>
				</div>
			</div>
		</div>

		<a class="clearfix mag-gallery_images-hidden nivo-lightbox" href="http://www.youtube.com/watch?v=w4fYSDeYX9c" data-options="autoplay=1&amp;modestbranding=1&amp;rel=0" data-lightbox-gallery="mag-gallery">Watch the video&nbsp;<i class="fa fa-play-circle"></i></a>
		
		<a class="item nivo-lightbox mag-gallery_images_thumb" href="#image-2" data-lightbox-type="inline" data-caption="true" data-lightbox-gallery="mag-gallery">
			<img src="magazine/2016-spring/images/gallery/gallery-thumb-2.jpg" alt="" />
		</a>
		<div id="image-2" class="inline-lightbox-content">
			<img class="mag-gallery_images_image" src="magazine/2016-spring/images/gallery/gallery-thumb-2.jpg" alt="" />
			<div class="mag-gallery_images_caption">
				<button class="mag-gallery_images_caption_view-trigger"><span>View</span> caption</button>
				<div>
					<h4>JOURNALISM WITHOUT WALLS</h4>
					<p>Students from Stony Brook’s School of Journalism reported from Istanbul in 2014 through the school’s Journalism Without Walls program. The program affords students a unique opportunity to hone journalistic skills in locations throughout the world. Photo: Alaina Mattis ’15.</p>
				</div>
			</div>
		</div>
		
		<a class="item nivo-lightbox mag-gallery_images_thumb" href="#image-3" data-lightbox-type="inline" data-caption="true" data-lightbox-gallery="mag-gallery">
			<img src="magazine/2016-spring/images/gallery/gallery-thumb-3.jpg" alt="" />
		</a>
		<div id="image-3" class="inline-lightbox-content">
			<img class="mag-gallery_images_image" src="magazine/2016-spring/images/gallery/gallery-thumb-3.jpg" alt="" />
			<div class="mag-gallery_images_caption">
				<button class="mag-gallery_images_caption_view-trigger"><span>View</span> caption</button>
				<div>
					<h4>HANDS-ON CREATIVITY</h4>
					<p>The Art Department of Stony Brook University offers students a thorough background in art history and criticism while providing hands-on training in the creative, technical and practical aspects of the discipline. Photo: Pete Thomson.</p>
				</div>
			</div>
		</div>
		
		<a class="item nivo-lightbox mag-gallery_images_thumb" href="#image-4" data-lightbox-type="inline" data-caption="true" data-lightbox-gallery="mag-gallery">
			<img src="magazine/2016-spring/images/gallery/gallery-thumb-4.jpg" alt="" />
		</a>
		<div id="image-4" class="inline-lightbox-content">
			<img class="mag-gallery_images_image" src="magazine/2016-spring/images/gallery/gallery-thumb-4.jpg" alt="" />
			<div class="mag-gallery_images_caption">
				<button class="mag-gallery_images_caption_view-trigger"><span>View</span> caption</button>
				<div>
					<h4>MORNING COMMUTE</h4>
					<p>Study Abroad Madagascar is a rigorous program focused on the biodiversity and cultures of Madagascar, providing training for future scientists and explorers. Students have the opportunity to work with world-renowned scientists like lemur expert Patricia Wright while availing themselves of the facilities of Stony Brook’s Centre Valbio, located in the rainforest of Ranomafana National Park. Photo: Matt Checkowski.</p>
				</div>
			</div>
		</div>

		<a class="clearfix mag-gallery_images-hidden nivo-lightbox" href="http://www.youtube.com/watch?v=m6AKwb9TprM" data-options="autoplay=1&amp;modestbranding=1&amp;rel=0" data-lightbox-gallery="mag-gallery">Watch the video&nbsp;<i class="fa fa-play-circle"></i></a>

		<!--<a class="item nivo-lightbox" href="http://www.youtube.com/watch?v=ACRpdj5wjQc" data-lightbox-type="inline" data-caption="true" data-lightbox-gallery="mag-gallery"><img class="grid-item_hover-hide" src="magazine/2016-spring/images/gallery/gallery-thumb-1.jpg" alt="" /></a>-->
*/ ?>
	</div>
</section>