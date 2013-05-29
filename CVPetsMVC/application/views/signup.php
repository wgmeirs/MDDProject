<? $this->load->view('includes/header'); ?>
<? $this->load->view('includes/nli_navbar'); ?>
<div class="container">
<div class="content" style="display:none">
  <div class="page-header">
    <h2>Sign Up</h2>
  </div>
	<div class="row-fluid">
        	<header class="span12 hero-unit">
           <a href="index.html"><img src="../css/img/CVPDlogo.png" / ></a>
           <h2 class="pull-right">Find the best Pet deals here!</h2>
            </header>
        
        </div>

  <div class="row-fluid">
    <div class="span4">
      <form id="formSignup" class="well" accept-charset="utf-8">
        <input type="text" class="input-block-level" name="email" value="Your Email" placeholder="Your Email" required maxlength="40" autofocus />
        <input type="text" class="input-block-level" name="email2" placeholder="Repeat Email" required maxlength="40" />
        <input type="password" class="input-block-level" name="pwd" placeholder="Your Password" required maxlength="20" />
        <input type="password" class="input-block-level" name="pwd2" placeholder="Repeat Password" required maxlength="20" />
        <button type="submit" class="btn btn-primary btn-large">
        <i class="icon-bell icon-white"></i> Sign Up</button>
      </form>
    </div>
    <div class="row-fluid">
    	<div class="span5 offset3">

        <h2>Sign up to get notified of great offers!</h2>
        <p>
        Don’t want to have to keep checking the CVPD feed? Sign-up to get notifiied by email. It’s easy, free and we won’t share your information with anyone!
        </p>
        <p>
        </p>
        
    		</div> <!--closes lh column-->
  </div>
  <div id="success" class="row" style="display: none">
    <div class="span4">
      <div id="successMessage" class="alert alert-success">
      <p><strong>Registration</strong> successful!</p>
      <!--/*<a href="<?=site_url('login'); ?>" class="btn btn-success"><i class="icon-arrow-right icon-white"></i> log on now</a>*/-->
      </div>
    </div>
  </div>
  <div id="error" class="row" style="display: none">
    <div class="span4">
      <div id="errorMessage" class="alert alert-error"></div>
    </div>
  </div>
</div>
<script src="<?=base_url('js/jquery.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
  
  $('#formSignup').submit(function() {
    
    var form = $(this);
    form.children('button').prop('disabled', true);
    $('#success').hide();
    $('#error').hide();
    
    var faction = "<?=site_url('signup/check'); ?>";
    var fdata = form.serialize();

    $.post(faction, fdata, function(rdata) {
      
      var json = jQuery.parseJSON(rdata);
      
      if(json.isSuccessful) {
          $('#success').show();
          form.children('input').val('');
          form.children('input').blur()
      } else {
          $('#errorMessage').html(json.message);
          $('#error').show();
          form.children('input[name="email"]').select();
      }
      
      form.children('button').prop('disabled', false);
    });
      
    return false;
  });

  $('.content').fadeIn(1000);
});
</script>
<? $this->load->view('includes/footer'); ?>
