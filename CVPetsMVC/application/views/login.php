<? $this->load->view('includes/header'); ?>
<? $this->load->view('includes/nli_navbar'); ?>
<div class="container">
<div class="content" style="display:none">
  <div class="page-header">
    <h2>Welcome to Champlain Valley Pet Deals!</h2>
  </div>
  <div class="row">
   <div class="span4">
    <h2>Get the latest feed on pet deals!</h2>
        <p>
        Want to contribute to the great deals? It’s easy! from your Twitter account simply tweet the deal @cvpetdeals, that’s it!
Don’t want to have to keep checking the CVPD feed? Sign-up to get notifiied by email. It’s easy, free and we won’t share your information with anyone! 
        </p>
        <p>
        <a href="http://localhost:8888/MDDProject/CVPetsMVC/index.php/signup">Go here to sign up! »</a>
        </p>
    </div>
    <div class="span4 offset3">
    <a class="twitter-timeline"  href="https://twitter.com/cvpetdeals"  data-widget-id="339021046982266880">Tweets by @cvpetdeals</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
   <a class="twitter-timeline"  href="https://twitter.com/cvpetdeals"  data-widget-id="339021046982266880">Tweets by @cvpetdeals</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
    </div>
   
  
  
</div>
<script src="<?=base_url('js/jquery.js'); ?>"></script>
<script>
$(document).ready(function() {
  $('.content').fadeIn(1000);
});
</script>
<? $this->load->view('includes/footer'); ?>
