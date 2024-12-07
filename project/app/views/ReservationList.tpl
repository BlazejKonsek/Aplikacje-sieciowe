{extends file="templates/main.tpl"}

{block name=top}
<h2>Twoje Rezerwacje</h2>
<p>Przeglądaj i filtruj swoje rezerwacje. W przyszłości można dodać filtrowanie np. po statusie, dacie itp.</p>

<form class="pure-form pure-form-stacked" action="{$conf->action_root}reservationList" method="get">
    <fieldset>
        <label for="sf_status">Status:</label>
        <input type="text" name="sf_status" placeholder="np. potwierdzona" />
        <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
    </fieldset>
</form>

<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr><th>Data</th><th>Godzina</th><th>Liczba osób</th><th>Status</th></tr>
    </thead>
    <tbody>
    {foreach $reservations as $r}
        <tr>
            <td>{$r.date}</td>
            <td>{$r.time}</td>
            <td>{$r.people_count}</td>
            <td>{$r.status}</td>
        </tr>
    {/foreach}
    </tbody>
</table>
{/block}
