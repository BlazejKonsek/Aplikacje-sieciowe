<?php
/* Smarty version 3.1.31, created on 2025-05-26 12:04:31
  from "cms_template:FortyMenu" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_68343caf234122_80933660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9a823e241c7566347e4361fa09d2bed9152da26' => 
    array (
      0 => 'cms_template:FortyMenu',
      1 => '1748248431',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68343caf234122_80933660 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="links">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</a></li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ul><?php }
}
