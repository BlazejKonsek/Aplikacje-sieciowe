<?php
/* Smarty version 4.3.2, created on 2024-11-15 18:26:50
  from 'C:\xampp\htdocs\zad3\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6737845a643895_31380461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14b7887df76c57d053c88213665f3670e5f091b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad3\\templates\\main.tpl',
      1 => 1731690840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6737845a643895_31380461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14075438126737845a63bf51_20727367', 'title');
?>
</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/templates/spectral/assets/css/main.css" />

        <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/templates/spectral/assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <div id="page-wrapper">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16382239566737845a63e2f6_56853252', 'header');
?>


            <article id="main">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20011481456737845a640246_64225204', 'content');
?>

            </article>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9097806246737845a640b45_29528252', 'footer');
?>


        </div>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/templates/spectral/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/templates/spectral/assets/js/browser.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/templates/spectral/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/templates/spectral/assets/js/util.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/templates/spectral/assets/js/main.js"><?php echo '</script'; ?>
>

    </body>
</html>
<?php }
/* {block 'title'} */
class Block_14075438126737845a63bf51_20727367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14075438126737845a63bf51_20727367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator Kredytu<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_16382239566737845a63e2f6_56853252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16382239566737845a63e2f6_56853252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <header id="header" class="alt">
                <h1><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
">Kalkulator Kredytu</a></h1>
                <nav>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/app/security/login.php" class="button small">Zaloguj</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/app/security/logout.php" class="button small">Wyloguj</a></li>
                    </ul>
                </nav>
            </header>
            <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_20011481456737845a640246_64225204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20011481456737845a640246_64225204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_9097806246737845a640b45_29528252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9097806246737845a640b45_29528252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer id="footer">
                <ul class="icons">
                </ul>
                <ul class="copyright">
                    <li>&copy; Błażej Konsek</li>
                    <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
                </ul>
            </footer>
            <?php
}
}
/* {/block 'footer'} */
}
