{extends file="main.tpl"}

{block name='title'}Kalkulator Kredytu{/block}

{block name='content'}
<section id="banner">
    <h2>Kalkulator Kredytu</h2>
    <p>Oblicz ratę kredytu szybko i łatwo</p>
</section>

<section class="wrapper style1 special">
    <div class="inner">
        <form method="post" action="{$config->app_url}/index.php" class="container">
            <div class="row gtr-uniform gtr-50">
                <div class="col-12 col-12-mobilep">
                    <input type="text" name="kwota" id="kwota" value="{$form->kwota}" placeholder="Kwota kredytu" />
                </div>
                <div class="col-12 col-12-mobilep">
                    <input type="text" name="lata" id="lata" value="{$form->lata}" placeholder="Okres spłaty (lata)" />
                </div>
                <div class="col-12 col-12-mobilep">
                    <input type="text" name="oprocentowanie" id="oprocentowanie" value="{$form->oprocentowanie}" placeholder="Oprocentowanie (%)" />
                </div>
                <div class="col-12">
                    <ul class="actions special">
                        <li><input type="submit" value="Oblicz" class="button primary" /></li>
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

        {if $messages->getInfos()}
            <section class="box">
                <h3>Informacje:</h3>
                <ul>
                    {foreach from=$messages->getInfos() item=msg}
                        <li>{$msg}</li>
                    {/foreach}
                </ul>
            </section>
        {/if}

        {if isset($result->result)}
            <section class="box">
                <h3>Wynik</h3>
                <p>Miesięczna rata kredytu wynosi: <strong>{$result->result} zł</strong></p>
            </section>
        {/if}
    </div>
</section>
{/block}
