<?php
/* Smarty version 3.1.31, created on 2018-02-02 06:52:41
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.story.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a740ab92f92a8_60965633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b10253a3f9a2ff2cc4d3278d387d449e7d355988' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.story.tpl',
      1 => 1509843185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a740ab92f92a8_60965633 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body plr0 ptb0">
    <div class="x-form publisher mini">

        <!-- publisher close -->
        <button type="button" class="close mr10 pull-right flip" data-dismiss="modal" aria-hidden="true">×</button>
        <!-- publisher close -->

        <!-- publisher tabs -->
        <ul class="publisher-tabs clearfix">
            <li>
                <span class="active">
                    <i class="fa fa-picture-o fa-fw"></i> <?php echo __("Create a Story");?>

                </span>
            </li>
        </ul>
        <!-- publisher tabs -->

        <!-- post message -->
        <div class="relative">
            <textarea dir="auto" class="js_mention" placeholder='<?php echo __("What is on your mind?");?>
'></textarea>
        </div>
        <!-- post message -->

        <!-- post attachments -->
        <div class="publisher-attachments attachments clearfix x-hidden">
            <ul></ul>
        </div>
        <!-- post attachments -->

        <!-- publisher-footer -->
        <div class="publisher-footer clearfix">
            <!-- publisher-tools -->
            <ul class="publisher-tools">
                <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
                    <li data-toggle="tooltip" data-placement="top" title='<?php echo __("Add Photos");?>
'>
                        <span class="publisher-tools-attach js_publisher-photos">
                            <i class="fa fa-camera fa-fw js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
                        </span>
                    </li>
                <?php }?>
            </ul>
            <!-- publisher-tools -->

            <!-- publisher-buttons -->
            <div class="pull-right flip mt5 mr10">
                <button type="button" class="btn btn-primary js_story-publish"><?php echo __("Publish Story");?>
</button>
            </div>
            <!-- publisher-buttons -->
        </div>
        <!-- publisher-footer -->
    </div>
</div><?php }
}
