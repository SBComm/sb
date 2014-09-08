var conditionalField = {
    fieldName: "",
    fieldValue: "",
    conditionalFieldsToShow: "",
    conditionalFieldsToHide: ""
};

var conditionalFieldInfo = [];

function clearConditionalFieldInfo() {
    conditionalFieldInfo = [];
}

function addConditionalField(dependsOnField, dependsOnValue, showFields, hideFields) {
    conditionalFieldInfo[conditionalFieldInfo.length] = {
        fieldName: dependsOnField,
        fieldValue: dependsOnValue,
        conditionalFieldsToShow: showFields,
        conditionalFieldsToHide: hideFields
    }; 
}

function getConditionalFields(dependsOnField, dependsOnValue, showFlag) {
    for(var i = 0; i < conditionalFieldInfo.length; ++i) {
        var current = conditionalFieldInfo[i];
        if( current.fieldName == dependsOnField &&
            current.fieldValue == dependsOnValue) {
            
            if( showFlag )
                return current.conditionalFieldsToShow;
            else
                return current.conditionalFieldsToHide;
        }
    }
    return "";
}

// function that is called to swap the visibility
function setConditionalFieldVisibility(elementIDList, showHideFlag) {
    var elementIDArray = elementIDList.split("|");
    for( var i=0; i < elementIDArray.length; i++) {
        try {
            if( elementIDArray[i].length > 0 ) {
                if( showHideFlag )
                    new Effect.Appear(elementIDArray[i]);
                else
                    document.getElementById(elementIDArray[i]).style.display = "none";
                
                var reviewCheckBoxElement = document.getElementById(elementIDArray[i]);
                
                // select maybe option for radio buttons
                if( reviewCheckBoxElement.className == "radio" || reviewCheckBoxElement.className == "radio shaded") {
                    reviewCheckBoxElement.childElements()[0].childElements()[1].childElements()[0].checked = "checked";
                    reviewCheckBoxElement.childElements()[0].childElements()[1].childElements()[0].click();
                }
                // select maybe option for dropdown
                else if( reviewCheckBoxElement.className == "dropdown" ) {
                    reviewCheckBoxElement.childElements()[1].childElements()[0].setValue("");
                    reviewCheckBoxElement.childElements()[1].childElements()[0].click();
                }
                
                setConfirmationBoxVisibility(elementIDArray[i], showHideFlag);
            }
        }
        catch(err) {}
    }
    return;
}

//function to display or hide the confirmation box based on conditionals
function setConfirmationBoxVisibility(elementID, showMeFlag) {
	var boxElement = $(elementID);
	if( boxElement != null && boxElement.id != "checkBoxGroupID" )
		boxElement = boxElement.parentNode;
	if( boxElement == null ) { }
	else if( boxElement.id == "checkBoxGroupID" ) {
		if( showMeFlag )
			new Effect.Appear(boxElement.id);
		else {
			var childElementArray = boxElement.childElements();
			var hiddenCount = 0;
			for(var i = 0; i < childElementArray.length; i++ ) {
				if( childElementArray[i].style.display == "none" )
					hiddenCount = hiddenCount + 1; 
			}
			if( hiddenCount == childElementArray.length ) {
				boxElement.style.display = "none";
				boxElement.childElements()[0].childElements()[0].checked = false;
			}	
		}
		
	}
}