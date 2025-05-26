<?php
/* Smarty version 3.1.31, created on 2025-05-26 12:36:43
  from "module_file_tpl:Search;options_tab.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6834443b0da543_42207927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5ce62a8faeca249f7c121f8f2f5825c5a79bdc5' => 
    array (
      0 => 'module_file_tpl:Search;options_tab.tpl',
      1 => 1748240023,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6834443b0da543_42207927 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_page_selector')) require_once 'C:\\xampp\\htdocs\\czysty\\admin\\plugins\\function.page_selector.php';
echo $_smarty_tpl->tpl_vars['formstart']->value;?>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_stopwords']->value;?>
:</p>
  <p class="pageinput"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['input_stopwords']->value);?>
</p>
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_resetstopwords']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_resetstopwords']->value;?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_stemming']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_stemming']->value;?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_searchtext']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_searchtext']->value;?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_savephrases']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_savephrases']->value;?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_alpharesults']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['input_alpharesults']->value;?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_resultpage']->value;?>
:</p>
  <p class="pageinput"><?php echo smarty_function_page_selector(array('name'=>((string)$_smarty_tpl->tpl_vars['actionid']->value)."resultpage",'value'=>$_smarty_tpl->tpl_vars['mod']->value->GetPreference('resultpage')),$_smarty_tpl);?>
</p>
</div>
<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>

    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
reindex" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('reindexallcontent');?>
" onclick="return confirm('<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_reindex'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"/>
  </p>
</div>
<?php echo $_smarty_tpl->tpl_vars['formend']->value;
}
}
