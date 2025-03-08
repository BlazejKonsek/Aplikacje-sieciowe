<?php
/* Smarty version 4.3.2, created on 2024-11-15 18:15:04
  from 'C:\xampp\htdocs\zad3\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_673781980017e5_09771904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a472d2209a1cb47c85c127105736856493345ac' => 
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
function content_673781980017e5_09771904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214222527167378197f28a63_21421066', 'title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_326392367378197f3cca8_83029480', 'header');
?>


            <article id="main">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41087436067378197f3f6d9_36950628', 'content');
?>

            </article>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105203835767378197f40110_72332673', 'footer');
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
class Block_214222527167378197f28a63_21421066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_214222527167378197f28a63_21421066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator Kredytu<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_326392367378197f3cca8_83029480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_326392367378197f3cca8_83029480',
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
class Block_41087436067378197f3f6d9_36950628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_41087436067378197f3f6d9_36950628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_105203835767378197f40110_72332673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_105203835767378197f40110_72332673',
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
