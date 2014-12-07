//--------------------------
//Hints on junioreditor.php
//--------------------------
//Dropdown hints
	//Hint for seq
function validate_dropdown1(){
	var formError = false;
// for seq select
	var dropdown = document.getElementById('seqSelect');
	var info=document.getElementById("seqHint");
	if(dropdown.selectedIndex==0){
		seqHint.innerHTML="field cannot be left empty";
		dropdown.focus();
		formError = true; 
	} else {
		seqHint.innerHTML="";
}

var dropdown = document.getElementById('brollSelect');
var info=document.getElementById("brollHint");
if(dropdown.selectedIndex==0){
	brollHint.innerHTML="field cannot be left empty";
	dropdown.focus();
	formError = true; 
}else{
	brollHint.innerHTML="";
}

var dropdown = document.getElementById('fintSelect');
var info=document.getElementById("fintHint")
if(dropdown.selectedIndex==0){
	fintHint.innerHTML="field cannot be left empty";
	dropdown.focus();
	formError = true; 
}else{
	fintHint.innerHTML="";
}

var dropdown = document.getElementById('voSelect');
var info=document.getElementById("voHint")
if(dropdown.selectedIndex==0){
	voHint.innerHTML="field cannot be left empty";
	dropdown.focus();
	formError = true; 
}else{
	voHint.innerHTML="";
}

var dropdown = document.getElementById('ptcSelect');
var info=document.getElementById("ptcHint")
if(dropdown.selectedIndex==0){
	ptcHint.innerHTML="field cannot be left empty";
	dropdown.focus();
	formError = true; 
}else{
	ptcHint.innerHTML="";
}

var dropdown = document.getElementById('ctaSelect');
var info=document.getElementById("ctaHint")
if(dropdown.selectedIndex==0){
	ctaHint.innerHTML="field cannot be left empty";
	dropdown.focus();
	formError = true; 
}else{
	ctaHint.innerHTML="";
}


var dropdown = document.getElementById('vdSelect');
var info=document.getElementById("vdHint")
if(dropdown.selectedIndex==0){
	vdHint.innerHTML="field cannot be left empty";
	dropdown.focus();
	formError = true; 
}else{
	vdHint.innerHTML="";
}

var dropdown = document.getElementById('translationSelect');
var info=document.getElementById("translationHint")
if(dropdown.selectedIndex==0){
	translationHint.innerHTML="field cannot be left empty";
	dropdown.focus();
	formError = true; 
}else{
	translationHint.innerHTML="";
}


if(formError) {
return false;
} else {
return true;

}


// }

/*	-----------------------------------
Hints for junioreditor.php ends here
-------------------------------------

//Problem: It looks gross in smaller browser and small devices.
//Solution: To hide the text links and swap them out with more appropriate navigation.

//Create a select and append to menu
var $select = $("<select></select>");
$("#menu").append($select);
//Cycle over menu links
$("#menu a").each(function(){
var $anchor = $(this);
var $option = $(this);
//Create an option
var $option = $("<option></option>");

//Deal with selected options depending on current page
if($anchor.parent().hasClass("selected")){
$option. prop("selected", true);
}
//options value is the href
$option.val($anchor.attr("href"));
//options text is the text of link
$option.text($anchor.text());
//append option to select
$select.append($option);
});



//Bind change listener to the select
$select.change(function(){*/




// go to select's location
window.location = $select.val(); 
};

//This is from story-and-impact-tracker.php
// which displays a text box when a particular select option is selected


function showOther(fieldObj, otherFieldID){
	var fieldValue = fieldObj.options[fieldObj.selectedIndex].value;
	var otherFieldObj = document.getElementById(otherFieldID);
	otherFieldObj.style.visibility = (fieldValue=='other') ? '' : 'hidden';
	return;
}
