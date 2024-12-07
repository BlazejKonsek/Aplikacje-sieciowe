<?php
/* Smarty version 3.1.33, created on 2024-12-07 18:11:23
  from 'C:\xampp\htdocs\project\app\views\templates\AdminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675481bb90ba39_97805391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e08756c75f22f5458781ce5fd9bb7356e581ea4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\templates\\AdminPanel.tpl',
      1 => 1733591448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675481bb90ba39_97805391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1456167295675481bb8d7219_13858413', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1456167295675481bb8d7219_13858413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1456167295675481bb8d7219_13858413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Panel Administratora</h2>
<p>Zarządzaj użytkownikami, ich rolami oraz resetuj hasła. Możesz także dodawać i wyłączać role w systemie.</p>

<h3>Użytkownicy</h3>
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminPanel" method="get">
    <fieldset>
        <label for="user_filter">Filtruj po loginie:</label>
        <input type="text" id="user_filter" name="user_filter" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_filter']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="np. admin"/>
        <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
    </fieldset>
</form>

<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr><th>Login</th><th>Rola</th><th>Opcje</th></tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['u']->value['login'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['u']->value['role'];?>
</td>
            <td>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageRoles/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" method="post" style="display:inline;">
                    <select name="new_role">
                        <option value="user">User</option>
                        <option value="employee">Employee</option>
                        <option value="admin">Admin</option>
                    </select>
                    <button type="submit" class="pure-button pure-button-secondary">Zmień rolę</button>
                </form>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
resetPassword/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" method="post" style="display:inline;">
                    <button type="submit" class="pure-button button-error">Reset hasła</button>
                </form>
            </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php if (count($_smarty_tpl->tpl_vars['users']->value) == 0) {?>
<p>Brak użytkowników spełniających kryteria.</p>
<?php }?>

<hr class="top-margin bottom-margin">

<h3>Zarządzanie rolami w systemie</h3>
<p>Dodaj nową rolę lub wyłącz istniejącą.</p>

<!-- Formularz dodawania nowej roli -->
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

<!-- Lista istniejących ról do wyłączenia/włączenia -->
<h4>Istniejące role</h4>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr><th>Rola</th><th>Status</th><th>Opcje</th></tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['r']->value['active']) {?>Aktywna<?php } else { ?>Wyłączona<?php }?></td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['r']->value['active']) {?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
disableRole/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" method="post" style="display:inline;">
                        <button type="submit" class="pure-button button-warning">Wyłącz</button>
                    </form>
                <?php } else { ?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
enableRole/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" method="post" style="display:inline;">
                        <button type="submit" class="pure-button button-success">Włącz</button>
                    </form>
                <?php }?>
            </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php
}
}
/* {/block 'top'} */
}
