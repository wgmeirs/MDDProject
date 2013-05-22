<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?=site_url('site')?>"><img src="<?=base_url('css/img/yourcontacts.png'); ?>"></a>
      <ul class="nav">
        <li class="divider-vertical"></li>
        <li id="nav-add"><?=anchor('site/add', 'Add'); ?></li>
        <li class="divider-vertical"></li>
        <li id="nav-delete"><?=anchor('site/delete', 'Delete'); ?></li>
        <li class="divider-vertical"></li>
        <li id="nav-edit"><?=anchor('site/edit', 'Edit'); ?></li>
        <li class="divider-vertical"></li>
      </ul>
      <div class="pull-right">
        <small class="navbar-text">User: <?=anchor('site/profile', $this->session->userdata('email')); ?> </small>
        <a href="<?=site_url('login/logout'); ?>" class="btn btn-primary"><i class="icon-road icon-white"></i> Logout</a>
      </div>
    </div>
  </div>
</div>
