<?php
/* Smarty version 4.3.2, created on 2024-11-27 16:42:11
  from 'C:\xampp\htdocs\zad4\templates\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67473dd30188e4_05538787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f683b24ae18a447a8c5e95f4de97ef76ee53b4b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad4\\templates\\calc_view.tpl',
      1 => 1732721785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67473dd30188e4_05538787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69972731067473dd2f41b81_47445791', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13674318667473dd3005b47_87361476', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'title'} */
class Block_69972731067473dd2f41b81_47445791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_69972731067473dd2f41b81_47445791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['page_title']->value;
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_13674318667473dd3005b47_87361476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13674318667473dd3005b47_87361476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="banner">
    <h2>Kalkulator Kredytu</h2>
    <p>Oblicz ratę kredytu szybko i łatwo</p>
</section>

<section class="wrapper style1 special">
    <div class="inner">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" class="container">
            <div class="row gtr-uniform gtr-50">
                <div class="col-12 col-12-mobilep">
                    <input type="text" name="kwota" id="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" placeholder="Kwota kredytu" />
                </div>
                <div class="col-12 col-12-mobilep">
                    <input type="text" name="lata" id="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
" placeholder="Liczba lat" />
                </div>
                <div class="col-12 col-12-mobilep">
                    <input type="text" name="oprocentowanie" id="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" placeholder="Oprocentowanie (%)" />
                </div>
                <div class="col-12">
                    <ul class="actions special">
                        <li><input type="submit" value="Oblicz" class="button primary" /></li>
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

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
            <section class="box">
                <h3>Informacje:</h3>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </section>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
            <section class="box">
                <h3>Wynik</h3>
                <p>Miesięczna rata kredytu wynosi: <strong><?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
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
