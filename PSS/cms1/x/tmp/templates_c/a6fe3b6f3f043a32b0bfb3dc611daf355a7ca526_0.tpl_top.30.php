<?php
/* Smarty version 3.1.31, created on 2025-05-02 18:56:12
  from "tpl_top:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6814f92c844823_39315606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6fe3b6f3f043a32b0bfb3dc611daf355a7ca526' => 
    array (
      0 => 'tpl_top:30',
      1 => '1746204969',
      2 => 'tpl_top',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6814f92c844823_39315606 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\x\\lib\\plugins\\function.cms_get_language.php';
echo CMS_Content_Block::smarty_fetch_pagedata(array(),$_smarty_tpl);?>

<!DOCTYPE html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
"><?php }
}
