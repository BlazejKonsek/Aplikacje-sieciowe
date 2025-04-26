<?php
/* Smarty version 4.5.5, created on 2025-04-26 09:34:56
  from 'C:\xampp\htdocs\project\app\views\SearchAvailabilityResultsPartial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_680c8ca000c069_34736477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c32e288cb52e1bcde0428be7e7b465abaf153c33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\SearchAvailabilityResultsPartial.tpl',
      1 => 1745652633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680c8ca000c069_34736477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\project\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<p>Data: <?php echo $_smarty_tpl->tpl_vars['searchDate']->value;?>
</p>
<p>Przedział godzinowy: <?php echo $_smarty_tpl->tpl_vars['searchTimeSlot']->value;?>
</p>
<p>Liczba osób: <?php echo $_smarty_tpl->tpl_vars['searchPeople']->value;?>
</p>

<table class="pure-table pure-table-bordered top-margin">
  <thead>
    <tr>
      <th>Stolik</th>
      <th>Maks. liczba osób</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['results']->value) > 0) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['r']->value['tableName'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['r']->value['capacity'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['r']->value['status'];?>
</td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
      <tr><td colspan="3">Brak wyników.</td></tr>
    <?php }?>
  </tbody>
</table>
<?php }
}
