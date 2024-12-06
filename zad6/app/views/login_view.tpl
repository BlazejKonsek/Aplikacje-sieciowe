{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
		<div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="{$form->login|default:''}"/>
		</div>
		<div class="pure-control-group">
			<label for="id_pass">hasło: </label>
			<input id="id_pass" type="password" name="pass" />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>
{include file='messages.tpl'}
{/block}
