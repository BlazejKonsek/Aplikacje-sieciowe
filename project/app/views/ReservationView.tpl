{extends file="templates/main.tpl"}

{block name=top}
<form action="{$conf->action_root}reservationSave" method="post" class="pure-form pure-form-aligned">
    <legend>Nowa Rezerwacja</legend>
    <fieldset>
        <div class="pure-control-group">
            <label for="id_date">Data:</label>
            <input type="date" id="id_date" name="date" value="{$form->date}" />
        </div>
        <div class="pure-control-group">
            <label for="id_time">Godzina:</label>
            <input type="time" id="id_time" name="time" value="{$form->time}" />
        </div>
        <div class="pure-control-group">
            <label for="id_people_count">Liczba osób:</label>
            <input type="number" id="id_people_count" name="people_count" value="{$form->people_count}" min="1" />
        </div>
        <div class="pure-controls">
            <input type="submit" value="Zarezerwuj" class="pure-button pure-button-primary"/>
        </div>
    </fieldset>
</form>
{/block}