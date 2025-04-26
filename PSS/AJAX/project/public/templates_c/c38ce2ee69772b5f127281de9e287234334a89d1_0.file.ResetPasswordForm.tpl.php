<?php
/* Smarty version 4.5.5, created on 2025-01-15 20:11:38
  from 'C:\xampp\htdocs\project\app\views\ResetPasswordForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6788086a426ac3_13871691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c38ce2ee69772b5f127281de9e287234334a89d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\ResetPasswordForm.tpl',
      1 => 1736596323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6788086a426ac3_13871691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11417591736788086a4231e9_85785019', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_11417591736788086a4231e9_85785019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_11417591736788086a4231e9_85785019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Reset hasła dla użytkownika ID = <?php echo $_smarty_tpl->tpl_vars['user']->value['idUser'];?>
</h2>
<p>Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['lastName'];?>
 (login: <?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
)</p>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
resetPasswordSave" method="post" class="pure-form pure-form-stacked">
    <fieldset>
        <input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['idUser'];?>
" />

        <div class="pure-control-group">
            <label for="newpass">Nowe hasło:</label>
            <input type="password" id="newpass" name="newpass" />
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Zapisz</button>
        </div>
    </fieldset>
</form>
<?php
}
}
/* {/block 'top'} */
}
