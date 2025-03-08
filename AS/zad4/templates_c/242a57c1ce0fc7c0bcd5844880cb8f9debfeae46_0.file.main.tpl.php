<?php
/* Smarty version 4.3.2, created on 2024-11-27 16:43:20
  from 'C:\xampp\htdocs\zad4\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67473e182ae495_82248878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '242a57c1ce0fc7c0bcd5844880cb8f9debfeae46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad4\\templates\\main.tpl',
      1 => 1732722198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67473e182ae495_82248878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40339049267473e18299fb9_55728082', 'title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197995463067473e182a8995_44966363', 'header');
?>


        <article id="main">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197473056867473e182ac684_23095887', 'content');
?>

        </article>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97313259667473e182acb75_40269990', 'footer');
?>


    </div>

    <!-- Scripts -->
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
class Block_40339049267473e18299fb9_55728082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_40339049267473e18299fb9_55728082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator Kredytu" ?? null : $tmp);
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_197995463067473e182a8995_44966363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_197995463067473e182a8995_44966363',
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
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php" class="button">Wyloguj</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/login.php" class="button">Zaloguj</a></li>
                    <?php }?>
                </ul>
            </nav>
        </header>
        <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_197473056867473e182ac684_23095887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_197473056867473e182ac684_23095887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_97313259667473e182acb75_40269990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_97313259667473e182acb75_40269990',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer id="footer">
            <ul class="icons">
                <!-- Add your social icons here if needed -->
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
