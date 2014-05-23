<script>
	function checkEmail(email){
		var pattern = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
		if(email.match(pattern)){
			jQuery('#email').css('border-color','#66afe9');
			jQuery('.checkEmail').html('');
			jQuery('.checkEmail').hide();
			return true;
		} else {
			jQuery('#email').css('border-color','#f6464a');
			jQuery('.checkEmail').html('<i class="fa fa-exclamation-triangle"></i> Please insert valid email id.');
			jQuery('.checkEmail').show();
			return false;
		}
	}
	
	function checkPass(password){
		var pattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).*$/;
		if(password.match(pattern)){
			jQuery('.checkPass').html('');
			jQuery('.checkPass').hide();
			jQuery('#password').css('border-color','#66afe9');
			return true;
		} else {
			jQuery('#password').css('border-color','#f6464a');
			jQuery('.checkPass').html('<i class="fa fa-exclamation-triangle"></i> Password should contains 1 lowercase, 1 uppercase and 1 digit.');
			jQuery('.checkPass').show();
			return false;
		}
	}
	
	function checkVal(){
		var email = jQuery('#email').val();
		jQuery.post('<?php echo site_url('front/home/check_username') ?>',{email:email},function(r){
			console.log(r);
			if(r==1){
				jQuery('.checkEmail').html('<i class="fa fa-exclamation-triangle"></i> Username is already exists in database.');
				return false;
			} else {
				return true;
			}
		});
	}
</script>
<!-- About Section -->

<section id="about">
  <div class="container mark_signin">
    <div class="row pad40 mark_signin">
      <div class="col-md-4"></div>
      <div class="col-md-4 box sign_inbox">
        <h1>Sign Up</h1>
        <div class="content">
          <form id="regForm" method="post" action="" class="form-vertical register-form">
            <h3 class="form-title">Sign Up for Free</h3>
            <div class="form-group">
              <div class="input-icon"> <i class="icon-envelope"></i>
                <input type="email" required pattern="^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$" onkeyup="checkEmail(this.value);" placeholder="Email" id="email" class="form-control" name="email">
                <div style="display:none;" class="checkEmail error error_graphics"></div> </div>
            </div>
            <div class="form-group">
              <div class="input-icon"> <i class="icon-lock"></i>
                <input type="password" required onkeyup="checkPass(this.value);" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).*$" title="Password must contains 1 upercase, 1 lowercase and 1 digit." id="password" placeholder="Password" class="form-control" name="password">
                <div style="display:none;" class="checkPass error error_graphics"></div> </div>
            </div>
            <div class="form-actions">
              <input type="submit" name="submit" value="Sign Up" class="submit btn btn-primary pull-right" />
              <!--<button class="submit btn btn-primary pull-right" onclick="return checkVal();" name="submit" value="1" type="button"> Sign Up <i class="icon-angle-right"></i> </button>--> 
            </div>
          </form>
        </div>
        <div class="clearfix"></div>
        <?php if(isset($msg)): ?>
        <?php if(isset($msg['error'])): ?>
        <div class="error error_graphics"><?php echo $msg['error'] ?></div>
        <?php endif; ?>
        <?php if(isset($msg['success'])): ?>
        <div class="success sucess_graphics"><?php echo $msg['success'] ?></div>
        <?php endif; ?>
        <?php endif; ?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
