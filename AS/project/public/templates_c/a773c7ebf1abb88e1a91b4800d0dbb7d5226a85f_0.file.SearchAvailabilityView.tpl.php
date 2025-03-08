<?php
/* Smarty version 4.5.5, created on 2025-01-11 14:51:28
  from 'C:\xampp\htdocs\project\app\views\SearchAvailabilityView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6782776007ce55_64814024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a773c7ebf1abb88e1a91b4800d0dbb7d5226a85f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\SearchAvailabilityView.tpl',
      1 => 1736603475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6782776007ce55_64814024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18505549146782776007a2a3_88076189', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_18505549146782776007a2a3_88076189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_18505549146782776007a2a3_88076189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Wyszukaj wolny stolik</h2>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
searchAvailability" method="get">
    <fieldset>
        <div class="pure-control-group">
            <label for="search_date">Data:</label>
            <input type="date" id="search_date" name="search_date" required />
        </div>

        <div class="pure-control-group">
            <label for="search_timeslot">Przedział godzinowy:</label>
            <select id="search_timeslot" name="search_timeslot" required>
                <option value="">-- wybierz --</option>
                <option value="12-13">12:00 - 13:00</option>
                <option value="13-14">13:00 - 14:00</option>
                <option value="14-15">14:00 - 15:00</option>
                <option value="15-16">15:00 - 16:00</option>
                <option value="16-17">16:00 - 17:00</option>
                <option value="17-18">17:00 - 18:00</option>
                <option value="18-19">18:00 - 19:00</option>
                <option value="19-20">19:00 - 20:00</option>
                <option value="20-21">20:00 - 21:00</option>
                <option value="21-22">21:00 - 22:00</option>
            </select>
        </div>

        <div class="pure-control-group">
            <label for="search_people">Liczba osób:</label>
            <select id="search_people" name="search_people" required>
                <option value="">-- wybierz --</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Szukaj</button>
        </div>
    </fieldset>
</form>
<?php
}
}
/* {/block 'top'} */
}
