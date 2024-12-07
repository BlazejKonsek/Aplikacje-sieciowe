<?php
/* Smarty version 3.1.33, created on 2024-12-07 17:22:00
  from 'C:\xampp\htdocs\project\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675476282df5d6_13814515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cf29c4e3e4ed52f0dbe7c740fe41ead02fde64e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\LoginView.tpl',
      1 => 1733588512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675476282df5d6_13814515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1613259156675476282da4f2_95312841', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_1613259156675476282da4f2_95312841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1613259156675476282da4f2_95312841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned">
    <legend>Logowanie</legend>
    <fieldset>
        <div class="pure-control-group">
            <label for="id_login">Login:</label>
            <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" />
        </div>
        <div class="pure-control-group">
            <label for="id_pass">Hasło:</label>
            <input id="id_pass" type="password" name="pass" />
        </div>
        <div class="pure-controls">
            <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
        </div>
    </fieldset>
</form>
<?php
}
}
/* {/block 'top'} */
}
