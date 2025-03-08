{extends file="templates/main.tpl"}

{block name=top}
<h2>Rejestracja nowego użytkownika</h2>

<form action="{$conf->action_root}registration" method="post" class="pure-form pure-form-aligned">
    <fieldset>

        <div class="pure-control-group">
            <label for="id_login">Login:</label>
            <input type="text" id="id_login" name="login" value="{$form->login}" required/>
        </div>

        <div class="pure-control-group">
            <label for="id_pass">Hasło:</label>
            <input type="password" id="id_pass" name="pass" required />
        </div>

        <div class="pure-control-group">
            <label for="id_pass_repeat">Powtórz hasło:</label>
            <input type="password" id="id_pass_repeat" name="pass_repeat" required />
        </div>

        <div class="pure-control-group">
            <label for="id_email">E-mail:</label>
            <input type="email" id="id_email" name="email" value="{$form->email}"/>
        </div>

        <div class="pure-control-group">
            <label for="id_fname">Imię:</label>
            <input type="text" id="id_fname" name="firstName" value="{$form->firstName}"/>
        </div>

        <div class="pure-control-group">
            <label for="id_lname">Nazwisko:</label>
            <input type="text" id="id_lname" name="lastName" value="{$form->lastName}"/>
        </div>

        <div class="pure-control-group">
            <label for="id_phone">Telefon:</label>
            <input type="text" id="id_phone" name="phoneNumber" value="{$form->phoneNumber}"/>
        </div>

        <div class="pure-control-group">
            <label for="id_address">Adres:</label>
            <input type="text" id="id_address" name="address" value="{$form->address}"/>
        </div>

        <div class="pure-controls">
            <input type="submit" value="Zarejestruj" class="pure-button pure-button-primary" />
        </div>
    </fieldset>
</form>
{/block}
