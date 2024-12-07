<?php
/* Smarty version 3.1.33, created on 2024-12-07 18:00:41
  from 'C:\xampp\htdocs\project\app\views\ReservationView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_67547f390c97a0_82143549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a4c3a22f1edbf02860909653862d13ec32bf334' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\ReservationView.tpl',
      1 => 1733587856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67547f390c97a0_82143549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101947266867547f390c3943_64453237', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_101947266867547f390c3943_64453237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_101947266867547f390c3943_64453237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationSave" method="post" class="pure-form pure-form-aligned">
    <legend>Nowa Rezerwacja</legend>
    <fieldset>
        <div class="pure-control-group">
            <label for="id_date">Data:</label>
            <input type="date" id="id_date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->date;?>
" />
        </div>
        <div class="pure-control-group">
            <label for="id_time">Godzina:</label>
            <input type="time" id="id_time" name="time" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->time;?>
" />
        </div>
        <div class="pure-control-group">
            <label for="id_people_count">Liczba osób:</label>
            <input type="number" id="id_people_count" name="people_count" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->people_count;?>
" min="1" />
        </div>
        <div class="pure-controls">
            <input type="submit" value="Zarezerwuj" class="pure-button pure-button-primary"/>
        </div>
    </fieldset>
</form>
<?php
}
}
/* {/block 'top'} */
}
