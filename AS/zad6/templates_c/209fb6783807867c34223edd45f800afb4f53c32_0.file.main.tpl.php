<?php
/* Smarty version 4.3.2, created on 2024-12-07 13:24:43
  from 'C:\xampp\htdocs\zad6\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67543e8b7e82a0_24935535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '209fb6783807867c34223edd45f800afb4f53c32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad6\\app\\views\\templates\\main.tpl',
      1 => 1733573899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67543e8b7e82a0_24935535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74153595567543e8b7d9a72_25471108', 'title');
?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/spectral/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/spectral/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <div id="page-wrapper">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10738005767543e8b7e13f5_22075325', 'header');
?>


        <article id="main">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164070138867543e8b7e62d9_74697973', 'content');
?>

        </article>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22415689767543e8b7e6823_36021575', 'footer');
?>


    </div>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/spectral/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/spectral/assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/spectral/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/spectral/assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/templates/spectral/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_74153595567543e8b7d9a72_25471108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_74153595567543e8b7d9a72_25471108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator Kredytu" ?? null : $tmp);
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_10738005767543e8b7e13f5_22075325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_10738005767543e8b7e13f5_22075325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header id="header">
            <h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator Kredytu" ?? null : $tmp);?>
</a></h1>
            <nav>
                <ul>
                    <?php if ($_smarty_tpl->tpl_vars['role']->value != '') {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button">Wyloguj</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="button">Zaloguj</a></li>
                    <?php }?>
                </ul>
            </nav>
        </header>
        <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_164070138867543e8b7e62d9_74697973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_164070138867543e8b7e62d9_74697973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_22415689767543e8b7e6823_36021575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_22415689767543e8b7e6823_36021575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer id="footer">
            <ul class="icons">
            </ul>
            <ul class="copyright">
                <li>&copy; Błażej Konsek</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>
        <?php
}
}
/* {/block 'footer'} */
}
