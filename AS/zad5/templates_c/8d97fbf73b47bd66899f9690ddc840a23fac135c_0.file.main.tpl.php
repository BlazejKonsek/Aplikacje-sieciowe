<?php
/* Smarty version 4.3.2, created on 2024-11-27 19:20:20
  from 'C:\xampp\htdocs\zad5\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_674762e4169114_56200238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d97fbf73b47bd66899f9690ddc840a23fac135c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad5\\app\\views\\templates\\main.tpl',
      1 => 1732731616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674762e4169114_56200238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_574637346674762e41495e2_56227210', 'title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2010652734674762e415eae1_00091284', 'header');
?>


        <article id="main">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_314697114674762e4165dd3_43061282', 'content');
?>

        </article>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1751044869674762e4166631_13667023', 'footer');
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
class Block_574637346674762e41495e2_56227210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_574637346674762e41495e2_56227210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator Kredytowy" ?? null : $tmp);
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_2010652734674762e415eae1_00091284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2010652734674762e415eae1_00091284',
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
class Block_314697114674762e4165dd3_43061282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_314697114674762e4165dd3_43061282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1751044869674762e4166631_13667023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1751044869674762e4166631_13667023',
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
