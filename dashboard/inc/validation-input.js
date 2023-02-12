
function isNumberKey(myfield, e, dec) 
{
		var key;
		var keychar;
		
		if (window.event)
				key = window.event.keyCode;
		else if (e)
				key = e.which;
		else
				return true;
		keychar = String.fromCharCode(key);
		
		// control keys
		if ((key==null) || (key==0) || (key==8) || 
			(key==9) || (key==13) || (key==27) )
				return true;
		
		// numbers
		else if ((("0123456789.").indexOf(keychar) > -1))
				return true;
		
		// decimal point jump
		else if (dec && (keychar == "."))
		{
				myfield.form.elements[dec].focus();
				return false;
		}
		else
				return false;
}

function validateInt(myfield, e, dec)
{
	var key;
	var keychar;
	
	if (window.event)
			key = window.event.keyCode;
	else if (e)
			key = e.which;
	else
			return true;
	keychar = String.fromCharCode(key);
	
	// control keys
	if ((key==null) || (key==0) || (key==8) || 
		(key==9) || (key==13) || (key==27) )
			return true;
	
	// numbers
	else if ((("0123456789").indexOf(keychar) > -1))
			return true;
	
	// decimal point jump
	else if (dec && (keychar == "."))
	{
			myfield.form.elements[dec].focus();
			return false;
	}
	else
			return false;
}

$(".camount").on("keyup", function(){
	var valid = /^\d{0,10}(\.\d{0,2})?$/.test(this.value),
		val = this.value;
	var pos = this.selectionStart - 1;

	if(!valid){
		if(typeof this.lastValid != "undefined") {
			this.value = this.lastValid
			this.setSelectionRange(pos, pos);
		} else {
			this.value = "";
		}
	} else {
		this.lastValid = val;
	}
});




