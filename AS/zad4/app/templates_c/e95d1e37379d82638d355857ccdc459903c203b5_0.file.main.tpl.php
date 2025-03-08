<?php
/* Smarty version 4.3.2, created on 2024-11-09 19:12:44
  from 'C:\xampp\htdocs\php_02_ochrona_dostepu\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_672fa61c203a09_69108552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95d1e37379d82638d355857ccdc459903c203b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_02_ochrona_dostepu\\templates\\main.tpl',
      1 => 1731175598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672fa61c203a09_69108552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator Kredytu</title>
</head>
<body>
<div style="width:90%; margin: 2em auto;">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1281638204672fa61c202073_56347243', 'header');
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2100957276672fa61c2029a7_20905779', 'calculator_form');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1335996073672fa61c202f38_56517705', 'results');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1504632233672fa61c203411_72971552', 'footer');
?>

</div>
</body>
</html>
<?php }
/* {block 'header'} */
class Block_1281638204672fa61c202073_56347243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1281638204672fa61c202073_56347243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'calculator_form'} */
class Block_2100957276672fa61c2029a7_20905779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calculator_form' => 
  array (
    0 => 'Block_2100957276672fa61c2029a7_20905779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'calculator_form'} */
/* {block 'results'} */
class Block_1335996073672fa61c202f38_56517705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'results' => 
  array (
    0 => 'Block_1335996073672fa61c202f38_56517705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'results'} */
/* {block 'footer'} */
class Block_1504632233672fa61c203411_72971552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1504632233672fa61c203411_72971552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
