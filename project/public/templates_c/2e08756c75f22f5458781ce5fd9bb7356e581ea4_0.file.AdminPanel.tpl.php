<?php
/* Smarty version 4.5.5, created on 2025-01-11 17:38:33
  from 'C:\xampp\htdocs\project\app\views\templates\AdminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67829e899fc7b5_47608252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e08756c75f22f5458781ce5fd9bb7356e581ea4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\templates\\AdminPanel.tpl',
      1 => 1736613162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67829e899fc7b5_47608252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60951953867829e899e8535_74024369', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_60951953867829e899e8535_74024369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_60951953867829e899e8535_74024369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\project\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>


<h2>Panel Administratora</h2>
<p>Zarządzaj użytkownikami, ich rolami oraz resetuj hasła.</p>

<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
createUserShow" class="pure-button pure-button-primary">Dodaj nowego użytkownika</a>

<hr class="top-margin bottom-margin">

<h3>Użytkownicy</h3>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminPanel" method="get">
    <fieldset>
        <label for="user_filter_login">Filtruj po loginie:</label>
        <input type="text" id="user_filter_login" name="user_filter_login" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['user_filter_login']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="np. admin"/>

        <label for="user_filter_role">Filtruj po roli:</label>
        <select name="user_filter_role" id="user_filter_role">
            <option value="">-- Wszystkie --</option>
            <?php if ((isset($_smarty_tpl->tpl_vars['allRoles']->value))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allRoles']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['idRole'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['idRole'] == $_smarty_tpl->tpl_vars['user_filter_role']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['roleName'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>

        <button type="submit" class="pure-button pure-button-primary top-margin">Szukaj</button>
    </fieldset>
</form>

<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr><th>ID</th><th>Login</th><th>Rola</th><th>Opcje</th></tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['u']->value['login'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['u']->value['roleName']) {
echo $_smarty_tpl->tpl_vars['u']->value['roleName'];
} else { ?>brak<?php }?></td>
            <td>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageRoles/<?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
" method="post" style="display:inline;">
                    <select name="new_role">
                        <?php if ((isset($_smarty_tpl->tpl_vars['allRoles']->value))) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allRoles']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['idRole'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['roleName'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </select>
                    <button type="submit" class="pure-button pure-button-secondary">Zmień rolę</button>
                </form>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
resetPassword/<?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
" method="post" style="display:inline;">
    <button type="submit" class="pure-button button-error">Reset hasła</button>
</form>

            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['users']->value) == 0) {?>
<p>Brak użytkowników spełniających kryteria.</p>
<?php }?>

<hr class="top-margin bottom-margin">

<h3>Zarządzanie rolami w systemie</h3>
<p>Dodaj nową rolę lub wyłącz istniejącą.</p>

<form class="pure-form pure-form-aligned" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addRole" method="post">
    <fieldset>
        <div class="pure-control-group">
            <label for="role_name">Nazwa nowej roli:</label>
            <input type="text" id="role_name" name="role_name" placeholder="np. manager"/>
        </div>
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Dodaj rolę</button>
        </div>
    </fieldset>
</form>

<h4>Istniejące role</h4>
<?php if ((isset($_smarty_tpl->tpl_vars['allRoles']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['allRoles']->value) > 0) {?>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr><th>ID</th><th>Rola</th><th>Status</th><th>Opcje</th></tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allRoles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['role']->value['idRole'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['role']->value['roleName'];?>
</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['role']->value['isActive'] == 1) {?>Aktywna<?php } else { ?>Wyłączona<?php }?>
            </td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['role']->value['isActive'] == 1) {?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
disableRole/<?php echo $_smarty_tpl->tpl_vars['role']->value['idRole'];?>
" method="post" style="display:inline;">
                        <button type="submit" class="pure-button button-warning">Wyłącz</button>
                    </form>
                <?php } else { ?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
enableRole/<?php echo $_smarty_tpl->tpl_vars['role']->value['idRole'];?>
" method="post" style="display:inline;">
                        <button type="submit" class="pure-button button-success">Włącz</button>
                    </form>
                <?php }?>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php } else { ?>
<p>Brak ról w systemie.</p>
<?php }?>

<?php
}
}
/* {/block 'top'} */
}
