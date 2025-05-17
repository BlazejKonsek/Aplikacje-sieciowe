<?php
/* Smarty version 3.1.31, created on 2025-05-17 08:34:00
  from "module_file_tpl:DesignManager;admin_delete_design.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_68282dd8a3b7b8_52184347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b364419a4b1c884c1014ee8d5bdb56cb1106d082' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_delete_design.tpl',
      1 => 1746197372,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68282dd8a3b7b8_52184347 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_form_start')) require_once 'C:\\xampp\\htdocs\\x\\lib\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_admin_icon')) require_once 'C:\\xampp\\htdocs\\x\\admin\\plugins\\function.admin_icon.php';
if (!is_callable('smarty_function_form_end')) require_once 'C:\\xampp\\htdocs\\x\\lib\\plugins\\function.form_end.php';
echo smarty_function_form_start(array('design'=>$_smarty_tpl->tpl_vars['design']->value->get_id()),$_smarty_tpl);?>

<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete_design');?>
: <?php echo $_smarty_tpl->tpl_vars['design']->value->get_name();?>
 (<?php echo $_smarty_tpl->tpl_vars['design']->value->get_id();?>
)</h3>

<div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warning_deletedesign');?>
</div>

<?php if ($_smarty_tpl->tpl_vars['design']->value->has_templates() && $_smarty_tpl->tpl_vars['tpl_permission']->value) {?>
<div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warning_deletetemplate_attachments');?>
</div>
<div class="pageoverflow">
  <p class="pagetext"><label for-"opt_rm_tpl"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete_attached_templates');?>
:</label></p>
  <p class="pageinput">
    <input type="checkbox" id="opt_rm_tpl" value="yes" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
delete_templates"/>&nbsp;
    <?php echo smarty_function_admin_icon(array('class'=>'helpicon','name'=>'help_rm_tpl','icon'=>'info.gif'),$_smarty_tpl);?>

  </p>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['design']->value->has_stylesheets() && $_smarty_tpl->tpl_vars['css_permission']->value) {?>
<div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warning_deletestylesheet_attachments');?>
</div>
<div class="pageoverflow">
  <p class="pagetext"><label for-"opt_rm_css"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete_attached_stylesheets');?>
:</label></p>
  <p class="pageinput">
    <input type="checkbox" id="opt_rm_css" value="yes" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
delete_stylesheets"/>&nbsp;
    <?php echo smarty_function_admin_icon(array('class'=>'helpicon','name'=>'help_rm_css','icon'=>'info.gif'),$_smarty_tpl);?>

  </p>
</div>
<?php }?>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete_1');?>
:</p>
  <p class="pageinput">
    <input type="checkbox" id="opt_delete1" value="yes" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
confirm_delete1"/>&nbsp;
<label for="opt_delete1"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete_2a');?>
:</label><br/>
    <input type="checkbox" id="opt_delete2" value="yes" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
confirm_delete2"/>&nbsp;
<label for="opt_delete2"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete_2b');?>
:</label>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
"/>
  </p>
</div>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>


<div style="display: none;">
  <div id="help_rm_tpl" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_help');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('help_rm_tpl');?>
</div>
  <div id="help_rm_css" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_help');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('help_rm_css');?>
</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
  $('.helpicon').click(function(){
    var x = $(this).attr('name');
    $('#'+x).dialog();
  });
});
<?php echo '</script'; ?>
><?php }
}
