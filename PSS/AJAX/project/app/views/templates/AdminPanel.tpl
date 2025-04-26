{extends file="main.tpl"}

{block name=top}

<h2>Panel Administratora</h2>
<p>Zarządzaj użytkownikami, ich rolami oraz resetuj hasła.</p>

<a href="{$conf->action_root}createUserShow" class="pure-button pure-button-primary">Dodaj nowego użytkownika</a>

<hr class="top-margin bottom-margin">

<h3>Użytkownicy</h3>
<form class="pure-form pure-form-stacked" action="{$conf->action_root}adminPanel" method="get">
    <fieldset>
        <label for="user_filter_login">Filtruj po loginie:</label>
        <input type="text" id="user_filter_login" name="user_filter_login" value="{$user_filter_login|default:''}" placeholder="np. admin"/>

        <label for="user_filter_role">Filtruj po roli:</label>
        <select name="user_filter_role" id="user_filter_role">
            <option value="">-- Wszystkie --</option>
            {if isset($allRoles)}
                {foreach $allRoles as $r}
                    <option value="{$r.idRole}" {if $r.idRole == $user_filter_role}selected{/if}>{$r.roleName}</option>
                {/foreach}
            {/if}
        </select>

        <button type="submit" class="pure-button pure-button-primary top-margin">Szukaj</button>
    </fieldset>
</form>

<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr><th>ID</th><th>Login</th><th>Rola</th><th>Opcje</th></tr>
    </thead>
    <tbody>
    {foreach $users as $u}
        <tr>
            <td>{$u.idUser}</td>
            <td>{$u.login}</td>
            <td>{if $u.roleName}{$u.roleName}{else}brak{/if}</td>
            <td>
                <form action="{$conf->action_root}manageRoles/{$u.idUser}" method="post" style="display:inline;">
                    <select name="new_role">
                        {if isset($allRoles)}
                            {foreach $allRoles as $r}
                                <option value="{$r.idRole}">{$r.roleName}</option>
                            {/foreach}
                        {/if}
                    </select>
                    <button type="submit" class="pure-button pure-button-secondary">Zmień rolę</button>
                </form>

<form action="{$conf->action_root}resetPassword/{$u.idUser}" method="post" style="display:inline;">
    <button type="submit" class="pure-button button-error">Reset hasła</button>
</form>

            </td>
        </tr>
    {/foreach}
    </tbody>
</table>
{if $users|@count == 0}
<p>Brak użytkowników spełniających kryteria.</p>
{/if}

<hr class="top-margin bottom-margin">

<h3>Zarządzanie rolami w systemie</h3>
<p>Dodaj nową rolę lub wyłącz istniejącą.</p>

<form class="pure-form pure-form-aligned" action="{$conf->action_root}addRole" method="post">
    <fieldset>
        <div class="pure-control-group">
            <label for="role_name">Nazwa nowej roli:</label>
            <input type="text" id="role_name" name="role_name" placeholder="np. manager"/>
        </div>
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Dodaj rolę</button>
        </div>
    </fieldset>
</form>

<h4>Istniejące role</h4>
{if isset($allRoles) && $allRoles|@count > 0}
<table class="pure-table pure-table-bordered">
    <thead>
        <tr><th>ID</th><th>Rola</th><th>Status</th><th>Opcje</th></tr>
    </thead>
    <tbody>
    {foreach $allRoles as $role}
        <tr>
            <td>{$role.idRole}</td>
            <td>{$role.roleName}</td>
            <td>
                {if $role.isActive == 1}Aktywna{else}Wyłączona{/if}
            </td>
            <td>
                {if $role.isActive == 1}
                    <form action="{$conf->action_root}disableRole/{$role.idRole}" method="post" style="display:inline;">
                        <button type="submit" class="pure-button button-warning">Wyłącz</button>
                    </form>
                {else}
                    <form action="{$conf->action_root}enableRole/{$role.idRole}" method="post" style="display:inline;">
                        <button type="submit" class="pure-button button-success">Włącz</button>
                    </form>
                {/if}
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>
{else}
<p>Brak ról w systemie.</p>
{/if}

{/block}
