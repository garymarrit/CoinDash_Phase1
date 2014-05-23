<script>
	function checkEmail(email){
		var pattern = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
		if(email.match(pattern)){
			jQuery('#email').css('border-color','#66afe9');
			//jQuery('.checkEmail').html('');
			return true;
		} else {
			jQuery('#email').css('border-color','#f6464a');
			//jQuery('.checkEmail').html('<br><i class="fa fa-exclamation-triangle"></i> Please insert valid email id.');
			return false;
		}
	}
	
	function checkPass(password){
		var pattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).*$/;
		if(password.match(pattern) && password.length>5){
			jQuery('.checkPass').html('');
			//jQuery('#password').css('border-color','#66afe9');
			return true;
		} else {
			jQuery('#password').css('border-color','#f6464a');
			//jQuery('.checkPass').html('<br><i class="fa fa-exclamation-triangle"></i> Password should contains 1 lowercase, 1 uppercase, 1 digit and more than 6 characters.');
			return false;
		}
	}
	
	function checkVal(){
		var email = jQuery('#email').val();
		var password = jQuery('password').val();
		if(checkPass(password) && checkEmail(email)){
			return true;
		} else {
			return false;
		}
	}
</script>
<!-- About Section -->
<section id="about">
  <div class="container mark_signin">
    <div class="row pad40 mark_signin">
      <div class="col-md-4"></div>
      <div class="col-md-4 box sign_inbox">
        <h1>Sign In</h1>
        <div class="content">
			
          <form method="post" action="" class="form-vertical login-form">
            <h3 class="form-title">Sign In to your Account</h3>
            <div style="display: none;" class="alert fade in alert-danger"> <i data-dismiss="alert" class="icon-remove close"></i> Enter any username and password. </div>
            <div class="form-group">
              <div class="input-icon"> <i class="icon-user"></i>
                <input type="text" placeholder="Username" id="email" class="form-control" name="email">
				<span class="error checkEmail"></span>
              </div>
            </div>
            <div class="form-group">
              <div class="input-icon"> <i class="icon-lock"></i>
                <input type="password" placeholder="Password" id="password" class="form-control" name="password">
				<span class="error checkPass"></span>
              </div>
            </div>
            <div class="form-actions">
              <label class="checkbox pull-left">
              <div class="checker"><span>
                <input type="checkbox" value="1" name="remember" class="uniform">
                </span></div>
              Remember me
              </label>
              <button name="submit" value="1" class="submit btn btn-primary pull-right" type="submit"> Sign In <i class="icon-angle-right"></i> </button>
            </div>
          </form>
          <div class="clearfix"></div>
          <?php if(isset($msg)): ?>
			<?php if(isset($msg['error'])): ?>
				<div class="error error_graphics"><?php echo $msg['error'] ?></div>
			<?php endif; ?>
			<?php if(isset($msg['success'])): ?>
				<div class="success sucess_graphics"><?php echo $msg['success'] ?></div>
			<?php endif; ?>
		<?php endif; ?>
          <div class="form-group login_new_butn"><a href="<?php echo site_url('front/home/forgot_password') ?>"> Forgot password ?</a> · Don't have an account ? <a href="<?php echo site_url('front/home/register') ?>"> Sign up</a></div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>