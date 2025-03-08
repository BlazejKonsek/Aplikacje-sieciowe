<?php
/* Smarty version 4.3.2, created on 2024-11-09 21:27:54
  from 'C:\xampp\htdocs\php_02_ochrona_dostepu\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_672fc5ca23e970_24076230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3792598ad246834b93cdbe6191385dca695b0c4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_02_ochrona_dostepu\\templates\\main.tpl',
      1 => 1731184054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672fc5ca23e970_24076230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195131599672fc5ca2366a3_34300714', 'title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_438969099672fc5ca2377a7_46198050', 'header');
?>



            <!-- Main -->
            <article id="main">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1536420934672fc5ca23bfc1_90838694', 'content');
?>

            </article>

            <!-- Footer -->
            <!-- Footer -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_689831012672fc5ca23cb56_51095638', 'footer');
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
class Block_195131599672fc5ca2366a3_34300714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_195131599672fc5ca2366a3_34300714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator Kredytu<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_438969099672fc5ca2377a7_46198050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_438969099672fc5ca2377a7_46198050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header id="header" class="alt">
    <h1><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">Kalkulator Kredytu</a></h1>
    <nav id="nav">
        <ul>
            <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
                <li>Witaj, <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
!</li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php" class="button small">Wyloguj</a></li>
            <?php } else { ?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" class="button small">Zaloguj</a></li>
            <?php }?>
        </ul>
    </nav>
</header>
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_1536420934672fc5ca23bfc1_90838694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1536420934672fc5ca23bfc1_90838694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <section id="banner" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/banner.jpg');">
        <h2>Kalkulator Kredytu</h2>
        <p>Oblicz ratę kredytu szybko i łatwo</p>
    </section>
                <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_689831012672fc5ca23cb56_51095638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_689831012672fc5ca23cb56_51095638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<footer id="footer">
    <section>
        <h2>Kontakt</h2>
        <dl class="alt">
            <dt>Autor</dt>
            <dd>Twoje Imię i Nazwisko</dd>
            <dt>Email</dt>
            <dd><a href="mailto:twojemail@example.com">twojemail@example.com</a></dd>
        </dl>
    </section>
    <ul class="icons">
        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        <!-- Add more icons as needed -->
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
