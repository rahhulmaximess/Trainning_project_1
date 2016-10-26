function required_field(div_id,value,error_field) {
    // body...
    if (value=='') {
        $('#'+div_id).addClass('has-error');
        $('#'+error_field).html('This field is required.');
    } else {
        $('#'+div_id).removeClass('has-error');
        $('#'+error_field).html('');
        $('#'+div_id).addClass('has-success');
    }
}
function clear_error(value,error_field,div_id){
	if (value!='') {
		$('#'+div_id).removeClass('has-error');
        $('#'+error_field).html('');
        $('#'+div_id).addClass('has-success');
	};
}
function error(div_id,error_field) {
	// body...
	$('#'+div_id).addClass('has-error');
    $('#'+error_field).html('This field is required.');
}
function select_error_clear(div_id,value,error_field){
	if (value!=null) {
		$('#'+div_id).removeClass('has-error');
        $('#'+error_field).html('');
        $('#'+div_id).addClass('has-success');
		// $('#'+id).css('border-color','');
	};
}
function checkbox_error_clear(id,error_field,div_id){
	if ($('#'+id).prop('checked')) {
		$('#'+div_id).removeClass('has-error');
        $('#'+error_field).html('');
        $('#'+div_id).addClass('has-success');
		// $('#'+id).css('border-color','');
	};
}
function radio_error_clear(name,error_field,div_id) {
	// body...
	$('#'+div_id).removeClass('has-error');
    $('#'+error_field).html('');
    $('#'+div_id).addClass('has-success');
}
function alpha_only(id,value,error_field,div_id){
	if (value!="") {
		if (value.length<5) {
			$('#'+div_id).addClass('has-error');
			$('#'+error_field).html('More than 5 char.');
			$('#'+id).val('');
			$('#'+id).focus();
			// $('#'+id).css('border-color','red');
		}else{
			if (/^[a-zA-Z ]+$/.test(value)) {
				return true;
			}else{
				$('#'+div_id).addClass('has-error');
				$('#'+error_field).html('Alphabates Only.');
				$('#'+id).val('');
				$('#'+id).focus();
				// $('#'+id).css('border-color','red');
			};
		};
	};
}
function email_vali(id,value,error_field,div_id){
	if (value!="") {
		var atpos = value.indexOf("@");
	    var dotpos = value.lastIndexOf(".");
	    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
	    	$('#'+div_id).addClass('has-error');
	    	$('#'+error_field).html('Invalid E-mail Address');
			$('#'+id).val('');
			$('#'+id).focus();
			// $('#'+id).css('border-color','red');
	    }
	};
}
function password_vali(id,value,error_field,div_id){
	if (value!="") {
		if (value.length<8) {
			$('#'+div_id).addClass('has-error');
			$('#'+error_field).html('Password Length should be more than 8 characters');
			$('#'+id).val('');
			$('#'+id).focus();
			// alert('Password Length should be more than 8 characters');
			// $('#'+id).css('border-color','red');
		}else{
			if (/[a-zA-Z]/.test(value) && /[0-9]/.test(value)) {
				return true;
			}else{
				$('#'+div_id).addClass('has-error');
				$('#'+error_field).html('Password should be Alpha Numeric.');
				$('#'+id).val('');
				$('#'+id).focus();
				// alert('Password should be Alpha Numeric.');
				// $('#'+id).css('border-color','red');
			};
		};
	};
}
function match_pwd(id,value,error_field,div_id,pwd_id){
	if (value!="") {
		if (value!=$('#'+pwd_id).val()) {
			$('#'+div_id).addClass('has-error');
			$('#'+error_field).html('Password not Matching.');
			$('#'+id).val('');
			$('#'+id).focus();
			// alert('Password not Matching.');
			// $('#'+id).css('border-color','red');
		}
	};
}
function alpha_numeric(id,value,error_field){
	if (value!="") {
		if (/[a-zA-Z]/.test(value) && /[0-9]/.test(value)) {
			return true;
		}else{
			$('#'+error_field).html('Invalid Input, Please enter valid Alphabates numeric value.');
			$('#'+id).val('');
			$('#'+id).focus();
			// alert('Invalid Input, Please enter valid Alphabates numeric value');
			// $('#'+id).css('border-color','red');
		};
	};
}
function numeric(id,value,error_field,div_id){
	if (value!="") {
		if (/^[0-9]+$/.test(value)){
			$('#'+div_id).removeClass('has-error');
			$('#'+div_id).addClass('has-success');
			$('#'+error_field).html('');
			return true;
		}else{
			$('#'+div_id).addClass('has-error');
			$('#'+error_field).html('Invalid Input, Please enter valid Numeric value');
			$('#'+id).val('');
			$('#'+id).focus();
			// $('#'+id).css('border-color','red');
		};
	};
}
function numeric_size(id,value,error_field,div_id,field_length){
	// alert(div_id);
	if (value!="") {
		if (isNaN(value)) {
			// alert('1')
			$('#'+div_id).addClass('has-error');
			$('#'+error_field).html('Invalid Input.');
			$('#'+id).val('');
			$('#'+id).focus();
			// $('#'+id).css('border-color','red');
		}else{
			if (value.length!=field_length) {
				$('#'+div_id).removeClass('has-success');
				$('#'+div_id).addClass('has-error');
				$('#'+error_field).html('Field should contain '+field_length+' Digits.');
				$('#'+id).val('');
				$('#'+id).focus();
				// $('#'+id).css('border-color','red');
			}
		}
	}
}
