{extends file="templates/main.tpl"}

{block name=top}
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned">
    <legend>Logowanie</legend>
    <fieldset>
        <div class="pure-control-group">
            <label for="id_login">Login:</label>
            <input id="id_login" type="text" name="login" value="{$form->login}" />
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
{/block}
