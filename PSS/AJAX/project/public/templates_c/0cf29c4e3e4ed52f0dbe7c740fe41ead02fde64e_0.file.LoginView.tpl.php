<?php
/* Smarty version 4.5.5, created on 2025-01-11 14:14:09
  from 'C:\xampp\htdocs\project\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_67826ea1193be0_51360570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cf29c4e3e4ed52f0dbe7c740fe41ead02fde64e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\LoginView.tpl',
      1 => 1733593475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67826ea1193be0_51360570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180381866467826ea1190c68_91536004', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_180381866467826ea1190c68_91536004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_180381866467826ea1190c68_91536004',
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
