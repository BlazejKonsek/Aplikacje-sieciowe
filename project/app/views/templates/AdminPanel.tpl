{extends file="main.tpl"}

{block name=top}
<h2>Panel Administratora</h2>
<p>Zarządzaj użytkownikami, ich rolami oraz resetuj hasła. Możesz także dodawać i wyłączać role w systemie.</p>

<h3>Użytkownicy</h3>
<form class="pure-form pure-form-stacked" action="{$conf->action_root}adminPanel" method="get">
    <fieldset>
        <label for="user_filter">Filtruj po loginie:</label>
        <input type="text" id="user_filter" name="user_filter" value="{$user_filter|default:''}" placeholder="np. admin"/>
        <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
    </fieldset>
</form>

<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr><th>Login</th><th>Rola</th><th>Opcje</th></tr>
    </thead>
    <tbody>
    {foreach $users as $u}
        <tr>
            <td>{$u.login}</td>
            <td>{$u.role}</td>
            <td>
                <form action="{$conf->action_root}manageRoles/{$u.id}" method="post" style="display:inline;">
                    <select name="new_role">
                        <option value="user">User</option>
                        <option value="employee">Employee</option>
                        <option value="admin">Admin</option>
                    </select>
                    <button type="submit" class="pure-button pure-button-secondary">Zmień rolę</button>
                </form>
                <form action="{$conf->action_root}resetPassword/{$u.id}" method="post" style="display:inline;">
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

<!-- Formularz dodawania nowej roli -->
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

<!-- Lista istniejących ról do wyłączenia/włączenia -->
<h4>Istniejące role</h4>
<table class="pure-table pure-table-bordered">
    <thead>
        <tr><th>Rola</th><th>Status</th><th>Opcje</th></tr>
    </thead>
    <tbody>
    {foreach $roles as $r}
        <tr>
            <td>{$r.name}</td>
            <td>{if $r.active}Aktywna{else}Wyłączona{/if}</td>
            <td>
                {if $r.active}
                    <form action="{$conf->action_root}disableRole/{$r.id}" method="post" style="display:inline;">
                        <button type="submit" class="pure-button button-warning">Wyłącz</button>
                    </form>
                {else}
                    <form action="{$conf->action_root}enableRole/{$r.id}" method="post" style="display:inline;">
                        <button type="submit" class="pure-button button-success">Włącz</button>
                    </form>
                {/if}
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>

{/block}
