{extends file="templates/main.tpl"}

{block name=top}
<h2>Reset hasła dla użytkownika ID = {$user.idUser}</h2>
<p>Użytkownik: {$user.firstName} {$user.lastName} (login: {$user.login})</p>

<form action="{$conf->action_root}resetPasswordSave" method="post" class="pure-form pure-form-stacked">
    <fieldset>
        <input type="hidden" name="userId" value="{$user.idUser}" />

        <div class="pure-control-group">
            <label for="newpass">Nowe hasło:</label>
            <input type="password" id="newpass" name="newpass" />
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Zapisz</button>
        </div>
    </fieldset>
</form>
{/block}
