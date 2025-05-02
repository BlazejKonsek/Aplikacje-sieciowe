<?php
/* Smarty version 3.1.31, created on 2025-05-02 18:56:56
  from "cms_template:30" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6814f958932976_06419891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a895c0c0b4af16236eece14768d2e412539c8e' => 
    array (
      0 => 'cms_template:30',
      1 => '1746204969',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6814f958932976_06419891 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_get_language')) require_once 'C:\\xampp\\htdocs\\x\\lib\\plugins\\function.cms_get_language.php';
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\x\\lib\\plugins\\function.title.php';
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\x\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_metadata')) require_once 'C:\\xampp\\htdocs\\x\\lib\\plugins\\function.metadata.php';
if (!is_callable('smarty_function_cms_selflink')) require_once 'C:\\xampp\\htdocs\\x\\lib\\plugins\\function.cms_selflink.php';
if (!is_callable('smarty_function_cms_module')) require_once 'C:\\xampp\\htdocs\\x\\lib\\plugins\\function.cms_module.php';
?>

<!DOCTYPE html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">
<head>
  <meta charset="utf-8" />
  <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 – <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>


  <link rel="stylesheet" href="/x/assets/forty/css/main.css" />
  <noscript><link rel="stylesheet" href="/x/assets/forty/css/noscript.css" /></noscript>
  <!--[if lte IE 9]><link rel="stylesheet" href="/x/assets/forty/css/ie9.css" /><![endif]-->
  <!--[if lte IE 8]><link rel="stylesheet" href="/x/assets/forty/css/ie8.css" /><![endif]-->
</head>
<body class="is-preload">

  <div id="wrapper">

    <header id="header">
      <a href="<?php echo smarty_function_cms_selflink(array('page'=>'home','urlonly'=>1),$_smarty_tpl);?>
" class="logo">
        <strong>Forty</strong> <span>by HTML5 UP</span>
      </a>
      <nav><a href="#menu">Menu</a></nav>
    </header>

    <nav id="menu">
      <ul class="links">
        
      </ul>
      <ul class="actions stacked">
        <li><a href="#" class="button primary fit">Get Started</a></li>
        <li><a href="#" class="button fit">Log In</a></li>
      </ul>
    </nav>

    <?php if ($_smarty_tpl->tpl_vars['page_alias']->value == 'home') {?>
      <section id="banner" class="major">
        <div class="inner">
          <header class="major"><h1>Hi, my name is Forty</h1></header>
          <div class="content">
            <p>A responsive site template designed by HTML5 UP<br />
               and released under the Creative Commons.</p>
            <ul class="actions">
              <li><a href="#one" class="button next scrolly">Get Started</a></li>
            </ul>
          </div>
        </div>
      </section>

      <section id="one" class="tiles">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array(1,2,3,4,5,6), 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
          <article>
            <span class="image">
              <img src="/x/assets/forty/images/pic0<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.jpg" alt="" />
            </span>
            <a href="<?php echo smarty_function_cms_selflink(array('page'=>'landing'),$_smarty_tpl);?>
">
              <h3>Tile <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</h3>
              <p>Opis kafelka <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</p>
            </a>
          </article>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

      </section>
    <?php }?>

    <div id="main"<?php if ($_smarty_tpl->tpl_vars['page_alias']->value != 'home') {?> class="alt"<?php }?>>
      <section class="wrapper">
        <div class="inner">
          <?php if ($_smarty_tpl->tpl_vars['page_alias']->value != 'home') {?>
            <header class="major">
              <h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
            </header>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['page_alias']->value == 'contact') {?>
            <?php echo smarty_function_cms_module(array('module'=>'FormBuilder','form'=>'contact_form'),$_smarty_tpl);?>

          <?php } else { ?>
            
          <?php }?>

        </div>
      </section>
    </div>

    <footer id="footer">
      <div class="inner">
        <ul class="icons">
          <li><a href="#" class="icon brands alt fa-twitter"><span>Twitter</span></a></li>
          <li><a href="#" class="icon brands alt fa-facebook-f"><span>Facebook</span></a></li>
          <li><a href="#" class="icon brands alt fa-instagram"><span>Instagram</span></a></li>
          <li><a href="#" class="icon brands alt fa-github"><span>GitHub</span></a></li>
          <li><a href="#" class="icon brands alt fa-linkedin-in"><span>LinkedIn</span></a></li>
        </ul>
        <ul class="copyright">
          <li>&copy; <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
        </ul>
      </div>
    </footer>

  </div>

  <?php echo '<script'; ?>
 src="/x/assets/forty/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/x/assets/forty/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/x/assets/forty/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/x/assets/forty/js/breakpoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/x/assets/forty/js/util.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/x/assets/forty/js/main.js"><?php echo '</script'; ?>
>
  <!--[if lte IE 8]><?php echo '<script'; ?>
 src="/x/assets/forty/js/ie/respond.min.js"><?php echo '</script'; ?>
><![endif]-->

</body>
</html><?php }
}
