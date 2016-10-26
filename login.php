<!DOCTYPE html>
<html>
<head>
	<?php require_once('templates/head-content.html') ?>
	<style type="text/css">
		.anchor{
			color:white;
			text-decoration:none;
		}
	</style>
	<script type="text/javascript">
		function check() {
			// body...
			var flag = 1;

			if ($('#email').val()=='') {
				flag = 0;
				error('email_div','email_error');
			}
			if ($('#password').val()=='') {
				flag = 0;
				error('password_div','password_error');
			}

			if (flag == 1) {
				return true;
			} else {
				return false;
			}
		}
	</script>
</head>
<body>
	<div class="col-sm-12 text-right" style="background:#449d44;color:white">
		<h4>
			<a class="anchor" href="login.php">Sign-In</a> | <a class="anchor" href="registration.php">Sign-Up</a>
		</h4>
	</div>
	<div class="container">
	    <div class="row vertical-offset-100">
	    	<div class="col-md-4 col-md-offset-4" style="padding-top:8em">
	    		<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Please sign in</h3>
				 	</div>
				  	<div class="panel-body">
				    	<form accept-charset="UTF-8" role="form">
	                    <fieldset>
				    	  	<div id="email_div" class="form-group">
				    		    <input id="email" class="form-control" placeholder="E-mail" name="email" type="text" onblur="clear_error(this.value,'email_error','email_div'),email_vali(this.id,this.value,'email_error','email_div')">
				    		    <span id="email_error" class="text-danger"></span>
				    		</div>
				    		<div id="password_div" class="form-group">
				    			<input id="password" class="form-control" placeholder="Password" name="password" type="password" value="" onblur="clear_error(this.value,'password_error','password_div')">
				    			<span id="password_error" class="text-danger"></span>
				    		</div>
				    		<div class="checkbox">
				    	    	<label>
				    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
				    	    	</label>
				    	    </div>
				    		<input class="btn btn-success btn-block" type="submit" value="Login" onclick="return check()">
				    	</fieldset>
				      	</form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>