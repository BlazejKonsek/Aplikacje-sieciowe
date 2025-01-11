<?php
/* Smarty version 4.5.5, created on 2025-01-11 15:29:54
  from 'C:\xampp\htdocs\project\app\views\UserCreateForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67828062187037_55569676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6a7c3758bcafca148b805abbd1c43b099553be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\UserCreateForm.tpl',
      1 => 1736592405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67828062187037_55569676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20246940246782806217b699_00009143', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_20246940246782806217b699_00009143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_20246940246782806217b699_00009143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Dodaj nowego użytkownika</h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
createUser" method="post" class="pure-form pure-form-stacked">

    <fieldset>
        <div class="pure-control-group">
            <label for="id_login">Login:</label>
            <input id="id_login" type="text" name="login" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['userForm']->value->login ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"/>
        </div>

        <div class="pure-control-group">
            <label for="id_pass">Hasło:</label>
            <input id="id_pass" type="password" name="pass"/>
        </div>

        <div class="pure-control-group">
            <label for="id_pass_repeat">Powtórz hasło:</label>
            <input id="id_pass_repeat" type="password" name="pass_repeat"/>
        </div>

        <div class="pure-control-group">
            <label for="id_email">E-mail:</label>
            <input id="id_email" type="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['userForm']->value->email ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"/>
        </div>

        <div class="pure-control-group">
            <label for="id_firstName">Imię:</label>
            <input id="id_firstName" type="text" name="firstName" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['userForm']->value->firstName ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"/>
        </div>

        <div class="pure-control-group">
            <label for="id_lastName">Nazwisko:</label>
            <input id="id_lastName" type="text" name="lastName" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['userForm']->value->lastName ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"/>
        </div>

        <div class="pure-control-group">
            <label for="id_phoneNumber">Telefon:</label>
            <input id="id_phoneNumber" type="text" name="phoneNumber" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['userForm']->value->phoneNumber ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"/>
        </div>

        <div class="pure-control-group">
            <label for="id_address">Adres:</label>
            <input id="id_address" type="text" name="address" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['userForm']->value->address ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"/>
        </div>

        <!-- Wybór roli -->
        <div class="pure-control-group">
            <label for="id_role">Rola:</label>
            <select name="role" id="id_role">
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
            </select>
        </div>

        <div class="pure-controls top-margin">
            <button type="submit" class="pure-button pure-button-primary">Zapisz</button>
        </div>
    </fieldset>
</form>
<?php
}
}
/* {/block 'top'} */
}
