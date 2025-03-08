<?php
/* Smarty version 4.3.2, created on 2024-11-09 22:31:38
  from 'C:\xampp\htdocs\z3\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_672fd4bab757d1_07173712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5a6854c5ed3aee02ad98934b9435b8d922a4a6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\z3\\templates\\main.tpl',
      1 => 1731187895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672fd4bab757d1_07173712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1635387248672fd4bab689b0_53493554', 'title');
?>
</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/spectral/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/spectral/assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Page Wrapper -->
        <div id="page-wrapper">

            <!-- Header -->
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_475413054672fd4bab72a89_73032839', 'header');
?>


            <!-- Main -->
            <article id="main">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_507808069672fd4bab73ce7_53137279', 'content');
?>

            </article>

            <!-- Footer -->
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_290308545672fd4bab74467_85133569', 'footer');
?>


        </div>

        <!-- Scripts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/spectral/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/spectral/assets/js/browser.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/spectral/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/spectral/assets/js/util.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/templates/spectral/assets/js/main.js"><?php echo '</script'; ?>
>

    </body>
</html>
<?php }
/* {block 'title'} */
class Block_1635387248672fd4bab689b0_53493554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1635387248672fd4bab689b0_53493554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator Kredytu<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_475413054672fd4bab72a89_73032839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_475413054672fd4bab72a89_73032839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <header id="header" class="alt">
                <h1><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">Kalkulator Kredytu</a></h1>
                <nav>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" class="button small">Zaloguj</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php" class="button small">Wyloguj</a></li>
                    </ul>
                </nav>
            </header>
            <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_507808069672fd4bab73ce7_53137279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_507808069672fd4bab73ce7_53137279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_290308545672fd4bab74467_85133569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_290308545672fd4bab74467_85133569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer id="footer">
                <ul class="icons">
                    <!-- Social media icons -->
                </ul>
                <ul class="copyright">
                    <li>&copy; Twoja Aplikacja</li>
                    <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
                </ul>
            </footer>
            <?php
}
}
/* {/block 'footer'} */
}
