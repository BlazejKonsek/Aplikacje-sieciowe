<?php
/* Smarty version 4.3.2, created on 2024-11-15 18:08:34
  from 'C:\xampp\htdocs\zad3\app\security\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67378012ab9c53_35268454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a82a2ed2761a5a69f5263a2b069635fe99191e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad3\\app\\security\\login_view.tpl',
      1 => 1731690269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67378012ab9c53_35268454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75685202367378012a5b1e9_00063660', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121462229567378012a5c753_61032035', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'title'} */
class Block_75685202367378012a5b1e9_00063660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_75685202367378012a5b1e9_00063660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Logowanie<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_121462229567378012a5c753_61032035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_121462229567378012a5c753_61032035',
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
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/app/security/login.php" class="container">
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

        <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
            <section class="box">
                <h3>Wystąpiły błędy:</h3>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
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
