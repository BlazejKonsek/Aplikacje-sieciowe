{extends file="main.tpl"}

{block name=top}
<h2>Panel Pracownika</h2>
<p>Wybierz dzień, aby zobaczyć rezerwacje. Możesz filtrować je także po statusie.</p>

<form class="pure-form pure-form-aligned" action="{$conf->action_root}employeePanel" method="get">
    <fieldset>
        <div class="pure-control-group">
            <label for="day">Wybierz dzień:</label>
            <input type="date" id="day" name="day" value="{$day|default:''}" />
        </div>
        <div class="pure-control-group">
            <label for="status_filter">Status:</label>
            <select id="status_filter" name="status_filter">
                <option value="">Wszystkie</option>
                <option value="potwierdzona">Potwierdzone</option>
                <option value="anulowana">Anulowane</option>
                <option value="oczekujaca">Oczekujące</option>
            </select>
        </div>
        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Pokaż rezerwacje</button>
        </div>
    </fieldset>
</form>

{if $reservations|@count > 0}
<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr>
            <th>Data</th>
            <th>Godzina</th>
            <th>Liczba osób</th>
            <th>Status</th>
            <th>Notatki</th>
            <th>Stolik</th>   {*! nowa kolumna - stolik *}
            <th>Opcje</th>
        </tr>
    </thead>
    <tbody>
    {foreach $reservations as $r}
        <tr>
            <td>{$r.reservationDate}</td>
            <td>{$r.reservationTime}</td>
            <td>{$r.numberOfPeople}</td>
            <td>{$r.statusName}</td>
            <td>
            </td>
            <td>
                {if isset($r.idTable) && $r.idTable}
                    Stolik #{$r.idTable}
                {else}
                    <select name="table_id" form="resForm_{$r.idReservation}">
                        <option value="">(bez zmiany)</option>
                        {foreach $tables as $t}
                            {if $t.maxCapacity >= $r.numberOfPeople}
                                <option value="{$t.idTable}">{$t.tableName} ({$t.maxCapacity} os.)</option>
                            {/if}
                        {/foreach}
                    </select>
                {/if}
            </td>
            <td>
                <form id="resForm_{$r.idReservation}" 
                      action="{$conf->action_root}reservationStatusUpdate/{$r.idReservation}" 
                      method="post" class="pure-form"
                      style="display:inline-block;">

                    <select name="status">
                        <option value="2">Potwierdzona</option>
                        <option value="3">Anulowana</option>
                    </select>

                    <input type="text" name="notes" placeholder="Notatka" />

        

                    <button type="submit" class="pure-button pure-button-primary">Zmień</button>
                </form>
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>
{else}
<p>Brak rezerwacji dla wybranych kryteriów.</p>
{/if}
{/block}
