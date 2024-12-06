<?php
/* Smarty version 4.3.2, created on 2024-12-06 17:08:20
  from 'C:\xampp\htdocs\zad6\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67532174707260_35115242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eec93d9ff787f5be6cf216984beacd7be731478' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad6\\app\\views\\login_view.tpl',
      1 => 1733501254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_67532174707260_35115242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1138124059675321746e4ce6_43240808', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1138124059675321746e4ce6_43240808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1138124059675321746e4ce6_43240808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
		<div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->login ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"/>
		</div>
		<div class="pure-control-group">
			<label for="id_pass">hasło: </label>
			<input id="id_pass" type="password" name="pass" />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
