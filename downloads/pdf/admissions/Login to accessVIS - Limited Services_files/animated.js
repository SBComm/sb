/* animated.js
 * Copyright 2008 - Tim Climis and Indiana University
 *
 * Contains code for animated elements with the name foobox
 */

function popup(id) {
	var box = document.getElementById(id);
	var overlay = writeOverlay();
	var page = getPageSize();

	box.style.display = "block"; // display box so it has dimensions
	var finalWidth = box.offsetWidth - 2; // compensate for borders
	var finalHeight = box.offsetHeight - 2;
	box.style.display = "none"; // hide it again

	// set appearance dimensions
	var initialWidth = 0;
	var initialHeight = 2;
	box.style.width = initialWidth+"px";
	box.style.height = initialHeight+"px";
	box.style.top = (page[3]-initialHeight)/2+"px";
	box.style.left = (page[2]-initialWidth)/2+"px";

	new Effect.Appear(overlay, {
		to: 0.8,
		duration: 0.5,
		afterFinish: function() {
			box.style.display = "block";
			new Effect.Morph (box, {
				style: "width: "+finalWidth+"px; left: "+(page[2]-finalWidth)/2+"px;",
				duration: 1.0,
				afterFinish: function() {
					new Effect.Morph (box, {
						style: "height: "+finalHeight+"px; top: "+(page[3]-finalHeight)/2+"px;",
						duration: 1.0
					});
				}
			});
		}
	});
}
