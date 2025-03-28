<?php
/* Smarty version 4.5.5, created on 2025-01-11 14:12:14
  from 'C:\xampp\htdocs\project\app\views\SearchAvailability.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67826e2ea59768_71787380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c63793acf5351c7f881ab3e81cf77ef7b909451' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\SearchAvailability.tpl',
      1 => 1736600819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67826e2ea59768_71787380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150966513767826e2e9f9c05_03899280', "top");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block "top"} */
class Block_150966513767826e2e9f9c05_03899280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_150966513767826e2e9f9c05_03899280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\project\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<h2>Wyszukaj wolne terminy</h2>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
searchAvailability" method="GET">
    <fieldset>
        <div class="pure-g">
            <!-- Data -->
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="search_date">Dzień:</label>
                <input type="date" id="search_date" name="search_date" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['search_date']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required/>
            </div>
            
            <!-- Przedział godzinowy, np. 12-13, 13-14, ... 
                 Możemy dać dwie listy "od"/"do" albo uprościć i dać pojedynczy select. -->
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="time_range">Godziny:</label>
                <select id="time_range" name="time_range" required>
                    <option value="">-- wybierz --</option>
                    <option value="12-13" <?php if ($_smarty_tpl->tpl_vars['time_range']->value == "12-13") {?>selected<?php }?>>12:00 - 13:00</option>
                    <option value="13-14" <?php if ($_smarty_tpl->tpl_vars['time_range']->value == "13-14") {?>selected<?php }?>>13:00 - 14:00</option>
                    <option value="14-15" <?php if ($_smarty_tpl->tpl_vars['time_range']->value == "14-15") {?>selected<?php }?>>14:00 - 15:00</option>
                    <!-- itd. aż do 21-22 -->
                </select>
            </div>
            
            <!-- Typ stolika (2,4,6,8) -->
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="table_capacity">Ilu osobowy stolik:</label>
                <select id="table_capacity" name="table_capacity" required>
                    <option value="">-- wybierz --</option>
                    <option value="2"  <?php if ($_smarty_tpl->tpl_vars['table_capacity']->value == "2") {?>selected<?php }?>>2-osobowy</option>
                    <option value="4"  <?php if ($_smarty_tpl->tpl_vars['table_capacity']->value == "4") {?>selected<?php }?>>4-osobowy</option>
                    <option value="6"  <?php if ($_smarty_tpl->tpl_vars['table_capacity']->value == "6") {?>selected<?php }?>>6-osobowy</option>
                    <option value="8"  <?php if ($_smarty_tpl->tpl_vars['table_capacity']->value == "8") {?>selected<?php }?>>8-osobowy</option>
                </select>
            </div>
        </div>
        
        <div class="top-margin">
            <button type="submit" class="pure-button pure-button-primary">Szukaj</button>
        </div>
    </fieldset>
</form>

<!-- Tutaj wyświetlenie wyników -->
<?php if ((isset($_smarty_tpl->tpl_vars['available']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['available']->value) > 0) {?>
<h3>Wyniki wyszukiwania</h3>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Godzina</th>
            <th>Dostępna liczba stolików (dla <?php echo $_smarty_tpl->tpl_vars['table_capacity']->value;?>
 os.)</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['hourRange'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['freeTables'];?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php }
}
}
/* {/block "top"} */
}
