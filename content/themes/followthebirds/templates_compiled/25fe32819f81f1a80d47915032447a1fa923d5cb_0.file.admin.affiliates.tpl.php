<?php
/* Smarty version 3.1.31, created on 2018-02-02 07:46:17
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/admin.affiliates.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7417493cc928_66365442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25fe32819f81f1a80d47915032447a1fa923d5cb' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/admin.affiliates.tpl',
      1 => 1506456429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7417493cc928_66365442 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-exchange pr5 panel-icon"></i>
        <strong><?php echo __("Affiliates");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?> &rsaquo; <strong><?php echo __("Payment Requests");?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=affiliates">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Affiliates Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="affiliates_enabled">
                            <input type="checkbox" name="affiliates_enabled" id="affiliates_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Enable or Disable the affiliates system");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("User Earn Money When");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="affiliate_type">
                            <option <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_type'] == "registration") {?>selected<?php }?> value="registration">
                                <?php echo __("New User Registered");?>

                            </option>
                            <option <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_type'] == "packages") {?>selected<?php }?> value="packages">
                                <?php echo __("New User Registered & Bought Pro Package");?>

                            </option>
                        </select>
                        <span class="help-block">
                            <?php echo __("If registration type is 'Subscriptions Only' User will earn money from new registration only");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Payment Method");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" name="affiliate_payment_method" id="method_paypal" value="paypal" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "paypal") {?>checked<?php }?>>
                            <label for="method_paypal"><?php echo __("Paypal");?>
</label>
                        </div>
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" name="affiliate_payment_method" id="method_skrill" value="skrill" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "skrill") {?>checked<?php }?>>
                            <label for="method_skrill"><?php echo __("Skrill");?>
</label>
                        </div>
                        <div class="radio radio-primary radio-inline">
                            <input type="radio" name="affiliate_payment_method" id="method_both" value="both" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "both") {?>checked<?php }?>>
                            <label for="method_both"><?php echo __("Both");?>
</label>
                        </div>
                        <span class="help-block">
                            <?php echo __("Users can send withdrawal requests via any of these methods");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Minimum Withdrawal Request");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="affiliates_min_withdrawal" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['affiliates_min_withdrawal'];?>
">
                        <span class="help-block">
                            <?php echo __("The minimum amount of money so user can send a withdrawal request");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Price/Referred");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="affiliates_per_user" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['affiliates_per_user'];?>
">
                        <span class="help-block">
                            <?php echo __("The price for each new referred user");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>
        <div class="panel-body">
            <div class="alert alert-warning">
                <div class="icon">
                    <i class="fa fa-paypal fa-2x"></i>
                </div>
                <div class="text">
                    <strong><?php echo __("Payment Requests");?>
</strong><br>
                    <?php echo __("You will need to make the payments from your Paypal/Skrill account");?>
.<br>
                    <?php echo __("After making the payment you can mark the payment request as paid");?>
.
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("User");?>
</th>
                            <th><?php echo __("Email");?>
</th>
                            <th><?php echo __("Amount");?>
</th>
                            <th><?php echo __("Method");?>
</th>
                            <th><?php echo __("Referrals");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
</td>
                            <td>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];?>

                                </a>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['row']->value['amount'],2);?>
</td>
                            <td>
                                <label class="label <?php if ($_smarty_tpl->tpl_vars['row']->value['method'] == 'paypal') {?>label-info<?php } else { ?>label-danger<?php }?>">
                                    <?php echo ucfirst($_smarty_tpl->tpl_vars['row']->value['method']);?>

                                </label>
                            </td>
                            <td>
                                <span class="text-link" data-toggle="modal" data-url="admin/referrals.php?user_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
">
                                    <?php echo __("Show");?>

                                </span>
                            </td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Mark as Paid");?>
' class="btn btn-xs btn-success js_admin-withdraw" data-handle="approve" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                                        <i class="fa fa-check"></i>
                                </button>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Decline");?>
' class="btn btn-xs btn-danger js_admin-withdraw" data-handle="decline" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['payment_id'];?>
">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>
            </div>
        </div>
    <?php }?>
</div><?php }
}
