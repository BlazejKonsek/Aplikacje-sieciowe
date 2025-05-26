<?php
/* Smarty version 3.1.31, created on 2025-05-26 12:44:02
  from "module_file_tpl:News;editfielddef.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_683445f26d0d86_42704190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f69cdd3b8350e4701d4a082640c40f6fc820665' => 
    array (
      0 => 'module_file_tpl:News;editfielddef.tpl',
      1 => 1748240023,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683445f26d0d86_42704190 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_help')) require_once 'C:\\xampp\\htdocs\\czysty\\admin\\plugins\\function.cms_help.php';
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\czysty\\lib\\smarty\\plugins\\function.html_options.php';
?>


<?php echo '<script'; ?>
 type="text/javascript">
function handle_change(){
  var val = $('#fld_type').val();
  if( val == 'dropdown' ) {
    $('#area_maxlen').hide('slow');
    $('#area_options').show('slow');
  }
  else if( val == 'checkbox' || val == 'file' || val == 'linkedfile' ) {
    $('#area_maxlen').hide('slow');
    $('#area_options').hide('slow');
  }
  else {
    $('#area_maxlen').show('slow');
    $('#area_options').hide('slow');
  }
}
$(document).ready(function(){
  handle_change();
  $('#fld_type').change(handle_change);
  $('#<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel').click(function(){
    $(this).closest('form').attr('novalidate','novalidate');
  });
});
<?php echo '</script'; ?>
>

<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
<?php echo $_smarty_tpl->tpl_vars['startform']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['hidden']->value)===null||$tmp==='' ? '' : $tmp);?>

	<div class="pageoverflow">
		<p class="pagetext"><label for="fld_name">*<?php echo $_smarty_tpl->tpl_vars['nametext']->value;?>
:</label> <?php echo smarty_function_cms_help(array('key'=>'help_fielddef_name','title'=>$_smarty_tpl->tpl_vars['nametext']->value),$_smarty_tpl);?>
</p>
		<p class="pageinput">
                  <input type="text" id="fld_name" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" size="30" maxlength="255" required/>
                </p>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['showinputtype']->value == true) {?>
		<div class="pageoverflow">
			<p class="pagetext"><label for="fld_type">*<?php echo $_smarty_tpl->tpl_vars['typetext']->value;?>
:</label> <?php echo smarty_function_cms_help(array('key'=>'help_fielddef_type','title'=>$_smarty_tpl->tpl_vars['typetext']->value),$_smarty_tpl);?>
</p>
			<p class="pageinput">
                          <select id="fld_type" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
type">
			  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fieldtypes']->value,'selected'=>$_smarty_tpl->tpl_vars['type']->value),$_smarty_tpl);?>

                          </select>
                        </p>
		</div>
        <?php } else { ?>
          <input type="hidden" id="fld_type" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"/>
	<?php }?>
	<div class="pageoverflow" id="area_options">
          <p class="pagetext"><label for="fld_options"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('options');?>
:</label> <?php echo smarty_function_cms_help(array('key'=>'help_fielddef_options','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('options')),$_smarty_tpl);?>
</p>
	  <p class="pageinput">
            <textarea id="fld_options" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
options" rows="5" cols="80"><?php echo $_smarty_tpl->tpl_vars['options']->value;?>
</textarea>
          </p>
        </div>
	<div class="pageoverflow" id="area_maxlen">
		<p class="pagetext"><label for="fld_maxlen"><?php echo $_smarty_tpl->tpl_vars['maxlengthtext']->value;?>
:</label> <?php echo smarty_function_cms_help(array('key'=>'help_fielddef_maxlen','title'=>$_smarty_tpl->tpl_vars['maxlengthtext']->value),$_smarty_tpl);?>
</p>
		<p class="pageinput">
                  <input type="text" id="fld_maxlen" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
max_length" value="<?php echo $_smarty_tpl->tpl_vars['max_length']->value;?>
" size="5" maxlength="5"/><br/><?php echo $_smarty_tpl->tpl_vars['info_maxlength']->value;?>

                </p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext"><label for="fld_public"><?php echo $_smarty_tpl->tpl_vars['userviewtext']->value;?>
:</label> <?php echo smarty_function_cms_help(array('key'=>'help_fielddef_public','title'=>$_smarty_tpl->tpl_vars['userviewtext']->value),$_smarty_tpl);?>
</p>
		<p class="pageinput">
                  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
public" value="0"/>
                  <input type="checkbox" id="fld_public" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
public" value="1" <?php if ($_smarty_tpl->tpl_vars['public']->value == 1) {?>checked="checked"<?php }?>/>
                </p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput">
                  <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
                  <input type="submit" id="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
"/>
                </p>
	</div>
<?php echo $_smarty_tpl->tpl_vars['endform']->value;
}
}
