<?php
/* Smarty version 4.3.2, created on 2024-11-09 21:28:07
  from 'C:\xampp\htdocs\php_02_ochrona_dostepu\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_672fc5d75077a2_86867648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18f1fc76a9ec744799bf4ad7656e9a9371b4b156' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_02_ochrona_dostepu\\app\\calc_view.tpl',
      1 => 1731183883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672fc5d75077a2_86867648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1753591103672fc5d74d1684_51785915', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_463591662672fc5d74d28c7_32997213', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'title'} */
class Block_1753591103672fc5d74d1684_51785915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1753591103672fc5d74d1684_51785915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator Kredytu<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_463591662672fc5d74d28c7_32997213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_463591662672fc5d74d28c7_32997213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Banner -->
    <section id="banner">
        <h2>Kalkulator Kredytu</h2>
        <p>Oblicz ratę kredytu szybko i łatwo</p>
    </section>

    <!-- Form -->
    <section class="wrapper style1 special">
        <div class="inner">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" class="container">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-12 col-12-mobilep">
                        <input type="text" name="kwota" id="kwota" value="<?php echo $_smarty_tpl->tpl_vars['kwota']->value;?>
" placeholder="Kwota kredytu" />
                    </div>
                    <div class="col-12 col-12-mobilep">
                        <input type="text" name="lata" id="lata" value="<?php echo $_smarty_tpl->tpl_vars['lata']->value;?>
" placeholder="Okres spłaty (lata)" />
                    </div>
                    <div class="col-12 col-12-mobilep">
                        <input type="text" name="oprocentowanie" id="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['oprocentowanie']->value;?>
" placeholder="Oprocentowanie (%)" />
                    </div>
                    <div class="col-12">
                        <ul class="actions special">
                            <li><input type="submit" value="Oblicz" class="button primary" /></li>
                        </ul>
                    </div>
                </div>
            </form>

            <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value)) && count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
                <section class="box">
                    <h3>Wystąpiły błędy:</h3>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
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

            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                <section class="box">
                    <h3>Wynik</h3>
                    <p>Miesięczna rata kredytu wynosi: <strong><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł</strong></p>
                </section>
            <?php }?>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
