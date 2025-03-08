{extends file="main.tpl"}

{block name='title'}Logowanie{/block}

{block name='content'}
<section id="banner">
    <h2>Logowanie</h2>
    <p>Uzyskaj dostęp do kalkulatora</p>
</section>

<section class="wrapper style1 special">
    <div class="inner">
        <form method="post" action="{$config->app_url}/app/security/login.php" class="container">
            <div class="row gtr-uniform gtr-50">
                <div class="col-12 col-12-mobilep">
                    <input type="text" name="login" id="login" value="{$form.login}" placeholder="Login" />
                </div>
                <div class="col-12 col-12-mobilep">
                    <input type="password" name="pass" id="pass" placeholder="Hasło" />
                </div>
                <div class="col-12">
                    <ul class="actions special">
                        <li><input type="submit" value="Zaloguj" class="button primary" /></li>
                    </ul>
                </div>
            </div>
        </form>

        {if $messages->isError()}
            <section class="box">
                <h3>Wystąpiły błędy:</h3>
                <ul>
                    {foreach from=$messages->getErrors() item=msg}
                        <li>{$msg}</li>
                    {/foreach}
                </ul>
            </section>
        {/if}
    </div>
</section>
{/block}
