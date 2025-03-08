<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>System rezerwacji stolików</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="{$conf->app_url}/css/style.css">
    <link rel="stylesheet" href="{$conf->app_url}/css/theme.css">
</head>
<body>

<div class="pure-menu pure-menu-horizontal bottom-margin">
    <a href="{$conf->action_root}home" class="pure-menu-heading pure-menu-link">
        <i class="fa fa-home"></i> Strona główna
    </a>

    {if count($conf->roles)>0}
        
        {if isset($conf->roles.user) && $conf->roles.user && 
           (not isset($conf->roles.employee) || !$conf->roles.employee) && 
           (not isset($conf->roles.admin) || !$conf->roles.admin)}
            <a href="{$conf->action_root}reservationList" class="pure-menu-heading pure-menu-link">
                <i class="fa fa-list"></i> Moje rezerwacje
            </a>
            <a href="{$conf->action_root}reservationShow" class="pure-menu-heading pure-menu-link">
                <i class="fa fa-plus"></i> Nowa rezerwacja
            </a>
        {/if}

        {if isset($conf->roles.employee) && $conf->roles.employee}
            <a href="{$conf->action_root}employeePanel" class="pure-menu-heading pure-menu-link">
                <i class="fa fa-user-tie"></i> Panel Pracownika
            </a>
        {/if}

        {if isset($conf->roles.admin) && $conf->roles.admin}
            <a href="{$conf->action_root}adminPanel" class="pure-menu-heading pure-menu-link">
                <i class="fa fa-user-gear"></i> Panel Admin
            </a>
        {/if}

        <a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">
            <i class="fa fa-sign-out"></i> Wyloguj
        </a>
    {else}
        <a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">
            <i class="fa fa-sign-in"></i> Zaloguj
        </a>
        <a href="{$conf->action_root}registrationShow" class="pure-menu-heading pure-menu-link">
            <i class="fa fa-user-plus"></i> Zarejestruj
        </a>
    {/if}
</div>

{block name=messages}
{if $msgs->isMessage()}
<div class="messages bottom-margin container">
    <ul>
    {foreach $msgs->getMessages() as $msg}
        <li class="msg {if $msg->isError()}error{/if}{if $msg->isWarning()}warning{/if}{if $msg->isInfo()}info{/if}">
            {$msg->text}
        </li>
    {/foreach}
    </ul>
</div>
{/if}
{/block}

<div class="container">
    <div class="main-content">
        {block name=top}{/block}
    </div>
</div>

<div class="container">
    <div class="main-content">
        {block name=bottom}{/block}
    </div>
</div>

</body>
</html>
