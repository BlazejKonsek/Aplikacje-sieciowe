<?php
/* Smarty version 4.5.5, created on 2025-01-11 14:54:37
  from 'C:\xampp\htdocs\project\app\views\SearchAvailabilityResults.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6782781d73ef00_70819921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59e0100ac00c86d2fd5f0d95fff0010a008e17ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\SearchAvailabilityResults.tpl',
      1 => 1736603666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6782781d73ef00_70819921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20932511056782781d732ec8_55428315', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_20932511056782781d732ec8_55428315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_20932511056782781d732ec8_55428315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\project\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<h2>Wyniki wyszukiwania wolnych stolików</h2>

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
    <?php if ((isset($_smarty_tpl->tpl_vars['results']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['results']->value) > 0) {?>
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
<?php
}
}
/* {/block 'top'} */
}
