<?php
/* Smarty version 3.1.33, created on 2024-12-07 18:00:36
  from 'C:\xampp\htdocs\project\app\views\ReservationList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_67547f3477d9a2_52028465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bd6344ac787dd5448ba88a2e28eb531082e9dc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\ReservationList.tpl',
      1 => 1733590760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67547f3477d9a2_52028465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213612269367547f3475f532_38457364', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_213612269367547f3475f532_38457364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_213612269367547f3475f532_38457364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Twoje Rezerwacje</h2>
<p>Przeglądaj i filtruj swoje rezerwacje. W przyszłości można dodać filtrowanie np. po statusie, dacie itp.</p>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationList" method="get">
    <fieldset>
        <label for="sf_status">Status:</label>
        <input type="text" name="sf_status" placeholder="np. potwierdzona" />
        <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
    </fieldset>
</form>

<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr><th>Data</th><th>Godzina</th><th>Liczba osób</th><th>Status</th></tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservations']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['date'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['time'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['people_count'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['status'];?>
</td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php
}
}
/* {/block 'top'} */
}
