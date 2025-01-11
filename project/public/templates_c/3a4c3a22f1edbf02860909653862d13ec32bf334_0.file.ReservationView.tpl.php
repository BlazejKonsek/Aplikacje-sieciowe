<?php
/* Smarty version 4.5.5, created on 2025-01-11 17:38:27
  from 'C:\xampp\htdocs\project\app\views\ReservationView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67829e836ac503_13764491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a4c3a22f1edbf02860909653862d13ec32bf334' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\ReservationView.tpl',
      1 => 1736613034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67829e836ac503_13764491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36592248467829e8369a6e6_23878086', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_36592248467829e8369a6e6_23878086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_36592248467829e8369a6e6_23878086',
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
            <input type="date" id="id_date" name="date" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->date ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required />
        </div>

        <div class="pure-control-group">
            <label for="id_timeslot">Przedział godzinowy:</label>
            <select id="id_timeslot" name="timeslot" required>
                <option value="">-- wybierz --</option>
                <option value="12-13" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->timeslot)) && $_smarty_tpl->tpl_vars['form']->value->timeslot == '12-13') {?>selected<?php }?>>12:00 - 13:00</option>
                <option value="13-14" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->timeslot)) && $_smarty_tpl->tpl_vars['form']->value->timeslot == '13-14') {?>selected<?php }?>>13:00 - 14:00</option>
                <option value="14-15" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->timeslot)) && $_smarty_tpl->tpl_vars['form']->value->timeslot == '14-15') {?>selected<?php }?>>14:00 - 15:00</option>
                <option value="15-16" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->timeslot)) && $_smarty_tpl->tpl_vars['form']->value->timeslot == '15-16') {?>selected<?php }?>>15:00 - 16:00</option>
                <option value="16-17" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->timeslot)) && $_smarty_tpl->tpl_vars['form']->value->timeslot == '16-17') {?>selected<?php }?>>16:00 - 17:00</option>
                <option value="17-18" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->timeslot)) && $_smarty_tpl->tpl_vars['form']->value->timeslot == '17-18') {?>selected<?php }?>>17:00 - 18:00</option>
                <option value="18-19" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->timeslot)) && $_smarty_tpl->tpl_vars['form']->value->timeslot == '18-19') {?>selected<?php }?>>18:00 - 19:00</option>
                <option value="19-20" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->timeslot)) && $_smarty_tpl->tpl_vars['form']->value->timeslot == '19-20') {?>selected<?php }?>>19:00 - 20:00</option>
                <option value="20-21" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->timeslot)) && $_smarty_tpl->tpl_vars['form']->value->timeslot == '20-21') {?>selected<?php }?>>20:00 - 21:00</option>
                <option value="21-22" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->timeslot)) && $_smarty_tpl->tpl_vars['form']->value->timeslot == '21-22') {?>selected<?php }?>>21:00 - 22:00</option>
            </select>
        </div>

        <div class="pure-control-group">
            <label for="id_people_count">Ilu osobowy stolik?</label>
            <select id="id_people_count" name="people_count" required>
                <option value="">-- wybierz --</option>
                <option value="2"  <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->people_count)) && $_smarty_tpl->tpl_vars['form']->value->people_count == 2) {?>selected<?php }?>>2</option>
                <option value="4"  <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->people_count)) && $_smarty_tpl->tpl_vars['form']->value->people_count == 4) {?>selected<?php }?>>4</option>
                <option value="6"  <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->people_count)) && $_smarty_tpl->tpl_vars['form']->value->people_count == 6) {?>selected<?php }?>>6</option>
                <option value="8"  <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->people_count)) && $_smarty_tpl->tpl_vars['form']->value->people_count == 8) {?>selected<?php }?>>8</option>
            </select>
        </div>

        <div class="pure-control-group">
            <label for="id_note">Notatka:</label>
            <textarea id="id_note" name="noteText" rows="3"><?php if ((isset($_smarty_tpl->tpl_vars['form']->value->noteText))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['form']->value->noteText, ENT_QUOTES, 'UTF-8', true);
}?></textarea>
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Zarezerwuj</button>
        </div>
    </fieldset>
</form>
<?php
}
}
/* {/block 'top'} */
}
