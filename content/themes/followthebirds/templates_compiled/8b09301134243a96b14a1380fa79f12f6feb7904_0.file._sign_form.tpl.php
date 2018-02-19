<?php
/* Smarty version 3.1.31, created on 2018-02-02 06:19:10
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/_sign_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7402deed9642_74717323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b09301134243a96b14a1380fa79f12f6feb7904' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/_sign_form.tpl',
      1 => 1517552276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_5a7402deed9642_74717323 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-login">
     <!-- signin -->
    <div id="panel-signin" class="panel-body join-form <?php if ($_smarty_tpl->tpl_vars['do']->value != 'up') {?>x-hidden<?php }?>">
        <form class="js_ajax-forms" data-url="core/signin.php">
         <!-- error -->
            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
         <!-- error -->
          <div class="form-group">
            <input name="username_email" type="text" class="form-control" placeholder='<?php echo __("Enter your email");?>
 <?php echo __("or");?>
 <?php echo __("Username");?>
' required>
            <span class=form-icon><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/email-icon.png" alt="#"></span>
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder='<?php echo __("Enter your password");?>
' required>  
            <span class=form-icon><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/password-icon.png" alt="#"></span>
          </div>
          <button type="submit" class="btn custom-btn"><?php echo __("Login");?>
</button>  
        </form>    
        <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_enabled']) {?>
            <div class="sign-in-box">
                Have an account? <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup" class="js_toggle-panel text-link">Create an account</a>
            </div>
        <?php }?>
    </div>  
    <!-- signin -->
     <!-- signup -->
    <div id="panel-signup" class="panel-body join-form <?php if ($_smarty_tpl->tpl_vars['do']->value == 'up') {?>x-hidden<?php }?>">
         <form class="js_ajax-forms" data-url="core/signup.php" >
          <div class="form-group">
            <input name="first_name" type="text" class="form-control" placeholder='<?php echo __("Enter your first name");?>
' required>  
            <span class=form-icon><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/first-name-icon.png" alt="#"></span>
          </div>
          <div class="form-group">
            <input name="last_name" type="text" class="form-control" placeholder="Enter your last name">
            <span class=form-icon><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/last-name-icon.png" alt="#"></span>
          </div>
          <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="Enter your username">
            <span class=form-icon><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/user-icon.png" alt="#"></span>
          </div>
          <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Enter your email">
            <span class=form-icon><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/email-icon.png" alt="#"></span>
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder='<?php echo __("Enter your password");?>
' required>  
            <span class=form-icon><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/password-icon.png" alt="#"></span>
          </div>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && $_smarty_tpl->tpl_vars['system']->value['activation_type'] == "sms") {?>
            <div class="form-group">
                <input name="phone" type="text" class="form-control" placeholder='<?php echo __("Phone number (eg. +905...)");?>
' required>
                <span class=form-icon><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/password-icon.png" alt="#"></span>
            </div>
          <?php }?>
           <div class="js_hidden-section x-hidden">
                <div class="form-group">
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="none"><?php echo __("Select Sex");?>
:</option>
                        <option value="male"><?php echo __("Male");?>
</option>
                        <option value="female"><?php echo __("Female");?>
</option>
                    </select>
                    <span class=form-icon><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/user-icon.png" alt="#"></span>
                </div>   
          <?php if ($_smarty_tpl->tpl_vars['system']->value['age_restriction']) {?>
                <div class="form-group">
                    <label><?php echo __("Birthdate");?>
</label>
                    <div class="row">
                        <div class="col-xs-4">
                            <select class="form-control" name="birth_month">
                                <option value="none"><?php echo __("Month");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
</option>
                            </select>
                        </div>
                        <div class="col-xs-4">
                            <select class="form-control" name="birth_day">
                                <option value="none"><?php echo __("Day");?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                <?php }
}
?>

                            </select>
                        </div>
                        <div class="col-xs-4">
                            <select class="form-control" name="birth_year">
                                <option value="none"><?php echo __("Year");?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2017+1 - (1905) : 1905-(2017)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                <?php }
}
?>

                            </select>
                        </div>
                    </div>
                </div>
            <?php }?>
            <!-- custom fields -->
            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>

            <?php }?>
            <!-- custom fields -->
            <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
                <div class="form-group">
                    <!-- reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
                    <!-- reCAPTCHA -->
                </div>
            <?php }?> 
          </div>   
          <button type="submit" class="btn custom-btn">Sign up</button>
        </form>
        <div class="sign-in-box">
            Have an account? <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin" class="js_toggle-panel text-link">Login Now</a>
        </div>
    </div> 
    <!-- signup -->
</div> <?php }
}
