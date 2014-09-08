
	var cipExistingValue = "";
	var programSubjectFieldID = "";
	var fieldsOfStudyID = "";
	var cipFields = new Array();
	var cipProgram = new Array();

	/*<!---
		Populates fieldsOfStudy select box with the fields_of_study query results.
		This function is called in the onload.
	--->*/
	function initCIP() {
		if (cipExistingValue.length >= 1) {
			programSubjectExistingValue = cipExistingValue;
			fieldsOfStudyExistingValue = cipExistingValue.substring(0,2);
			createOptionList();
			document.getElementById('programSubjectContainer').style.display = "block";
			document.getElementById(programSubjectFieldID).style.display = "block";
		} else {
			for (i = 0; i < cipFields.length; i++) {
				document.getElementById(fieldsOfStudyID)[i] = new Option(cipFields[i]['description'], cipFields[i]['code']);
			}
		}
	}
	
	function createOptionList() {
		var fos = document.getElementById(fieldsOfStudyID);
		var psf = document.getElementById(programSubjectFieldID);
		for (i = 0; i < cipFields.length; i++) {
			if (cipFields[i]['code'] == fieldsOfStudyExistingValue) {
				fos[i] = new Option(cipFields[i]['description'], cipFields[i]['code'], true, true);
				fos.selectedIndex = i;
			} else {
				fos[i] = new Option(cipFields[i]['description'], cipFields[i]['code']);
			}
		}
		for (i = 0; i < cipProgram.length; i++) {
			if (cipProgram[i]['code'].substring(0, 2) == fieldsOfStudyExistingValue) {
				if (cipProgram[i]['code'] == programSubjectExistingValue) {
					psf[psf.length] = new Option(cipProgram[i]['description'], cipProgram[i]['code'], true, true);
				} else {
					psf[psf.length] = new Option(cipProgram[i]['description'], cipProgram[i]['code']);
				}
			}
		}
	}
	
		
	/*<!---
		Function to clear a select list. Starts at the end and works backward
	--->*/
	function clearList(ls) {
		for (x = ls.length; x >= 0; x = x - 1) {
			ls[x] = null;
		}
	}
	
	
	/*<!---
		Populates the programSubjectField select list based on input from fieldsOfStudy
	--->*/
	function populate() {
		var firstField = document.getElementById(fieldsOfStudyID);
		clearList(document.getElementById(programSubjectFieldID));
		for (i = 0; i < cipProgram.length; i++) {
			var psf = document.getElementById(programSubjectFieldID);
			if (firstField[firstField.selectedIndex].value == cipProgram[i]['code'].substring(0,2)) {
				psf[psf.length] = new Option(cipProgram[i]['description'], cipProgram[i]['code']);
			}
		}
	}
	
	
	/*<!---
		Function that is called when fieldsOfStudy select list is changed.
		If programSubjectField is displayed, it will hide it first
	--->*/
	function change() {
		if (document.getElementById('programSubjectContainer').style.display == "none") {
			populate();
			new Effect.Appear('programSubjectContainer');
			new Effect.Appear(programSubjectFieldID);
		} else {
			if (document.getElementById(programSubjectFieldID).style.display != "none") {
				document.getElementById(programSubjectFieldID).style.display = "none";
			}
			populate();
			new Effect.Appear(programSubjectFieldID);
		}
	}
	
	