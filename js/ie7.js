/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referring to this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-user': '&#xe600;',
		'icon-ok': '&#xe601;',
		'icon-check': '&#xe602;',
		'icon-cogs': '&#xe603;',
		'icon-cog': '&#xe604;',
		'icon-desktop': '&#xe605;',
		'icon-laptop': '&#xe606;',
		'icon-tablet': '&#xe607;',
		'icon-mobile': '&#xe608;',
		'icon-microphone': '&#xe609;',
		'icon-phone': '&#xe60a;',
		'icon-angle-right': '&#xe60b;',
		'icon-angle-left': '&#xe60c;',
		'icon-angle-up': '&#xe60d;',
		'icon-angle-down': '&#xe60e;',
		'icon-share-alt': '&#xe60f;',
		'icon-download-alt': '&#xe610;',
		'icon-circle-arrow-left': '&#xe611;',
		'icon-circle-arrow-right': '&#xe612;',
		'icon-circle-arrow-up': '&#xe613;',
		'icon-circle-arrow-down': '&#xe614;',
		'icon-code': '&#xe615;',
		'icon-star': '&#xe616;',
		'icon-star-empty': '&#xe617;',
		'icon-star-half-full': '&#xe618;',
		'icon-book': '&#xe619;',
		'icon-bookmark': '&#xe61a;',
		'icon-envelope': '&#xe61b;',
		'icon-envelope-alt': '&#xe61c;',
		'icon-reorder': '&#xe61d;',
		'icon-search': '&#xe61e;',
		'icon-calendar': '&#xe61f;',
		'icon-calendar-empty': '&#xe620;',
		'icon-linkedin': '&#xe621;',
		'icon-road': '&#xe622;',
		'icon-camera-retro': '&#xe623;',
		'icon-thumbs-up': '&#xe624;',
		'icon-thumbs-down': '&#xe625;',
		'icon-heart-empty': '&#xe626;',
		'icon-certificate': '&#xe627;',
		'icon-file-xml': '&#xe628;',
		'icon-guitar': '&#xe629;',
		'icon-headphones': '&#xe62a;',
		'icon-pencil': '&#xe62b;',
		'icon-file-word': '&#xe62c;',
		'icon-file-excel': '&#xe62d;',
		'icon-html5': '&#xe62e;',
		'icon-html52': '&#xe62f;',
		'icon-css3': '&#xe630;',
		'icon-php': '&#xe631;',
		'icon-database': '&#xe632;',
		'icon-camera': '&#xe633;',
		'icon-camera2': '&#xe634;',
		'icon-vimeo2': '&#xe635;',
		'icon-vimeo': '&#xe636;',
		'icon-uniF691': '&#xe637;',
		'icon-uniF692': '&#xe638;',
		'icon-contact': '&#xe639;',
		'icon-certificate2': '&#xe63a;',
		'icon-monitor': '&#xe63b;',
		'icon-iphone': '&#xe63c;',
		'icon-nexus': '&#xe63d;',
		'icon-tennis': '&#xe63e;',
		'icon-americanfootball': '&#xe63f;',
		'icon-student': '&#xe640;',
		'icon-facebook': '&#xe641;',
		'icon-youtube': '&#xe642;',
		'icon-google-plus': '&#xe643;',
		'icon-twitter': '&#xe644;',
		'icon-feed': '&#xe645;',
		'icon-vimeo3': '&#xe646;',
		'icon-tumblr': '&#xe647;',
		'icon-soundcloud': '&#xe648;',
		'icon-youtube2': '&#xe649;',
		'icon-flickr': '&#xe64a;',
		'icon-flickr2': '&#xe64b;',
		'icon-location': '&#xe659;',
		'icon-superman': '&#xe663;',
		'icon-spiderman': '&#xe664;',
		'icon-food': '&#xe665;',
		'icon-cross': '&#xe64c;',
		'icon-piano': '&#xe64d;',
		'icon-brush': '&#xe64e;',
		'icon-microphone2': '&#xe64f;',
		'icon-profile': '&#xe650;',
		'icon-profile2': '&#xe651;',
		'icon-info': '&#xe652;',
		'icon-batman': '&#xe65a;',
		'icon-baseball': '&#xe65b;',
		'icon-football': '&#xe65c;',
		'icon-equalizer': '&#xe65d;',
		'icon-tools': '&#xe65e;',
		'icon-stats': '&#xe65f;',
		'icon-bike': '&#xe660;',
		'icon-clipboard': '&#xe661;',
		'icon-clipboard2': '&#xe662;',
		'icon-music': '&#xe653;',
		'icon-music2': '&#xe654;',
		'icon-evernote': '&#xe666;',
		'icon-photoshop': '&#xe655;',
		'icon-illustrator': '&#xe656;',
		'icon-info2': '&#xe657;',
		'icon-images': '&#xe658;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
