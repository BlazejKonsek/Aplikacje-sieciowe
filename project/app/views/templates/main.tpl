<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>System rezerwacji stolików</title>
    <link rel="stylesheet" href="{$conf->app_url}/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css">
</head>
<body style="margin:20px;">

<div class="pure-menu pure-menu-horizontal bottom-margin">
    <a href="{$conf->action_root}home" class="pure-menu-heading pure-menu-link">Strona główna</a>

    {if count($conf->roles)>0}
        {*
          Wyświetlanie sekcji dla użytkownika tylko, gdy user jest zalogowany z rolą user
          i nie jest jednocześnie employee ani admin.
        *}
        {if isset($conf->roles.user) && $conf->roles.user && (not isset($conf->roles.employee) || !$conf->roles.employee) && (not isset($conf->roles.admin) || !$conf->roles.admin)}
            <a href="{$conf->action_root}reservationList" class="pure-menu-heading pure-menu-link">Moje rezerwacje</a>
            <a href="{$conf->action_root}reservationShow" class="pure-menu-heading pure-menu-link">Nowa rezerwacja</a>
        {/if}

        {if isset($conf->roles.employee) && $conf->roles.employee}
            <a href="{$conf->action_root}employeePanel" class="pure-menu-heading pure-menu-link">Panel Pracownika</a>
        {/if}

        {if isset($conf->roles.admin) && $conf->roles.admin}
            <a href="{$conf->action_root}adminPanel" class="pure-menu-heading pure-menu-link">Panel Admin</a>
        {/if}

        <a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
    {else}
        <a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
        <a href="{$conf->action_root}registrationShow" class="pure-menu-heading pure-menu-link">Zarejestruj</a>
    {/if}
</div>

{block name=messages}
{if $msgs->isMessage()}
<div class="messages bottom-margin">
    <ul>
    {foreach $msgs->getMessages() as $msg}
        <li class="msg {if $msg->isError()}error{/if}{if $msg->isWarning()}warning{/if}{if $msg->isInfo()}info{/if}">{$msg->text}</li>
    {/foreach}
    </ul>
</div>
{/if}
{/block}

{block name=top}{/block}
{block name=bottom}{/block}

</body>
</html>
