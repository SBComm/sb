//	general.js
//	Copyright (c) 2005 Indiana University and Jason Baumgartner
//	Description: These are general script methods used by iStart components.


// open a broswer window
function openBrWindow(theURL,winName,features) {
	window.open(theURL,winName,features);
	}

// confirm the submission
function confirmSubmit(questionValue) {
	var agree = confirm(questionValue);
	if( agree )	{
		showPopup('processingbox');
		return true;
		}
	else return false;
	}

// forward to URL (Macromedia version)
function MM_goToURL() { //v3.0
	showPopup('processingbox');
	var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
	for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
	}

// set the hidden time value field
function setHiddenTimeValue(fieldName) {
	// locate the form field and form values
	timeField = null;
	selectTime = null;
	selectTimeAMPM = null;
	for(var i = 0; i < document.forms.formData.elements.length; i++ ) {
		if( document.forms.formData.elements[i].name == fieldName )
			timeField = document.forms.formData.elements[i];
		else if( document.forms.formData.elements[i].name == (fieldName + "HourMin") )
			selectTime = document.forms.formData.elements[i];
		else if( document.forms.formData.elements[i].name == (fieldName + "AMPM") )
			selectTimeAMPM = document.forms.formData.elements[i];
		}

	// set the hidden field value
	if( timeField != null && selectTime != null && selectTimeAMPM != null ) {

		selectTimeValue = selectTime.value
		selectTimeAMPMValue = selectTimeAMPM.options[selectTimeAMPM.selectedIndex].value;

		timeField.value = selectTimeValue + " " + selectTimeAMPMValue;
		}
	}

// set the hidden date value field
function setHiddenDateValue(fieldName) {
	// locate the form field and form values
	dateField = null;
	selectFieldMonth = null;
	selectFieldDay = null;
	selectFieldYear = null;
	for(var i = 0; i < document.forms.formData.elements.length; i++ ) {
		if( document.forms.formData.elements[i].name == fieldName )
			dateField = document.forms.formData.elements[i];
		else if( document.forms.formData.elements[i].name == (fieldName + "Month") )
			selectFieldMonth = document.forms.formData.elements[i];
		else if( document.forms.formData.elements[i].name == (fieldName + "Day") )
			selectFieldDay = document.forms.formData.elements[i];
		else if( document.forms.formData.elements[i].name == (fieldName + "Year") )
			selectFieldYear = document.forms.formData.elements[i];
		}

	// set the hidden field value
	if( dateField != null && selectFieldMonth != null && selectFieldDay != null && selectFieldYear != null ) {

		selectFieldMonthValue = selectFieldMonth.options[selectFieldMonth.selectedIndex].value;
		if( selectFieldMonthValue.length == 1 )
			selectFieldMonthValue = "0" + selectFieldMonthValue;
		selectFieldDayValue = selectFieldDay.options[selectFieldDay.selectedIndex].value;
		if( selectFieldDayValue.length == 1 )
			selectFieldDayValue = "0" + selectFieldDayValue;
		selectFieldYearValue = selectFieldYear.options[selectFieldYear.selectedIndex].value;

		dateField.value = selectFieldMonthValue + "/" + selectFieldDayValue + "/" + selectFieldYearValue;
		}
	}

// menu effect
function trigger_effect(src_element, div_id, effect, first_img, second_img){

	heading = document.getElementById(div_id);
	do
		heading = heading.previousSibling; // step up
	while (heading.nodeType != 1);  // until find a tag (type==1)

	alreadyExpanded = (heading.className == "expanded");
	if (heading.className == "collapsed")
		heading.className = "expanded";

	Effect.toggle(div_id, effect, {afterFinish:function(){
		image = src_element.getElementsByTagName('img')[0];
		image.src = image.src.match(first_img) ? second_img : first_img;

		if( alreadyExpanded )
			heading.className = "collapsed";

		}}
	);

	return true;
}

function menu_toggle(src_element, div_id) {
	var div = document.getElementById(div_id);

	var initialHeight = div.offsetHeight;

	if (src_element.className == "collapsed") {
		div.style.display = ""
		var finalHeight = div.offsetHeight;
		div.style.display = "none";

		new Effect.Morph (div, {
			style: {height: finalHeight+"px"},
			beforeStart: function() {
				div.style.overflow = "hidden";
				div.style.height = initialHeight + "px";
				div.style.display = "";
			},
			afterFinish: function() {
				src_element.className = "expanded";
				div.style.overflow = "visible";
				div.style.height = "";
			}
		});
	}
	else {
		div.style.display = "none";
		var finalHeight = div.offsetHeight;
		div.style.display = "";

		new Effect.Morph (div, {
			style: {height: finalHeight+"px"},
			beforeStart: function() {
				div.style.height = initialHeight + "px";
				div.style.overflow = "hidden";
			},
			afterFinish: function() {
				src_element.className = "collapsed";
				div.style.display = "none";
				div.style.overflow = "visible";
				div.style.height = "";
			}
		});
	}
}

function toggleCurrentPastCases(){

	pastCasesContent = document.getElementById('past_cases_content');
	pastCases = document.getElementById('past_cases');
	currentCases = document.getElementById('current_cases');

	if (pastCasesContent.style.display == 'none') {
		new Effect.Opacity(currentCases, { from: 1, to: 0, duration: .5 });
		currentCases.style.visibility = 'hidden';
		new Effect.Move(pastCases, { x: 0, y: -278, mode: 'relative',
						duration: 1.5,
						afterFinish: function() {
							new Effect.Opacity(pastCasesContent, { from: 1, to: 0, duration: 0.1 });
							pastCasesContent.style.display = 'block';
							new Effect.Opacity(pastCasesContent, { from: 0, to: 1, duration: .5 });
							pastCasesContent.style.overflow = 'auto'; }
		});
	}
	else {
		new Effect.Opacity(pastCasesContent, { from: 1, to: 0, duration: 0.5 });
		pastCasesContent.style.display = 'none';
		new Effect.Move(pastCases, { x: 0, y: 278, mode: 'relative',
						duration: 1.5,
						afterFinish: function() {
							currentCases.style.visibility = 'visible';
							new Effect.Opacity(currentCases, { from: 0, to: 1, duration: .5 });}
		});
	}
	return;
}

/*
	Function that figures out height of the E-Form list on the Departmental home page,
	and adjusts the content box's margin accordingly.
*/
function setContentHeight(contentID) {
	var content = document.getElementById(contentID);
	if (content) {
		var siblingHeight = prevSibHeights(content.previousSibling);
		siblingHeight += nextSibHeights(content.nextSibling);
		content.style.height = content.parentNode.offsetHeight - siblingHeight + "px";
	}
	return;
}

function prevSibHeights(element) {
	if(element.previousSibling) {
		if(element.nodeType == 1)
			return element.offsetHeight + prevSibHeights(element.previousSibling);
		else
			return prevSibHeights(element.previousSibling);
	}
	else if (element.nodeType == 1)
		return element.offsetHeight;

	return 0;
}

function nextSibHeights(element) {
	if(element.nextSibling) {
		if(element.nodeType == 1)
			return element.offsetHeight + nextSibHeights(element.nextSibling);
		else
			return nextSibHeights(element.nextSibling);
	}
	else if (element.nodeType == 1)
		return element.offsetHeight;

	return 0;
}

// function that sets the value of a checkbox form element and submits the form
// used for the Pre-Arrival Checklist self-checkable elements
function submitChecklistForm(checkbox) {
	if (checkbox.checked)
		checkbox.value = 1;
	else {
		checkbox.value = 0;
		checkbox.checked = true;
	}
	checkbox.form.submit();
}

// function to expand images in a modal box
function showScreenshot(element_id) {
	new Effect.Appear('overlay', { to: .7, afterfinish: new Effect.Appear(element_id)});
}

function hideScreenshot(element_id) {
	new Effect.Fade('overlay', {afterfinish: new Effect.Fade(element_id)});
}

function changeToUploadType(element_id) {
	formElement = document.getElementById(element_id);
	grandparent = formElement.parentNode.parentNode;
	uncles = grandparent.children;

	//loop through all uncles and set hidden, except for first and last
	for( var i=1; i < uncles.length-1; i++ )
		uncles[i].style.display = "none";

	formElement.value = "";
	formElement.type = "file";
}



