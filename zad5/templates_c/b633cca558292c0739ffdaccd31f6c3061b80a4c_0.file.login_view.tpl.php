<?php
/* Smarty version 4.3.2, created on 2024-11-27 17:56:43
  from 'C:\xampp\htdocs\zad5\templates\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67474f4b54d234_94874920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b633cca558292c0739ffdaccd31f6c3061b80a4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad5\\templates\\login_view.tpl',
      1 => 1732726589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67474f4b54d234_94874920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199543085967474f4b527616_49658251', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118375839767474f4b529610_15986353', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'title'} */
class Block_199543085967474f4b527616_49658251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_199543085967474f4b527616_49658251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Logowanie<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_118375839767474f4b529610_15986353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_118375839767474f4b529610_15986353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="banner">
    <h2>Logowanie</h2>
    <p>Uzyskaj dostęp do kalkulatora</p>
</section>

<section class="wrapper style1 special">
    <div class="inner">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="container">
            <div class="row gtr-uniform gtr-50">
                <div class="col-12 col-12-mobilep">
                    <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
" placeholder="Login" />
                </div>
                <div class="col-12 col-12-mobilep">
                    <input type="password" name="pass" id="pass" placeholder="Hasło" />
                </div>
                <div class="col-12">
                    <ul class="actions special">
                        <li><input type="submit" value="Zaloguj" class="button primary" /></li>
                    </ul>
                </div>
            </div>
        </form>

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <section class="box">
                <h3>Wystąpiły błędy:</h3>
                <ul>
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
                </ul>
            </section>
        <?php }?>
    </div>
</section>
<?php
}
}
/* {/block 'content'} */
}