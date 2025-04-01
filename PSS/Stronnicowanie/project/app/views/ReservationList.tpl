{extends file="templates/main.tpl"}

{block name=top}
<h2>Twoje Rezerwacje</h2>
<p>Przeglądaj i filtruj swoje rezerwacje.</p>

<form class="pure-form pure-form-stacked" action="{$conf->action_root}reservationList" method="get">
    <fieldset>
        <label for="sf_status">Status:</label>
        <select id="sf_status" name="sf_status">
            <option value="">(Wszystkie)</option>
            <option value="Oczekująca"   {if $sf_status == 'Oczekująca'}selected{/if}>Oczekująca</option>
            <option value="Potwierdzona" {if $sf_status == 'Potwierdzona'}selected{/if}>Potwierdzona</option>
            <option value="Anulowana"    {if $sf_status == 'Anulowana'}selected{/if}>Anulowana</option>
        </select>
        <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
    </fieldset>
</form>

<table class="pure-table pure-table-bordered top-margin">
    <thead>
        <tr>
            <th>Data</th>
            <th>Godzina</th>
            <th>Liczba osób</th>
            <th>Status</th>
        </tr>
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

{* stronnicowanie *}
{if isset($current_page) && isset($total_pages) && $total_pages > 1}
    <ul class="pure-menu-list top-margin">
        {if $current_page > 1}
        <li class="pure-menu-item">
            <a class="pure-menu-link" 
               href="{$conf->action_root}reservationList?sf_status={$sf_status|default:''}&page={$current_page-1}">
               &laquo; Poprzednia
            </a>
        </li>
        {else}
        <li class="pure-menu-item pure-menu-disabled">
            <span class="pure-menu-link">&laquo; Poprzednia</span>
        </li>
        {/if}

        {for $i=1 to $total_pages}
            {if $i == $current_page}
                <li class="pure-menu-item pure-menu-selected">
                    <span class="pure-menu-link">{$i}</span>
                </li>
            {else}
                <li class="pure-menu-item">
                    <a class="pure-menu-link"
                       href="{$conf->action_root}reservationList?sf_status={$sf_status|default:''}&page={$i}">
                       {$i}
                    </a>
                </li>
            {/if}
        {/for}

        {if $current_page < $total_pages}
        <li class="pure-menu-item">
            <a class="pure-menu-link"
               href="{$conf->action_root}reservationList?sf_status={$sf_status|default:''}&page={$current_page+1}">
               Następna &raquo;
            </a>
        </li>
        {else}
        <li class="pure-menu-item pure-menu-disabled">
            <span class="pure-menu-link">Następna &raquo;</span>
        </li>
        {/if}
    </ul>
{/if}

{/block}
