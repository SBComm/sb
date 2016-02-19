/* 
   File: contact-form.css
   Created by: Josh Palmeri, joshpalmeri.com
   2015.01.25
   As a part of dayspringdanceministries.com/contact

   You need to modify the input fields here as well as on contact-submit.php
*/

$(document).ready(function() {

	// Get URL Params on form load and place values

	var intent = decodeURIComponent(decodeURIComponent($.urlParam('intent')));
	var $intent = $('#intent');

	var firstName = decodeURIComponent(decodeURIComponent($.urlParam('first-name')));
	var $firstName = $('#first-name');

	var lastName = decodeURIComponent(decodeURIComponent($.urlParam('last-name')));
	var $lastName = $('#last-name');

	var email = decodeURIComponent(decodeURIComponent($.urlParam('email')));
	var $email = $('#email');

	var phone = decodeURIComponent(decodeURIComponent($.urlParam('phone')));
	var $phone = $('#phone');

	if(intent!=null&&intent!='null'&&intent!=0) {
		$intent.val(intent);
	}
	if(firstName!=null&&firstName!='null'&&firstName!=0) {
		$firstName.val(firstName);
	}
	if(lastName!=null&&lastName!='null'&&lastName!=0) {
		$lastName.val(lastName);
	}
	if(email!=null&&email!='null'&&email!=0) {
		$email.val(email);
	}
	if(phone!=null&&phone!='null'&&phone!=0) {
		$phone.val(phone);
	}

	// Check each element with ID of comma separated labels from 'checked' param

	var checked = decodeURIComponent($.urlParam('checked'));
	checked = checked.split(',');

	for(var i=0; i<checked.length; i++) {
		$(makeId(checked[i])).prop('checked', true);
	}

	// On change events following...

	$('[data-toggle-details="true"]').change(function() {
		dataTarget = $(this).data('details-target');
		dataTargetEl = $(makeClass(dataTarget));
		eachCount = checkCount = 0;
		$('input[data-details-target="'+dataTarget+'"]').each(function() {
			eachCount++;
			if($(this).is(':checked')) {
				checkCount++;
			}
		});
		/*
		// For the data-details-target value on the input element checked or unchecked, check for all elements with that same value.
		// So long as at least one element with that data value is checked, keep the data-target element visible.
		// Else, add a class of hidden.
		*/
		if(checkCount>0) {
			dataTargetEl.removeClass('hidden');
		} else if(checkCount==0) {
			dataTargetEl.addClass('hidden');
		}
    });

	// NOW... after events are defined... Initiate change event to toggle any default settings based on URL params checked

	$('input').change();

});