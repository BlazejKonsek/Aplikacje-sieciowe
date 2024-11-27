<?php
/* Smarty version 4.3.2, created on 2024-11-27 16:26:59
  from 'C:\xampp\htdocs\zad4\app\security\login_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67473a433b4147_66337980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b6ba6b4ba0bf16dd1fbb96144b06971228fd3b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad4\\app\\security\\login_view.html',
      1 => 1732720151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67473a433b4147_66337980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109849140767473a4339ef63_49879214', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content'} */
class Block_109849140767473a4339ef63_49879214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_109849140767473a4339ef63_49879214',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="banner">
    <h2>Logowanie</h2>
    <p>Uzyskaj dostęp do kalkulatora</p>
</section>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-1-2">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/login.php" method="post">
            <fieldset>

                <label for="login">Login</label>
                <input id="login" type="text" placeholder="Login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
">

                <label for="pass">Hasło</label>
                <input id="pass" type="password" placeholder="Hasło" name="pass">

                <button type="submit" class="pure-button pure-button-primary">Zaloguj</button>
            </fieldset>
        </form>
    </div>

    <div class="l-box-lrg pure-u-1 pure-u-med-1-2">
        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
        <h4>Wystąpiły błędy:</h4>
        <ol class="err">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
    <?php }?>
    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
