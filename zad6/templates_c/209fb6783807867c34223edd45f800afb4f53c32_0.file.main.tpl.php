<?php
/* Smarty version 4.3.2, created on 2024-12-06 16:53:54
  from 'C:\xampp\htdocs\zad6\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67531e129585c9_44802835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '209fb6783807867c34223edd45f800afb4f53c32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad6\\app\\views\\templates\\main.tpl',
      1 => 1732731616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67531e129585c9_44802835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47916713967531e12940610_78493064', 'title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163996921667531e12943e12_32071662', 'header');
?>


        <article id="main">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18783111167531e12953999_46401079', 'content');
?>

        </article>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69056909367531e129546e4_20021230', 'footer');
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
class Block_47916713967531e12940610_78493064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_47916713967531e12940610_78493064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator Kredytowy" ?? null : $tmp);
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_163996921667531e12943e12_32071662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_163996921667531e12943e12_32071662',
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
                    <?php if ((isset($_smarty_tpl->tpl_vars['role']->value)) && $_smarty_tpl->tpl_vars['role']->value != '') {?>
                        <li>Witaj, <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</li>
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
class Block_18783111167531e12953999_46401079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18783111167531e12953999_46401079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_69056909367531e129546e4_20021230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_69056909367531e129546e4_20021230',
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
