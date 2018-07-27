<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="assets/images/logo.png" class="image">
      <div class="content">
        CRM
      </div>
    </h2>
    <?php echo form_open('', array('class'=>'ui large form')); ?>
    <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>    
               <?php echo form_input(array('name'=>'username', 'id'=>'username', 'class'=>'form-control', 'placeholder'=>lang('users input username_email'), 'maxlength'=>256)); ?>
            </div>
        </div>               
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>        
              <?php echo form_password(array('name'=>'password', 'id'=>'password', 'class'=>'form-control', 'placeholder'=>lang('users input password'), 'maxlength'=>72, 'autocomplete'=>'off')); ?>
            </div>
        </div>              
        <?php echo form_submit(array('name'=>'submit', 'class'=>'ui fluid large teal submit button'), lang('core button login')); ?>
        <p><br /><a href="<?php echo base_url('user/forgot'); ?>"><?php echo lang('users link forgot_password'); ?></a></p>
        <p><a href="<?php echo base_url('user/register'); ?>"><?php echo lang('users link register_account'); ?></a></p>
    </div>        
    <div class="ui error message"></div>
    <?php echo form_close(); ?>
    </div>
</div>
