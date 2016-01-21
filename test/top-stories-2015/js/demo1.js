(function() {
	var triggerBttn = document.getElementById( 'trigger-overlay' ),
		triggerBoxes = document.getElementsByClassName('trigger-overlay'),
		overlay = document.querySelector( 'div.overlay' ),
		closeBttn = overlay.querySelector( 'button.overlay-close' );
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };

	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
		}
	}

	triggerBttn.addEventListener( 'click', toggleOverlay );
	closeBttn.addEventListener( 'click', toggleOverlay );

	for(var i=0; i < triggerBoxes.length ; i++){triggerBoxes[i].addEventListener( 'click', toggleOverlay );}

	var closeBttnBoxes = document.getElementsByClassName('overlay-close');
	for(var j=0; j < closeBttn.length ; j++){
	closeBttn[j].addEventListener( 'click' , function () {this.parentNode.className = this.parentNode.className.replace( /(?:^|\s)open(?!\S)/g , '' );} );
	}

})();