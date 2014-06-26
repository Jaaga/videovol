//--------------------------
//Hints on junioreditor.php
//--------------------------
//Dropdown hints
	//Hint for seq
	function validate_dropdown1(){

		var formError = false;

		// for seq select
		var dropdown = document.getElementById('seqSelect');
		var info=document.getElementById("seqHint")
		if(dropdown.selectedIndex==0){

			seqHint.innerHTML="field cannot be left empty";
			dropdown.focus();
			formError = true; 
		}else{
			seqHint.innerHTML="";
		}

		var dropdown = document.getElementById('brollSelect');
		var info=document.getElementById("brollHint")
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


	}