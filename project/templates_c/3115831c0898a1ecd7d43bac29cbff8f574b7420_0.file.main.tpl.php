<?php
/* Smarty version 4.5.5, created on 2025-01-15 20:10:52
  from 'C:\xampp\htdocs\project\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6788083c4d2256_02125375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3115831c0898a1ecd7d43bac29cbff8f574b7420' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\templates\\main.tpl',
      1 => 1736968009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6788083c4d2256_02125375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>System rezerwacji stolików</title>

    <!-- Podpinamy Pure CSS -->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">

    <!-- Font Awesome (ikony) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Nasz główny styl (był wcześniej) -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">

    <!-- Nowy plik theme.css (z ulepszeniami wizualnymi) -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/theme.css">
</head>
<body>

<div class="pure-menu pure-menu-horizontal bottom-margin">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home" class="pure-menu-heading pure-menu-link">
        <i class="fa fa-home"></i> Strona główna
    </a>

    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
        
        <?php if ((isset($_smarty_tpl->tpl_vars['conf']->value->roles['user'])) && $_smarty_tpl->tpl_vars['conf']->value->roles['user'] && (!(isset($_smarty_tpl->tpl_vars['conf']->value->roles['employee'])) || !$_smarty_tpl->tpl_vars['conf']->value->roles['employee']) && (!(isset($_smarty_tpl->tpl_vars['conf']->value->roles['admin'])) || !$_smarty_tpl->tpl_vars['conf']->value->roles['admin'])) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationList" class="pure-menu-heading pure-menu-link">
                <i class="fa fa-list"></i> Moje rezerwacje
            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationShow" class="pure-menu-heading pure-menu-link">
                <i class="fa fa-plus"></i> Nowa rezerwacja
            </a>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['conf']->value->roles['employee'])) && $_smarty_tpl->tpl_vars['conf']->value->roles['employee']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
employeePanel" class="pure-menu-heading pure-menu-link">
                <i class="fa fa-user-tie"></i> Panel Pracownika
            </a>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['conf']->value->roles['admin'])) && $_smarty_tpl->tpl_vars['conf']->value->roles['admin']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminPanel" class="pure-menu-heading pure-menu-link">
                <i class="fa fa-user-gear"></i> Panel Admin
            </a>
        <?php }?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">
            <i class="fa fa-sign-out"></i> Wyloguj
        </a>
    <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">
            <i class="fa fa-sign-in"></i> Zaloguj
        </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registrationShow" class="pure-menu-heading pure-menu-link">
            <i class="fa fa-user-plus"></i> Zarejestruj
        </a>
    <?php }?>
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9201234536788083c4cbdc1_78466913', 'messages');
?>


<div class="pure-g">
    <div class="pure-u-1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16186660306788083c4d1942_43236181', 'top');
?>

    </div>
</div>

<div class="pure-g">
    <div class="pure-u-1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12744300706788083c4d1d95_17662110', 'bottom');
?>

    </div>
</div>

</body>
</html>
<?php }
/* {block 'messages'} */
class Block_9201234536788083c4cbdc1_78466913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_9201234536788083c4cbdc1_78466913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
}
/* {/block 'messages'} */
/* {block 'top'} */
class Block_16186660306788083c4d1942_43236181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_16186660306788083c4d1942_43236181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_12744300706788083c4d1d95_17662110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_12744300706788083c4d1d95_17662110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'bottom'} */
}
