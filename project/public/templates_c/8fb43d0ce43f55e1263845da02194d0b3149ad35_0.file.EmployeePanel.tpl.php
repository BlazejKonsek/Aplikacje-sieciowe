<?php
/* Smarty version 4.5.5, created on 2025-01-11 17:41:47
  from 'C:\xampp\htdocs\project\app\views\templates\EmployeePanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67829f4bda3f41_35010026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fb43d0ce43f55e1263845da02194d0b3149ad35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\templates\\EmployeePanel.tpl',
      1 => 1736613130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67829f4bda3f41_35010026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7684140567829f4bd943c1_22360193', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_7684140567829f4bd943c1_22360193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_7684140567829f4bd943c1_22360193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\project\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<h2>Panel Pracownika</h2>
<p>Wybierz dzień, aby zobaczyć rezerwacje. Możesz filtrować je także po statusie.</p>

<form class="pure-form pure-form-aligned" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeePanel" method="get">
    <fieldset>
        <div class="pure-control-group">
            <label for="day">Wybierz dzień:</label>
            <input type="date" id="day" name="day" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['day']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
        </div>
        <div class="pure-control-group">
            <label for="status_filter">Status:</label>
            <select id="status_filter" name="status_filter">
                <option value="">Wszystkie</option>
                <option value="potwierdzona">Potwierdzone</option>
                <option value="anulowana">Anulowane</option>
                <option value="oczekujaca">Oczekujące</option>
            </select>
        </div>
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Pokaż rezerwacje</button>
        </div>
    </fieldset>
</form>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['reservations']->value) > 0) {?>
<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr>
            <th>Data</th>
            <th>Godzina</th>
            <th>Liczba osób</th>
            <th>Status</th>
            <th>Notatki</th>
            <th>Stolik</th>               <th>Opcje</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservations']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['reservationDate'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['reservationTime'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['numberOfPeople'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['statusName'];?>
</td>
            <td>
            </td>
            <td>
                <?php if ((isset($_smarty_tpl->tpl_vars['r']->value['idTable'])) && $_smarty_tpl->tpl_vars['r']->value['idTable']) {?>
                    Stolik #<?php echo $_smarty_tpl->tpl_vars['r']->value['idTable'];?>

                <?php } else { ?>
                    <select name="table_id" form="resForm_<?php echo $_smarty_tpl->tpl_vars['r']->value['idReservation'];?>
">
                        <option value="">(bez zmiany)</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tables']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['t']->value['maxCapacity'] >= $_smarty_tpl->tpl_vars['r']->value['numberOfPeople']) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['idTable'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['tableName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['t']->value['maxCapacity'];?>
 os.)</option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php }?>
            </td>
            <td>
                <form id="resForm_<?php echo $_smarty_tpl->tpl_vars['r']->value['idReservation'];?>
" 
                      action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationStatusUpdate/<?php echo $_smarty_tpl->tpl_vars['r']->value['idReservation'];?>
" 
                      method="post" class="pure-form"
                      style="display:inline-block;">

                    <select name="status">
                        <option value="2">Potwierdzona</option>
                        <option value="3">Anulowana</option>
                    </select>

                    <input type="text" name="notes" placeholder="Notatka" />

        

                    <button type="submit" class="pure-button pure-button-primary">Zmień</button>
                </form>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php } else { ?>
<p>Brak rezerwacji dla wybranych kryteriów.</p>
<?php }
}
}
/* {/block 'top'} */
}
