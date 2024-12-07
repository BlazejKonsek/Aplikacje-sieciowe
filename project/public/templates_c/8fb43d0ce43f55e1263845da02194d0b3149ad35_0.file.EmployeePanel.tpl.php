<?php
/* Smarty version 3.1.33, created on 2024-12-07 18:11:58
  from 'C:\xampp\htdocs\project\app\views\templates\EmployeePanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675481de92e6f3_50991794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fb43d0ce43f55e1263845da02194d0b3149ad35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\templates\\EmployeePanel.tpl',
      1 => 1733591436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675481de92e6f3_50991794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_834440318675481de918e30_52263511', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_621808957675481de92df90_52024289', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_834440318675481de918e30_52263511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_834440318675481de918e30_52263511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Panel Pracownika</h2>
<p>Wybierz dzień, aby zobaczyć rezerwacje. Możesz filtrować je także po statusie.</p>

<form class="pure-form pure-form-aligned" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeePanel" method="get">
    <fieldset>
        <div class="pure-control-group">
            <label for="day">Wybierz dzień:</label>
            <input type="date" id="day" name="day" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['day']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
        </div>
        <div class="pure-control-group">
            <label for="status_filter">Status:</label>
            <select id="status_filter" name="status_filter">
                <option value="">Wszystkie</option>
                <option value="potwierdzona">Potwierdzone</option>
                <option value="anulowana">Anulowane</option>
                <option value="oczekujaca">Oczekujące na potwierdzenie</option>
            </select>
        </div>
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Pokaż rezerwacje</button>
        </div>
    </fieldset>
</form>

<?php if (count($_smarty_tpl->tpl_vars['reservations']->value) > 0) {?>
<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr>
            <th>Godzina</th>
            <th>Liczba osób</th>
            <th>Status</th>
            <th>Notatki</th>
            <th>Opcje</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservations']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['time'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['people_count'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['status'];?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['r']->value['notes'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
            <td>
                <!-- Przycisk do wyświetlenia szczegółów (np. w modalu) -->
                <button class="pure-button button-secondary" onclick="showDetails(<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
)">Szczegóły</button>

                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationStatusUpdate/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" method="post" style="display:inline-block;">
                    <select name="status">
                        <option value="potwierdzona">Potwierdzona</option>
                        <option value="anulowana">Anulowana</option>
                    </select>
                    <input type="text" name="notes" placeholder="Notatki" />
                    <button type="submit" class="pure-button pure-button-primary">Zmień</button>
                </form>
            </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php } else { ?>
<p>Brak rezerwacji dla wybranych kryteriów.</p>
<?php }?>

<!-- Modal ze szczegółami rezerwacji (tylko layout) -->
<div id="detailsModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="hideDetails()">&times;</span>
        <h3>Szczegóły rezerwacji</h3>
        <!-- Szczegółowe informacje o rezerwacji np. Imię, Nazwisko, Telefon kontaktowy -->
        <p><strong>Rezerwujący:</strong> Jan Kowalski</p>
        <p><strong>Kontakt:</strong> 123-456-789</p>
        <p><strong>Dodatkowe informacje:</strong> Klient prosi o stolik przy oknie.</p>
    </div>
</div>

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_621808957675481de92df90_52024289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_621808957675481de92df90_52024289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Prosty JavaScript do obsługi modala (tylko przykładowy) -->
<?php echo '<script'; ?>
>
function showDetails(id) {
    // W przyszłości AJAX po szczegóły rezerwacji.
    document.getElementById('detailsModal').style.display = 'block';
}
function hideDetails() {
    document.getElementById('detailsModal').style.display = 'none';
}
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'bottom'} */
}
