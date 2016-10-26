<!DOCTYPE html>
<html>
<head>
	<?php require_once('templates/head-content.html') ?>
	<script type="text/javascript">
		function check() {
			// body...
			var flag = 1;

			if ($('#first_name').val()=='') {
				error('first_name_div','first_name_error');
				flag = 0;
			}
			if ($('#last_name').val()=='') {
				error('last_name_div','last_name_error');
				flag = 0;
			}
			if ($('#father_name').val()=='') {
				error('father_name_div','father_name_error');
				flag = 0;
			}
			if ($('#mother_name').val()=='') {
				error('mother_name_div','mother_name_error');
				flag = 0;
			}
			if ($('#dob').val()=='') {
				error('dob_div','dob_error');
				flag = 0;
			}
			if ($('#country').val()==null) {
				error('country_div','country_error');
				flag = 0;
			}
			if ($('#state').val()==null) {
				error('state_div','state_error');
				flag = 0;
			}
			if ($('#city').val()==null) {
				error('city_div','city_error');
				flag = 0;
			}
			if ($('#pincode').val()=='') {
				error('pincode_div','pincode_error');
				flag = 0;
			}
			if ($('#nationality').val()=='') {
				error('nationality_div','nationality_error');
				flag = 0;
			}
			if ($('#religion').val()=='') {
				error('religion_div','religion_error');
				flag = 0;
			}
			if ($('#mobile').val()=='') {
				error('mobile_div','mobile_error');
				flag = 0;
			}
			if ($('#email').val()=='') {
				error('email_div','email_error');
				flag = 0;
			}
			if ($('#education').val()==null) {
				error('education_div','education_error');
				flag = 0;
			}
			if ($('#yop').val()=='') {
				error('yop_div','yop_error');
				flag = 0;
			}
			if ($('#password1').val()=='') {
				error('password1_div','password1_error');
				flag = 0;
			}
			if ($('#password2').val()=='') {
				error('password2_div','password2_error');
				flag = 0;
			}
			if ($("input[name='gender']:checked").val()==null) {
				error('gender_div','gender_error');
				flag = 0;
			}
			if ($('#tnc').prop('checked')) {
			}else{
				$('#tnc_div').addClass('has-error');
				flag = 0;				
			}

			if ($("input[name='phy_dis']:checked").val()=='Yes') {
				if ($('#disability_disc').val()=='') {
					error('disability_disc_div','disability_disc_error')
					flag=0;
				}
			}

			if (flag==1) {
				return true;
			} else {
				return false;
			}
		}
	</script>
	<style type="text/css">
		.anchor{
			color:white;
			text-decoration:none;
		}
		.bot-mar{margin-bottom: 10px}
	</style>
</head>
<body>
	<div class="col-sm-12 text-right" style="background:#449d44;color:white">
		<h4>
			<a class="anchor" href="login.html">Sign-In</a> | <a class="anchor" href="registration.php">Sign-Up</a>
		</h4>
	</div>
	<div class="container">
	    <div class="row vertical-offset-100">
	    	<div class="col-md-6 col-md-offset-3" style="padding-top:5em">
	    		<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Registration</h3>
				 	</div>
				  	<div class="panel-body">
				    	<form role="form" method="post">
	                    	<div id="first_name_div" class="form-group">
						        <label class="control-label">First Name <span class="text-danger">*</span> :</label>
						        <input id="first_name" type="text" class="form-control" name="firstName" placeholder="First Name" onblur="required_field('first_name_div',this.value,'first_name_error'),alpha_only(this.id,this.value,'first_name_error','first_name_div')" />
						         <span id="first_name_error" class="text-danger"></span>
						    </div>

						    <div id="last_name_div" class="form-group">
						    	<label class="control-label">Last Name <span class="text-danger">*</span> :</label>
							    <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name" onblur="required_field('last_name_div',this.value,'last_name_error'),alpha_only(this.id,this.value,'last_name_error','last_name_div')" />
						        <span id="last_name_error" class="text-danger"></span>
						    </div>

						    <div id="father_name_div" class="form-group">
						        <label class="control-label">Father's Name <span class="text-danger">*</span> :</label>
						        <input id="father_name" type="text" class="form-control" name="father_name" placeholder="Father Name" onblur="required_field('father_name_div',this.value,'father_name_error'),alpha_only(this.id,this.value,'father_name_error','father_name_div')"/>
						        <span id="father_name_error" class="text-danger"></span>
						    </div>

						    <div id="mother_name_div" class="form-group">
						        <label class="control-label">Mother's Name <span class="text-danger">*</span> :</label>
						        <input id="mother_name" type="text" class="form-control" name="mother_name" placeholder="Mother Name" onblur="required_field('mother_name_div',this.value,'mother_name_error'),alpha_only(this.id,this.value,'mother_name_error','mother_name_div')"/>
						        <span id="mother_name_error" class="text-danger"></span>
						    </div>

						    <div id="gender_div" class="form-group">
						        <label class="control-label">Gender <span class="text-danger">*</span> : </label>
					        	<label class="control-label"><input type="radio" name="gender" value="Male" onchange="radio_error_clear(this.name,'gender_error','gender_div')"> Male</label>
					        	<label class="control-label"><input type="radio" name="gender" value="Female" onchange="radio_error_clear(this.name,'gender_error','gender_div')"> Female</label>
					        	<span id="gender_error" class="text-danger"></span>
						    </div>

						    <div id="dob_div" class="form-group">
						        <label class="control-label">Date of Birth <span class="text-danger">*</span> :</label>
						            <input id="dob" type="datepicker" class="form-control" name="dob" placeholder="---Please select---" autocomplete="off" onblur="required_field('dob_div',this.value,'dob_error')"/>
						        <span id="dob_error" class="text-danger"></span>
						    </div>						    

						    <div id="country_div" class="form-group">
						        <label class="control-label">Country <span class="text-danger">*</span> :</label>
						            <select id="country" class="form-control" name="country" onchange="select_error_clear('country_div',this.value,'country_error')">
						            	<option selected disabled value="0">---Please select---</option>
						            	<option>A</option>
						            	<option>B</option>
						            	<option>C</option>
						            </select>
						        <span id="country_error" class="text-danger"></span>
						    </div>						    

						    <div id="state_div" class="form-group">
						        <label class="control-label">State <span class="text-danger">*</span> :</label>
						            <select id="state" class="form-control" name="state" onchange="select_error_clear('state_div',this.value,'state_error')">
						            	<option selected disabled value="0">---Please select---</option>
						            	<option>A</option>
						            	<option>B</option>
						            	<option>C</option>
						            </select>
						        <span id="state_error" class="text-danger"></span>
						    </div>						    

						    <div id="city_div" class="form-group">
						        <label class="control-label">City <span class="text-danger">*</span> :</label>
						            <select id="city" class="form-control" name="city" onchange="select_error_clear('city_div',this.value,'city_error')">
						            	<option selected disabled value="0">---Please select---</option>
						            	<option>A</option>
						            	<option>B</option>
						            	<option>C</option>
						            </select>
						        <span id="city_error" class="text-danger"></span>
						    </div>						    

						    <div id="pincode_div" class="form-group">
						        <label class="control-label">Pincode <span class="text-danger">*</span> :</label>
						        <input id="pincode" type="text" class="form-control" name="pincode" onblur="required_field('pincode_div',this.value,'pincode_error'),numeric_size(this.id,this.value,'pincode_error','pincode_div',6)"/>
						        <span id="pincode_error" class="text-danger"></span>
						    </div>

						    <div id="nationality_div" class="form-group">
						        <label class="control-label">Nationality <span class="text-danger">*</span> :</label>
						            <input id="nationality" type="text" class="form-control" name="nationality" onblur="required_field('nationality_div',this.value,'nationality_error')"/>
						        <span id="nationality_error" class="text-danger"></span>
						    </div>

						    <div id="religion_div" class="form-group">
						        <label class="control-label">Religion <span class="text-danger">*</span> :</label>
						            <input id="religion" type="text" class="form-control" name="religion" onblur="required_field('religion_div',this.value,'religion_error')"/>
						        <span id="religion_error" class="text-danger"></span>
						    </div>

						    <div id="ph_no_div" class="form-group">
						        <label class="control-label">Phone number</label>
						            <input id="ph_no" type="text" class="form-control" name="ph_no" onblur="numeric(this.id,this.value,'ph_no_error','ph_no_div')"/>
						        <span id="ph_no_error" class="text-danger"></span>
						    </div>

						    <div id="mobile_div" class="form-group">
						        <label class="control-label">Mobile number <span class="text-danger">*</span> :</label>
						        <input id="mobile" type="text" class="form-control" name="mobile" onblur="required_field('mobile_div',this.value,'mobile_error'),numeric_size(this.id,this.value,'mobile_error','mobile_div',10)"/>
						        <span id="mobile_error" class="text-danger"></span>
						    </div>

						    <div id="email_div" class="form-group">
						        <label class="control-label">Email address <span class="text-danger">*</span> :</label>
						            <input id="email" type="text" class="form-control" name="email" onblur="required_field('email_div',this.value,'email_error'),email_vali(this.id,this.value,'email_error','email_div')"/>
						        <span id="email_error" class="text-danger"></span>
						    </div>

						    <div id="education_div" class="form-group">
						        <label class="control-label">Education (Degree) <span class="text-danger">*</span> :</label>
						            <select id="education" class="form-control" name="education" onchange="select_error_clear('education_div',this.value,'education_error')">
						            	<option selected disabled value="0">---Please select---</option>
						            	<option>A</option>
						            	<option>B</option>
						            	<option>C</option>
						            </select>
						        <span id="" class="text-danger"></span>
						    </div>

						    <div id="yop_div" class="form-group">
						        <label class="control-label">Year of Passing <span class="text-danger">*</span> :</label>
						            <input id="yop" type="text" class="form-control" name="yop" onblur="required_field('yop_div',this.value,'yop_error'),numeric(this.id,this.value,'yop_error','yop_div')"/>
						        <span id="yop_error" class="text-danger"></span>
						    </div>

						    <div id="board_uni_div" class="form-group">
						        <label class="control-label">Board/University</label>
						            <input id="board_uni" type="text" class="form-control" name="board_uni" onblur="clear_error(this.value,'board_uni_error','board_uni_div')" />
						        <span id="board_uni_error" class="text-danger"></span>
						    </div>

						    <script type="text/javascript">
						    	function disability(value) {
						    		// body...
						    		// alert(value);
						    		if (value=='Yes') {
						    			// $('#disability_disc_div').removeAttr("hidden");
						    			$('#disability_disc_div').fadeIn(500);
						    		}
						    		if(value=='No') {
						    			// $('#disability_disc_div').attr("hidden",'true');
						    			$('#disability_disc_div').fadeOut(500);
						    		}
						    	}
						    </script>

						    <div id="phy_dis_div" class="form-group">
						        <label class="control-label">Physical Disability : </label>
						        <label class="control-label"><input type="radio" name="phy_dis" value="Yes" onchange="radio_error_clear(this.name,'phy_dis_error','phy_dis_div'),disability(this.value)">Yes</label>
						        <label class="control-label"><input type="radio" name="phy_dis" value="No" onchange="radio_error_clear(this.name,'phy_dis_error','phy_dis_div'),disability(this.value)">No</label>
						       	<span id="phy_dis_error" class="text-danger"></span>
						    </div>

						     <div id="disability_disc_div" class="form-group" hidden>
						        <label class="control-label">Discription <span class="text-danger">*</span> :</label>
						            <input id="disability_disc" type="text" class="form-control" name="disability_disc" onblur="required_field('disability_disc_div',this.value,'disability_disc_error')"/>
						        <span id="disability_disc_error" class="text-danger"></span>
						    </div>


						    <div id="password1_div" class="form-group">
						        <label class="control-label">Password <span class="text-danger">*</span> :</label>
						            <input id="password1" type="password" class="form-control" name="password1" onblur="required_field('password1_div',this.value,'password1_error'),password_vali(this.id,this.value,'password1_error','password1_div')"/>
						        <span id="password1_error" class="text-danger"></span>
						    </div>

						    <div id="password2_div" class="form-group">
						        <label class="control-label">Password again <span class="text-danger">*</span> :</label>
						            <input id="password2" type="password" class="form-control" name="password2" onblur="required_field('password2_div',this.value,'password2_error'),match_pwd(this.id,this.value,'password2_error','password2_div','password1')"/>
						        <span id="password2_error" class="text-danger"></span>
						    </div>

						    <label class="control-label">Captcha <span class="text-danger">*</span> :</label>
						    <div class="g-recaptcha" data-sitekey="6LdBMwoUAAAAAFldfgEQ_q5OcAtaFnOnz1wNGmIu"></div>

						    <div id="tnc_div" class="form-group">
						    	<div class="checkbox">
								 	<label><input id="tnc" type="checkbox" onchange="checkbox_error_clear(this.id,'','tnc_div')">I accept all Term's and condition.</label>
								</div>
						    </div>

						    <div class="form-group pull-right">
						        <input type="submit" class="btn btn-warning btn-lg" name="submit" value="Sign-up" onclick="return check()" />
						    </div>
				      	</form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>