{extends file="main.tpl"}

{block name='title'}Kalkulator Kredytu{/block}

{block name='content'}
    <section id="banner">
        <h2>Kalkulator Kredytu</h2>
        <p>Oblicz ratę kredytu szybko i łatwo</p>
    </section>

    <section class="wrapper style1 special">
        <div class="inner">
            <form method="post" action="{$app_url}/app/calc.php" class="container">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-12 col-12-mobilep">
                        <input type="text" name="kwota" id="kwota" value="{$kwota}" placeholder="Kwota kredytu" />
                    </div>
                    <div class="col-12 col-12-mobilep">
                        <input type="text" name="lata" id="lata" value="{$lata}" placeholder="Okres spłaty (lata)" />
                    </div>
                    <div class="col-12 col-12-mobilep">
                        <input type="text" name="oprocentowanie" id="oprocentowanie" value="{$oprocentowanie}" placeholder="Oprocentowanie (%)" />
                    </div>
                    <div class="col-12">
                        <ul class="actions special">
                            <li><input type="submit" value="Oblicz" class="button primary" /></li>
                        </ul>
                    </div>
                </div>
            </form>

            {if isset($messages) && count($messages) > 0}
                <section class="box">
                    <h3>Wystąpiły błędy:</h3>
                    <ul>
                        {foreach from=$messages item=msg}
                            <li>{$msg}</li>
                        {/foreach}
                    </ul>
                </section>
            {/if}

            {if isset($result)}
                <section class="box">
                    <h3>Wynik</h3>
                    <p>Miesięczna rata kredytu wynosi: <strong>{$result} zł</strong></p>
                </section>
            {/if}
        </div>
    </section>
{/block}
