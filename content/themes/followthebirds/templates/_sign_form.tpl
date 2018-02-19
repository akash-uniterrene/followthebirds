<div class="panel panel-login">
     <!-- signin -->
    <div id="panel-signin" class="panel-body join-form {if $do != 'up'}x-hidden{/if}">
        <form class="js_ajax-forms" data-url="core/signin.php">
         <!-- error -->
            <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
         <!-- error -->
          <div class="form-group">
            <input name="username_email" type="text" class="form-control" placeholder='{__("Enter your email")} {__("or")} {__("Username")}' required>
            <span class=form-icon><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/email-icon.png" alt="#"></span>
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder='{__("Enter your password")}' required>  
            <span class=form-icon><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/password-icon.png" alt="#"></span>
          </div>
          <button type="submit" class="btn custom-btn">{__("Login")}</button>  
        </form>    
        {if $system['registration_enabled']}
            <div class="sign-in-box">
                Have an account? <a href="{$system['system_url']}/signup" class="js_toggle-panel text-link">Create an account</a>
            </div>
        {/if}
    </div>  
    <!-- signin -->
     <!-- signup -->
    <div id="panel-signup" class="panel-body join-form {if $do == 'up'}x-hidden{/if}">
         <form class="js_ajax-forms" data-url="core/signup.php" >
          <div class="form-group">
            <input name="first_name" type="text" class="form-control" placeholder='{__("Enter your first name")}' required>  
            <span class=form-icon><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/first-name-icon.png" alt="#"></span>
          </div>
          <div class="form-group">
            <input name="last_name" type="text" class="form-control" placeholder="Enter your last name">
            <span class=form-icon><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/last-name-icon.png" alt="#"></span>
          </div>
          <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="Enter your username">
            <span class=form-icon><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/user-icon.png" alt="#"></span>
          </div>
          <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Enter your email">
            <span class=form-icon><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/email-icon.png" alt="#"></span>
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder='{__("Enter your password")}' required>  
            <span class=form-icon><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/password-icon.png" alt="#"></span>
          </div>
          {if $system['activation_enabled'] && $system['activation_type'] == "sms"}
            <div class="form-group">
                <input name="phone" type="text" class="form-control" placeholder='{__("Phone number (eg. +905...)")}' required>
                <span class=form-icon><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/password-icon.png" alt="#"></span>
            </div>
          {/if}
           <div class="js_hidden-section x-hidden">
                <div class="form-group">
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="none">{__("Select Sex")}:</option>
                        <option value="male">{__("Male")}</option>
                        <option value="female">{__("Female")}</option>
                    </select>
                    <span class=form-icon><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/user-icon.png" alt="#"></span>
                </div>   
          {if $system['age_restriction']}
                <div class="form-group">
                    <label>{__("Birthdate")}</label>
                    <div class="row">
                        <div class="col-xs-4">
                            <select class="form-control" name="birth_month">
                                <option value="none">{__("Month")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '1'}selected{/if} value="1">{__("Jan")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '2'}selected{/if} value="2">{__("Feb")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '3'}selected{/if} value="3">{__("Mar")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '4'}selected{/if} value="4">{__("Apr")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '5'}selected{/if} value="5">{__("May")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '6'}selected{/if} value="6">{__("Jun")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '7'}selected{/if} value="7">{__("Jul")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '8'}selected{/if} value="8">{__("Aug")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '9'}selected{/if} value="9">{__("Sep")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '10'}selected{/if} value="10">{__("Oct")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '11'}selected{/if} value="11">{__("Nov")}</option>
                                <option {if $user->_data['user_birthdate_parsed']['month'] == '12'}selected{/if} value="12">{__("Dec")}</option>
                            </select>
                        </div>
                        <div class="col-xs-4">
                            <select class="form-control" name="birth_day">
                                <option value="none">{__("Day")}</option>
                                {for $i=1 to 31}
                                <option {if $user->_data['user_birthdate_parsed']['day'] == $i}selected{/if} value="{$i}">{$i}</option>
                                {/for}
                            </select>
                        </div>
                        <div class="col-xs-4">
                            <select class="form-control" name="birth_year">
                                <option value="none">{__("Year")}</option>
                                {for $i=1905 to 2017}
                                <option {if $user->_data['user_birthdate_parsed']['year'] == $i}selected{/if} value="{$i}">{$i}</option>
                                {/for}
                            </select>
                        </div>
                    </div>
                </div>
            {/if}
            <!-- custom fields -->
            {if $custom_fields}
            {include file='__custom_fields.tpl' _custom_fields=$custom_fields _registration=true}
            {/if}
            <!-- custom fields -->
            {if $system['reCAPTCHA_enabled']}
                <div class="form-group">
                    <!-- reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="{$system['reCAPTCHA_site_key']}"></div>
                    <!-- reCAPTCHA -->
                </div>
            {/if} 
          </div>   
          <button type="submit" class="btn custom-btn">Sign up</button>
        </form>
        <div class="sign-in-box">
            Have an account? <a href="{$system['system_url']}/signin" class="js_toggle-panel text-link">Login Now</a>
        </div>
    </div> 
    <!-- signup -->
</div> 