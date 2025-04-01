<?php
/* Smarty version 4.5.5, created on 2025-04-01 08:26:25
  from 'C:\xampp\htdocs\project\app\views\ReservationList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67eb8711a66b94_99603105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bd6344ac787dd5448ba88a2e28eb531082e9dc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\ReservationList.tpl',
      1 => 1743488784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67eb8711a66b94_99603105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152916803767eb8711a53fc8_80733080', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_152916803767eb8711a53fc8_80733080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_152916803767eb8711a53fc8_80733080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Twoje Rezerwacje</h2>
<p>Przeglądaj i filtruj swoje rezerwacje.</p>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationList" method="get">
    <fieldset>
        <label for="sf_status">Status:</label>
        <select id="sf_status" name="sf_status">
            <option value="">(Wszystkie)</option>
            <option value="Oczekująca"   <?php if ($_smarty_tpl->tpl_vars['sf_status']->value == 'Oczekująca') {?>selected<?php }?>>Oczekująca</option>
            <option value="Potwierdzona" <?php if ($_smarty_tpl->tpl_vars['sf_status']->value == 'Potwierdzona') {?>selected<?php }?>>Potwierdzona</option>
            <option value="Anulowana"    <?php if ($_smarty_tpl->tpl_vars['sf_status']->value == 'Anulowana') {?>selected<?php }?>>Anulowana</option>
        </select>
        <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
    </fieldset>
</form>

<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr>
            <th>Data</th>
            <th>Godzina</th>
            <th>Liczba osób</th>
            <th>Status</th>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php if ((isset($_smarty_tpl->tpl_vars['current_page']->value)) && (isset($_smarty_tpl->tpl_vars['total_pages']->value)) && $_smarty_tpl->tpl_vars['total_pages']->value > 1) {?>
    <ul class="pure-menu-list top-margin">
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
        <li class="pure-menu-item">
            <a class="pure-menu-link" 
               href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationList?sf_status=<?php echo (($tmp = $_smarty_tpl->tpl_vars['sf_status']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
&page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
">
               &laquo; Poprzednia
            </a>
        </li>
        <?php } else { ?>
        <li class="pure-menu-item pure-menu-disabled">
            <span class="pure-menu-link">&laquo; Poprzednia</span>
        </li>
        <?php }?>

        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['current_page']->value) {?>
                <li class="pure-menu-item pure-menu-selected">
                    <span class="pure-menu-link"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                </li>
            <?php } else { ?>
                <li class="pure-menu-item">
                    <a class="pure-menu-link"
                       href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationList?sf_status=<?php echo (($tmp = $_smarty_tpl->tpl_vars['sf_status']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                       <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                    </a>
                </li>
            <?php }?>
        <?php }
}
?>

        <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
        <li class="pure-menu-item">
            <a class="pure-menu-link"
               href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationList?sf_status=<?php echo (($tmp = $_smarty_tpl->tpl_vars['sf_status']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
&page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">
               Następna &raquo;
            </a>
        </li>
        <?php } else { ?>
        <li class="pure-menu-item pure-menu-disabled">
            <span class="pure-menu-link">Następna &raquo;</span>
        </li>
        <?php }?>
    </ul>
<?php }?>

<?php
}
}
/* {/block 'top'} */
}
