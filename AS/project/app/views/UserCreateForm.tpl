{extends file="templates/main.tpl"}

{block name=top}
<h2>Dodaj nowego użytkownika</h2>

<form action="{$conf->action_root}createUser" method="post" class="pure-form pure-form-stacked">

    <fieldset>
        <div class="pure-control-group">
            <label for="id_login">Login:</label>
            <input id="id_login" type="text" name="login" value="{$userForm->login|default:''}"/>
        </div>

        <div class="pure-control-group">
            <label for="id_pass">Hasło:</label>
            <input id="id_pass" type="password" name="pass"/>
        </div>

        <div class="pure-control-group">
            <label for="id_pass_repeat">Powtórz hasło:</label>
            <input id="id_pass_repeat" type="password" name="pass_repeat"/>
        </div>

        <div class="pure-control-group">
            <label for="id_email">E-mail:</label>
            <input id="id_email" type="email" name="email" value="{$userForm->email|default:''}"/>
        </div>

        <div class="pure-control-group">
            <label for="id_firstName">Imię:</label>
            <input id="id_firstName" type="text" name="firstName" value="{$userForm->firstName|default:''}"/>
        </div>

        <div class="pure-control-group">
            <label for="id_lastName">Nazwisko:</label>
            <input id="id_lastName" type="text" name="lastName" value="{$userForm->lastName|default:''}"/>
        </div>

        <div class="pure-control-group">
            <label for="id_phoneNumber">Telefon:</label>
            <input id="id_phoneNumber" type="text" name="phoneNumber" value="{$userForm->phoneNumber|default:''}"/>
        </div>

        <div class="pure-control-group">
            <label for="id_address">Adres:</label>
            <input id="id_address" type="text" name="address" value="{$userForm->address|default:''}"/>
        </div>

        <div class="pure-control-group">
            <label for="id_role">Rola:</label>
            <select name="role" id="id_role">
                {foreach from=$allRoles item=r}
                    <option value="{$r.idRole}">{$r.roleName}</option>
                {/foreach}
            </select>
        </div>

        <div class="pure-controls top-margin">
            <button type="submit" class="pure-button pure-button-primary">Zapisz</button>
        </div>
    </fieldset>
</form>
{/block}
