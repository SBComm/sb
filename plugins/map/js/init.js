var mapInit = function () {

    var stateNames = new Array();
    var stateURLs = new Array();
    var stateModes = new Array();
    var stateColors = new Array();
    var stateOverColors = new Array();
    var stateClickedColors = new Array();
    var stateText = new Array();
	
	var pinText = new Array();
	var pinNames = new Array();
	var pinUrls = new Array();
	var pinX = new Array();
	var pinY = new Array();
	var pinColors = new Array();
	var pinOverColors = new Array();
	var pinClickedColors = new Array();

    var offColor,
    strokeColor,
	offStrokeColor,
    abbrColor,
    mapWidth,
    mapHeight,
    useText,
	useTextAtBottom,
    textAreaWidth,
    textAreaPadding,
	win,
	winWidth,
	r,
	ratio,
	isMobile,
	pinSize,
	responsive,
	useParameterInUrl;

    var mouseX = 0;
    var mouseY = 0;
    var current = null;
	var isPin = false;

    // Detect if the browser supports ajax.
    var hasAjax = jQuery.support.ajax;

    $.ajax({
        type: 'GET',
        url: 'plugins/map/xml/usaMapSettings.xml',
        dataType: hasAjax ? 'xml' : 'text',
        success: function (data) {


            var xml;
            if (!hasAjax) {
                xml = new ActiveXObject('Microsoft.XMLDOM');
                xml.async = false;
                xml.loadXML(data);
            } else {
                xml = data;
            }

            var $xml = $(xml);

            offColor = '#' + $xml.find('mapSettings').attr('offColor');
            strokeColor = '#' + $xml.find('mapSettings').attr('strokeColor');
			offStrokeColor = '#' + $xml.find('mapSettings').attr('offStrokeColor');
            abbrColor = '#' + $xml.find('mapSettings').attr('abbreviationColor');
            mapWidth = $xml.find('mapSettings').attr('mapWidth');
            mapHeight = $xml.find('mapSettings').attr('mapHeight');
            useText = $xml.find('mapSettings').attr('useText');
			useTextAtBottom = $xml.find('mapSettings').attr('useTextAtBottom') == "true" ? true : false;
            textAreaWidth = $xml.find('mapSettings').attr('textAreaWidth');
            textAreaPadding = $xml.find('mapSettings').attr('textAreaPadding');
			textAreaHeight = $xml.find('mapSettings').attr('textAreaHeight');
			pinSize = $xml.find('mapSettings').attr('pinSize');
			responsive = $xml.find('mapSettings').attr('responsive') == "true" ? true : false;
			useParameterInUrl = $xml.find('mapSettings').attr('useParameterInUrl') == "true" ? true : false;
			
			ratio = mapWidth/mapHeight;
			oMapWidth = mapWidth;


            if (useText == 'true') {
				
				

				if(useTextAtBottom){
					
					$("#text").css({
						'width': parseFloat(mapWidth, 10) - parseFloat(textAreaPadding, 10)*2 + 'px',
						'height': textAreaHeight + 'px',
						'marginTop': (parseFloat(mapHeight, 10) + 20) + 'px',
						'padding': textAreaPadding + 'px'
					});
				}
				else{
					
					mapWidth = parseFloat(mapWidth, 10) - (parseFloat(textAreaWidth) - parseFloat(textAreaPadding * 2));
					oMapWidth = mapWidth;
					mapHeight = mapWidth/ratio;
					
					$("#text").css({
						'width': (parseFloat(textAreaWidth) - parseFloat(textAreaPadding * 2)) + 'px',
							'height': (parseFloat(mapHeight) - parseFloat(textAreaPadding * 2)) + 'px',
							'display': 'inline',
							'float': 'right',
							'padding': textAreaPadding + 'px'
					});
					
				}

                $('#text').html($xml.find('defaultSideText').text());
            }


            //Parse xml
            $xml.find('stateData').each(function (i) {

                var $node = $(this);

                stateText.push($node.text());
                stateNames.push($node.attr('stateName'));
                stateURLs.push($node.attr('url'));
                stateModes.push($node.attr('stateMode'));
                stateColors.push('#' + $node.attr('initialStateColor'));
                stateOverColors.push('#' + $node.attr('stateOverColor'));
                stateClickedColors.push('#' + $node.attr('stateSelectedColor'));

            });
			
			$xml.find('pinData').each(function (i) {

                var $node = $(this);

                pinText.push($node.text());
                pinNames.push($node.attr('pinName'));
				pinUrls.push($node.attr('url'));
				pinX.push($node.attr('pinX'));
				pinY.push($node.attr('pinY'));
                pinColors.push('#' + $node.attr('initialPinColor'));
                pinOverColors.push('#' + $node.attr('pinOverColor'));
                pinClickedColors.push('#' + $node.attr('pinSelectedColor'));

            });
			
			win = $(window);
			winWidth = win.width();

            createMap();
			createPins();

        }
    });
	
	function createPins() {



        for (var i = 0; i<pinNames.length; i++) {

            //Create obj



			var pinattrs = {
				'cursor': 'pointer',
				'fill': pinColors[i],
				stroke: strokeColor,
				'id': i
			};
            


            //obj.push(r.path(usamappaths[state].path).attr(boxattrs));
			
			var pin = r.circle(pinX[i], pinY[i], pinSize).attr(pinattrs);
			pin.node.id = i;

    

            pin.mouseover(function (e) {

                e.stopPropagation();

                var id = $(this.node).attr('id');



				//Animate if not already the current state
				if (this != current) {
					this.animate({
						fill: pinOverColors[id]
					}, 500);
				}

				//tooltip

				$('#map').next('.point').remove();
				$('#map').after($('<div />').addClass('point'));
				$('.point').html(pinNames[id]).css({
					left: mouseX - 50,
					top: mouseY - 70
				}).fadeIn();


           


            });



            pin.mouseout(function (e) {

                var id = $(this.node).attr('id');

           

				//Animate if not already the current state
				if (this != current) {
					this.animate({
						fill: pinColors[id]
					}, 500);
				}

				$('#map').next('.point').remove();

                



            });

            pin.mouseup(function (e) {
               
                var id = $(this.node).attr('id');


                    //Reset scrollbar
                    var t = $('#text')[0];
                    t.scrollLeft = 0;
                    t.scrollTop = 0;

                    //Animate previous state out
                    if (current) {
                        var curid = $(current.node).attr('id');
                        current.animate({
                            fill: isPin ? pinColors[curid] : stateColors[curid]
                        }, 500);
                    }
					 isPin = true;

                    //Animate next
                    this.animate({
                        fill: pinClickedColors[id]
                    }, 500);

                    current = this;

                    if (useText == 'true') {
                        $('#text').html(pinText[id]);
                    } else {
                        //change "_self" to "_blank" if using in WP iframe
                        if(useParameterInUrl){
							window.open(pinText[id], '_self');
						}
						else{
                        	window.open(pinUrls[id], '_self');
						}
                    }
                
				
				
            });
            

          
        }


    }


    function createMap() {
		
		var shapeAr = [];

        //start map
        r = new ScaleRaphael('map', 930, 590),
            attributes = {
                fill: '#d9d9d9',
                cursor: 'pointer',
                stroke: strokeColor,
                    'stroke-width': 1,
                    'stroke-linejoin': 'round',
                    'font-family': 'Verdana',
                    'font-size': '19px',
                    'font-weight': 'bold'
            },
            arr = new Array();


        var usa = {};

        usa.alabama = r.set();
        usa.alaska = r.set();
        usa.arizona = r.set();
        usa.arkansas = r.set();
        usa.california = r.set();
        usa.colorado = r.set();
        usa.connecticut = r.set();
        usa.delaware = r.set();
        usa.dc = r.set();
        usa.florida = r.set();
        usa.georgia = r.set();
        usa.hawaii = r.set();
        usa.idaho = r.set();
        usa.illinois = r.set();
        usa.indiana = r.set();
        usa.iowa = r.set();
        usa.kansas = r.set();
        usa.kentucky = r.set();
        usa.louisiana = r.set();
        usa.maine = r.set();
        usa.maryland = r.set();
        usa.massachusetts = r.set();
        usa.michigan = r.set();
        usa.minnesota = r.set();
        usa.mississippi = r.set();
        usa.missouri = r.set();
        usa.montana = r.set();
        usa.nebraska = r.set();
        usa.nevada = r.set();
        usa.newHampshire = r.set();
        usa.newJersey = r.set();
        usa.newMexixo = r.set();
        usa.newYork = r.set();
        usa.northCarolina = r.set();
        usa.northDakota = r.set();
        usa.ohio = r.set();
        usa.oklahoma = r.set();
        usa.oregon = r.set();
        usa.pennsylvenia = r.set();
        usa.rhodeIsland = r.set();
        usa.southCarolina = r.set();
        usa.southDakota = r.set();
        usa.tennessee = r.set();
        usa.texas = r.set();
        usa.utah = r.set();
        usa.vermont = r.set();
        usa.virginia = r.set();
        usa.washington = r.set();
        usa.westVirginia = r.set();
        usa.wisconsin = r.set();
        usa.wyoming = r.set();

        var boxattrs = {
            'cursor': 'pointer',
            'fill': "#fff"
        };
        var i = 0;

        for (var state in usamappaths) {

            //Create obj
            var obj = usa[state];
            obj.attr(attributes);

            if (stateModes[i] == 'OFF') {
                boxattrs = {
                    'cursor': 'default',
                    'fill': offColor,
					stroke: offStrokeColor
                };
            } else {
                boxattrs = {
                    'cursor': 'pointer',
                    'fill': stateColors[i],
					stroke: strokeColor,
                    'id': i
                };
            }


            obj.push(r.path(usamappaths[state].path).attr(boxattrs));
            obj.push(r.text(usamappaths[state].textX, usamappaths[state].textY, usamappaths[state].text).attr({
                "font-family": "Arial, sans-serif",
                    "font-weight": "bold",
                    "font-size": "14",
                    "fill": abbrColor,
                    'cursor': 'pointer',
                    'z-index': 1000
            }));
			
			if (stateModes[i] == 'OFF') {
                obj.toFront();
            }

            obj[0].node.id = i;
            //obj[0].toBack();
            obj[1].toFront();
			
			shapeAr.push(obj[0]);
			
			var hitArea = r.path(usamappaths[state].path).attr({
			  fill: "#f00",
			  "stroke-width": 0, 
			  "opacity" : 0, 
			  'cursor': stateModes[i] == 'OFF' ? 'default' : 'pointer'
			});
			
			hitArea.node.id = i;

            hitArea.mouseover(function (e) {

                e.stopPropagation();

                var id = $(this.node).attr('id');


                if (stateModes[id] != 'OFF') {

                    //Animate if not already the current state
                    if (shapeAr[id] != current) {
                        shapeAr[id].animate({
                            fill: stateOverColors[id]
                        }, 500);
                    }

                    //tooltip

                    $('#map').next('.point').remove();
                    $('#map').after($('<div />').addClass('point'));
                    $('.point').html(stateNames[id]).css({
                        left: mouseX - 50,
                        top: mouseY - 70
                    }).fadeIn();


                }


            });



            hitArea.mouseout(function (e) {

                var id = $(this.node).attr('id');

                if (stateModes[id] != 'OFF') {

                    //Animate if not already the current state
                    if (shapeAr[id] != current) {
                        shapeAr[id].animate({
                            fill: stateColors[id]
                        }, 500);
                    }

                    $('#map').next('.point').remove();

                }



            });

            hitArea.mouseup(function (e) {

                var id = $(this.node).attr('id');

                if (stateModes[id] != 'OFF') {
                    //Reset scrollbar
                    var t = $('#text')[0];
                    t.scrollLeft = 0;
                    t.scrollTop = 0;

                    //Animate previous state out
                    if (current) {
                        var curid = $(current.node).attr('id');
                        current.animate({
                            fill: isPin ? pinColors[curid] : stateColors[curid]
                        }, 500);
                    }
					isPin = false;

                    //Animate next
                    shapeAr[id].animate({
                        fill: stateClickedColors[id]
                    }, 500);

                    current = shapeAr[id];

                    if (useText == 'true') {
                        $('#text').html(stateText[id]);
                    } else {
                        //change "_self" to "_blank" if using in WP iframe
						if(useParameterInUrl){
							window.open(stateText[id], '_self');
						}
						else{
                        	window.open(stateURLs[id], '_self');
						}
                    }
                }
            });


            i++;
        }

		if(responsive){
			responsiveResize();
			$(window).resize(function() {
				responsiveResize();
			});
		}
		else{
			resizeMap(r);	
		}

    }



    // Set up for mouse capture
    if (document.captureEvents && Event.MOUSEMOVE) {
        document.captureEvents(Event.MOUSEMOVE);
    }

    // Main function to retrieve mouse x-y pos.s

    function getMouseXY(e) {

        var scrollTop = $(window).scrollTop();

        if (e && e.pageX) {
            mouseX = e.pageX;
            mouseY = e.pageY - scrollTop;
        } else {
            mouseX = event.clientX + document.body.scrollLeft;
            mouseY = event.clientY + document.body.scrollTop;
        }
        // catch possible negative values
        if (mouseX < 0) {
            mouseX = 0;
        }
        if (mouseY < 0) {
            mouseY = 0;
        }

        $('#map').next('.point').css({
            left: mouseX - 50,
            top: mouseY - 70
        })
    }

    // Set-up to use getMouseXY function onMouseMove
    document.body.onmousemove = getMouseXY;


    function resizeMap() {

        r.changeSize(mapWidth, mapHeight, true, false);

        if (useText == 'true') {
			
			if(useTextAtBottom){
				
				$(".mapWrapper").css({
					'width': parseFloat(mapWidth, 10) + 'px',
						'height': mapHeight + 'px'
				});
			}
			else{
				if (winWidth >= 768) {
					$(".mapWrapper").css({
						'width': (parseFloat(mapWidth, 10) + parseFloat(textAreaWidth, 10)) + 'px',
						'height': mapHeight + 'px'
					});
				}
				else{
					$(".mapWrapper").css({
						'width': parseFloat(mapWidth, 10) + 'px',
							'height': mapHeight + 'px'
					});
				}
				
			}
        } else {
            $(".mapWrapper").css({
                'width': mapWidth + 'px',
                    'height': mapHeight + 'px'
            });
        }

    }
	

	
	function responsiveResize(){
		
			winWidth = win.width();
		
			if (winWidth >= 960) {
				mapWidth = oMapWidth;
				mapHeight = mapWidth/ratio;
				resizeMap();
			}
			else if (winWidth < 960 && winWidth >= 768) {
				mapWidth = useTextAtBottom ? 728 : 728  - (parseFloat(textAreaWidth) - parseFloat(textAreaPadding * 2));
				mapHeight = mapWidth/ratio;
				resizeMap();
			}
			else if (winWidth < 480) {
				mapWidth = 280;
				mapHeight = mapWidth/ratio;
				resizeMap();
				
			}
			else if (winWidth < 768 && winWidth > 480) {
				mapWidth = 400;
				mapHeight = mapWidth/ratio;
				resizeMap();
				
			}
			
			if(useTextAtBottom){
				$("#text").css({
					'width': parseFloat(mapWidth, 10) - parseFloat(textAreaPadding, 10)*2 + 'px',
					'marginTop': (parseFloat(mapHeight, 10) + 20) + 'px'
				});
			}
			else{
				if (winWidth >= 768) {
					$("#text").css({
						'width': (parseFloat(textAreaWidth) - parseFloat(textAreaPadding * 2)) + 'px',
						'height': (parseFloat(mapHeight) - parseFloat(textAreaPadding * 2)) + 'px',
						'display': 'inline',
						'float': 'right',
						'padding': textAreaPadding + 'px',
						'marginTop': 0
					});
				}
				else{
					$("#text").css({
						'width': parseFloat(mapWidth, 10) - parseFloat(textAreaPadding, 10)*2 + 'px',
						'marginTop': (parseFloat(mapHeight, 10) + 20) + 'px'
					});
				}
				
			}
			
			
		
	}

}

mapInit();