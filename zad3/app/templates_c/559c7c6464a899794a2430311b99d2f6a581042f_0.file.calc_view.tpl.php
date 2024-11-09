<?php
/* Smarty version 4.3.2, created on 2024-11-09 21:52:02
  from 'C:\xampp\htdocs\php_02_ochrona_dostepu\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_672fcb72ad8163_29411931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '559c7c6464a899794a2430311b99d2f6a581042f' => 
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
function content_672fcb72ad8163_29411931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203980923672fcb7278fda6_42932070', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_851428590672fcb72795f41_04161212', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'title'} */
class Block_203980923672fcb7278fda6_42932070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_203980923672fcb7278fda6_42932070',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator Kredytu<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_851428590672fcb72795f41_04161212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_851428590672fcb72795f41_04161212',
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
