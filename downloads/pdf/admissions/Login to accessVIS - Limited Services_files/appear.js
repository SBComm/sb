/* appear.js
 * Copyright 2007 by Tim Climis and Indiana University
 *
 * Contains code for items that just show up without animations:
 *   - menus
 *   - processing box
 *
 */

function showPopup(id) {
	var overlay = writeOverlay();
	var popup = document.getElementById(id);
	
	popup.style.display = "block";
	
	var width = popup.offsetWidth;
	var height = popup.offsetHeight;
	popup.style.display = "none";
	
	var pageSize = getPageSize();
	
	popup.style.top = (pageSize[3] - height) / 2 + "px";
	popup.style.left = (pageSize[2] - width) / 2 + "px";
	
	new Effect.Appear("overlay", {
		to: 0.8,
		duration: 0.5,
		afterFinish: function(){
			new Effect.Appear(popup, {
				afterUpdate: function(){
					popup.style.display = "block";
				},
				duration: 1.0
			});
		}
	});
}

function hidePopup(id) {
	document.getElementById(id).style.display="none";
	hideOverlay();
}

/* writeOverlay()
 * creates (if needed) and returns the overlay
 */

function writeOverlay() {
	var pageSize = getPageSize();

// if overlay doesn't exist ...
	if (!document.getElementById("overlay")) {
// ... then write overlay code

		var objOverlay = document.createElement("div");
		objOverlay.id = "overlay";
		document.body.appendChild(objOverlay);
	}

	var objOverlay = document.getElementById("overlay");
	objOverlay.style.display = "none";
	objOverlay.style.width = pageSize[0]+"px";
	objOverlay.style.height = pageSize[1]+"px";

	return objOverlay;
}

/* hideOverlay()
 * hides the overlay
 */

function hideOverlay() {
	if(document.getElementById('overlay') != null)
		document.getElementById('overlay').style.display = "none";
}

/* getPagesize()
 * Figures out how big overly needs to be to cover entire page
 */

function getPageSize() {

	var xScroll, yScroll;

	if (window.innerHeight && window.scrollMaxY) {
		xScroll = document.body.scrollWidth;
		yScroll = window.innerHeight + window.scrollMaxY;
	}
	else if (document.body.scrollHeight > document.body.offsetHeight) { // all but Explorer Mac
		xScroll = document.body.scrollWidth;
		yScroll = document.body.scrollHeight;
	}
	else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
		xScroll = document.body.offsetWidth;
		yScroll = document.body.offsetHeight;
	}

	var windowWidth, windowHeight;
	if (self.innerHeight) {	// all except Explorer
		windowWidth = self.innerWidth;
		windowHeight = self.innerHeight;
	}
	else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
		windowWidth = document.documentElement.clientWidth;
		windowHeight = document.documentElement.clientHeight;
	}
	else if (document.body) { // other Explorers
		windowWidth = document.body.clientWidth;
		windowHeight = document.body.clientHeight;
	}

	// for small pages with total height less then height of the viewport
	if(yScroll < windowHeight)
		pageHeight = windowHeight;
	else
		pageHeight = yScroll;

	// for small pages with total width less then width of the viewport
	if(xScroll < windowWidth)
		pageWidth = windowWidth;
	else
		pageWidth = xScroll;

	return new Array(pageWidth,pageHeight,windowWidth,windowHeight)
}
