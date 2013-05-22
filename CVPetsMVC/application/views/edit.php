<? $this->load->view('includes/header'); ?>
<? $this->load->view('includes/navbar'); ?>
<div class="container">
<div class="content" style="display:none">
  <div class="page-header">
    <h2>Edit A Contact</h2>
  </div>
  <div class="row">
    <div class="span4">
      <form id="formEdit" class="well" accept-charset="utf-8">
        <select id="formSelect" name="name" class="input-block-level">
        <? foreach($contacts as $contact): ?>
          <option value="<?=$contact['name']; ?>"><?=$contact['name']; ?></option>
        <? endforeach; ?>
        </select>
        <input type="email" name="email" class="input-block-level" placeholder="Email" required maxlength="40" value="<?=$firstcontact['email']?>">
        <input type="text" name="phone" class="input-block-level" placeholder="Phone" required maxlength="15" value="<?=$firstcontact['phone']?>">
        <button type="submit" class="btn btn-warning btn-large">
        <i class="icon-pencil icon-white"></i> Edit Contact</button>
      </form>
    </div>
  </div>
  <div id="success" class="row" style="display: none">
    <div class="span4">
      <div id="successMessage" class="alert alert-success"></div>
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
  
  $('#formEdit').submit(function(){

    var form = $(this);
    form.children('button').prop('disabled', true);
    $('#success').hide();
    $('#error').hide();

    var faction = "<?=site_url('site/edit_contact'); ?>";
    var fdata = form.serialize();

    $.post(faction, fdata, function(rdata) {
        
        var json = $.parseJSON(rdata);
        
        if (json.isSuccessful) {
            $('#successMessage').html(json.message);
            $('#success').show();
        } else {
            $('#errorMessage').html(json.message);
            $('#error').show();
        }
      
        form.children('button').prop('disabled', false);
    });
  
    return false;
  });

  $('#formSelect').change(function() {

    $('#success').hide();
    $('#error').hide();

    var faction = "<?=site_url('site/get_contact_data'); ?>";
    var fdata = $('#formSelect').serialize();

    $.post(faction, fdata, function(rdata) {
        
        var json = $.parseJSON(rdata);
        
        if(json.isSuccessful) {
            $('#formEdit input[name="email"]').val(json.email);
            $('#formEdit input[name="phone"]').val(json.phone);
        } else {
            $('#errorMessage').html(json.message);
            $('#error').show();
        }
    });
  });

  $('#nav-edit').addClass('active');

  $('.content').fadeIn(1000);
});
</script>
<? $this->load->view('includes/footer'); ?>
