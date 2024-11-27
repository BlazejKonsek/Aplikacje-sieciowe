<?php
/* Smarty version 4.3.2, created on 2024-11-27 17:56:39
  from 'C:\xampp\htdocs\zad5\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67474f47848915_09706906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5266ddb76ae199c8a2e1ae33d9554a821d8c565' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad5\\templates\\main.tpl',
      1 => 1732726578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67474f47848915_09706906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95579598967474f4783e103_68038423', 'title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91575626367474f47843a25_18404711', 'header');
?>


        <article id="main">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198976770367474f47846840_64420723', 'content');
?>

        </article>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154354686667474f47846f04_95907201', 'footer');
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
class Block_95579598967474f4783e103_68038423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_95579598967474f4783e103_68038423',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator Kredytowy" ?? null : $tmp);
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_91575626367474f47843a25_18404711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_91575626367474f47843a25_18404711',
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
class Block_198976770367474f47846840_64420723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_198976770367474f47846840_64420723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_154354686667474f47846f04_95907201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_154354686667474f47846f04_95907201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer id="footer">
            <ul class="icons">
                <!-- Add your social icons here if needed -->
            </ul>
            <ul class="copyright">
                <li>&copy; Twoje Imię</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>
        <?php
}
}
/* {/block 'footer'} */
}
