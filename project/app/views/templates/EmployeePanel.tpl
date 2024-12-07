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
                <option value="oczekujaca">Oczekujące na potwierdzenie</option>
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
            <th>Godzina</th>
            <th>Liczba osób</th>
            <th>Status</th>
            <th>Notatki</th>
            <th>Opcje</th>
        </tr>
    </thead>
    <tbody>
    {foreach $reservations as $r}
        <tr>
            <td>{$r.time}</td>
            <td>{$r.people_count}</td>
            <td>{$r.status}</td>
            <td>{$r.notes|default:'-'}</td>
            <td>
                <!-- Przycisk do wyświetlenia szczegółów (np. w modalu) -->
                <button class="pure-button button-secondary" onclick="showDetails({$r.id})">Szczegóły</button>

                <form action="{$conf->action_root}reservationStatusUpdate/{$r.id}" method="post" style="display:inline-block;">
                    <select name="status">
                        <option value="potwierdzona">Potwierdzona</option>
                        <option value="anulowana">Anulowana</option>
                    </select>
                    <input type="text" name="notes" placeholder="Notatki" />
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

<!-- Modal ze szczegółami rezerwacji (tylko layout) -->
<div id="detailsModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="hideDetails()">&times;</span>
        <h3>Szczegóły rezerwacji</h3>
        <!-- Szczegółowe informacje o rezerwacji np. Imię, Nazwisko, Telefon kontaktowy -->
        <p><strong>Rezerwujący:</strong> Jan Kowalski</p>
        <p><strong>Kontakt:</strong> 123-456-789</p>
        <p><strong>Dodatkowe informacje:</strong> Klient prosi o stolik przy oknie.</p>
    </div>
</div>

{/block}

{block name=bottom}
<!-- Prosty JavaScript do obsługi modala (tylko przykładowy) -->
<script>
function showDetails(id) {
    // W przyszłości AJAX po szczegóły rezerwacji.
    document.getElementById('detailsModal').style.display = 'block';
}
function hideDetails() {
    document.getElementById('detailsModal').style.display = 'none';
}
</script>
{/block}
