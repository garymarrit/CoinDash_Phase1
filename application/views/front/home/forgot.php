<script type="text/javascript">
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
</script>
<section id="about">
  <div class="container mark_signin">
    <div class="row pad40 mark_signin">
      <div class="col-md-4"></div>
      <div class="col-md-4 box sign_inbox"> 
        <!-- <h1>Forgot password?</h1>-->
        <div class="content">
          <form method="post" action="" class="form-vertical login-form">
            <h3 class="form-title">Forgot password ?</h3>
            <div style="display: none;" class="alert fade in alert-danger"> <i data-dismiss="alert" class="icon-remove close"></i> Enter any username and password. </div>
            <div class="form-group" style="margin-bottom:20px !important;">
              <div class="input-icon"> <i class="icon-user"></i>
                <input type="text" autofocus placeholder="Email Id" id="email" class="form-control" name="username">
              </div>
            </div>
            <div class="form-actions">
              <button class="submit btn btn-primary pull-right" value="1" name="submit" type="submit"> Reset Password <i class="icon-angle-right"></i> </button>
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
            <div class="clearfix"></div>
            <div class="form-group sure_msg"> Are you sure you already have an account using that email ? If not you can a <a href="<?php echo site_url('front/home/register') ?>">Sign Up</a></div>
            <div class="clearfix"></div>
            <div class="form-group sure_msg"> Already have an account and remember your password ? <a href="<?php echo site_url('front/home/login') ?>">Sign In</a> </div>
          </form>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
