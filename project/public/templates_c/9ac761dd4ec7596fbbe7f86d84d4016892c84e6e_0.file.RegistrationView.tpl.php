<?php
/* Smarty version 4.5.5, created on 2025-01-11 15:29:57
  from 'C:\xampp\htdocs\project\app\views\RegistrationView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67828065f1e534_06385367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ac761dd4ec7596fbbe7f86d84d4016892c84e6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\RegistrationView.tpl',
      1 => 1736597197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67828065f1e534_06385367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46706301367828065f1a4a6_50636373', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_46706301367828065f1a4a6_50636373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_46706301367828065f1a4a6_50636373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Rejestracja nowego użytkownika</h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registration" method="post" class="pure-form pure-form-aligned">
    <fieldset>

        <div class="pure-control-group">
            <label for="id_login">Login:</label>
            <input type="text" id="id_login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" required/>
        </div>

        <div class="pure-control-group">
            <label for="id_pass">Hasło:</label>
            <input type="password" id="id_pass" name="pass" required />
        </div>

        <div class="pure-control-group">
            <label for="id_pass_repeat">Powtórz hasło:</label>
            <input type="password" id="id_pass_repeat" name="pass_repeat" required />
        </div>

        <div class="pure-control-group">
            <label for="id_email">E-mail:</label>
            <input type="email" id="id_email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
"/>
        </div>

        <div class="pure-control-group">
            <label for="id_fname">Imię:</label>
            <input type="text" id="id_fname" name="firstName" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->firstName;?>
"/>
        </div>

        <div class="pure-control-group">
            <label for="id_lname">Nazwisko:</label>
            <input type="text" id="id_lname" name="lastName" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lastName;?>
"/>
        </div>

        <div class="pure-control-group">
            <label for="id_phone">Telefon:</label>
            <input type="text" id="id_phone" name="phoneNumber" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phoneNumber;?>
"/>
        </div>

        <div class="pure-control-group">
            <label for="id_address">Adres:</label>
            <input type="text" id="id_address" name="address" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->address;?>
"/>
        </div>

        <div class="pure-controls">
            <input type="submit" value="Zarejestruj" class="pure-button pure-button-primary" />
        </div>
    </fieldset>
</form>
<?php
}
}
/* {/block 'top'} */
}
