<?php
/* Smarty version 3.1.33, created on 2024-12-07 17:13:34
  from 'C:\xampp\htdocs\project\app\views\RegistrationView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6754742ee7b535_40793633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ac761dd4ec7596fbbe7f86d84d4016892c84e6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\RegistrationView.tpl',
      1 => 1733587849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6754742ee7b535_40793633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16541529836754742ee72072_86586321', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_16541529836754742ee72072_86586321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_16541529836754742ee72072_86586321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registration" method="post" class="pure-form pure-form-aligned">
    <legend>Rejestracja</legend>
    <fieldset>
        <div class="pure-control-group">
            <label for="id_login">Login:</label>
            <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />
        </div>
        <div class="pure-control-group">
            <label for="id_email">Email:</label>
            <input id="id_email" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" />
        </div>
        <div class="pure-control-group">
            <label for="id_pass">Hasło:</label>
            <input id="id_pass" type="password" name="pass" />
        </div>
        <div class="pure-control-group">
            <label for="id_pass_repeat">Powtórz hasło:</label>
            <input id="id_pass_repeat" type="password" name="pass_repeat" />
        </div>
        <div class="pure-controls">
            <input type="submit" value="Zarejestruj" class="pure-button pure-button-primary"/>
        </div>
    </fieldset>
</form>
<?php
}
}
/* {/block 'top'} */
}
