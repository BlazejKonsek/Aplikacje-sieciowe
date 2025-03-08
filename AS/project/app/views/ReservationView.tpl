{extends file="templates/main.tpl"}

{block name=top}
<form action="{$conf->action_root}reservationSave" method="post" class="pure-form pure-form-aligned">
    <legend>Nowa Rezerwacja</legend>
    <fieldset>
        <div class="pure-control-group">
            <label for="id_date">Data:</label>
            <input type="date" id="id_date" name="date" value="{$form->date|default:''}" required />
        </div>

        <div class="pure-control-group">
            <label for="id_timeslot">Przedział godzinowy:</label>
            <select id="id_timeslot" name="timeslot" required>
                <option value="">-- wybierz --</option>
                <option value="12-13" {if isset($form->timeslot) && $form->timeslot=='12-13'}selected{/if}>12:00 - 13:00</option>
                <option value="13-14" {if isset($form->timeslot) && $form->timeslot=='13-14'}selected{/if}>13:00 - 14:00</option>
                <option value="14-15" {if isset($form->timeslot) && $form->timeslot=='14-15'}selected{/if}>14:00 - 15:00</option>
                <option value="15-16" {if isset($form->timeslot) && $form->timeslot=='15-16'}selected{/if}>15:00 - 16:00</option>
                <option value="16-17" {if isset($form->timeslot) && $form->timeslot=='16-17'}selected{/if}>16:00 - 17:00</option>
                <option value="17-18" {if isset($form->timeslot) && $form->timeslot=='17-18'}selected{/if}>17:00 - 18:00</option>
                <option value="18-19" {if isset($form->timeslot) && $form->timeslot=='18-19'}selected{/if}>18:00 - 19:00</option>
                <option value="19-20" {if isset($form->timeslot) && $form->timeslot=='19-20'}selected{/if}>19:00 - 20:00</option>
                <option value="20-21" {if isset($form->timeslot) && $form->timeslot=='20-21'}selected{/if}>20:00 - 21:00</option>
                <option value="21-22" {if isset($form->timeslot) && $form->timeslot=='21-22'}selected{/if}>21:00 - 22:00</option>
            </select>
        </div>

        <div class="pure-control-group">
            <label for="id_people_count">Ilu osobowy stolik?</label>
            <select id="id_people_count" name="people_count" required>
                <option value="">-- wybierz --</option>
                <option value="2"  {if isset($form->people_count) && $form->people_count == 2}selected{/if}>2</option>
                <option value="4"  {if isset($form->people_count) && $form->people_count == 4}selected{/if}>4</option>
                <option value="6"  {if isset($form->people_count) && $form->people_count == 6}selected{/if}>6</option>
                <option value="8"  {if isset($form->people_count) && $form->people_count == 8}selected{/if}>8</option>
            </select>
        </div>

        <div class="pure-control-group">
            <label for="id_note">Notatka:</label>
            <textarea id="id_note" name="noteText" rows="3">{if isset($form->noteText)}{$form->noteText|escape}{/if}</textarea>
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Zarezerwuj</button>
        </div>
    </fieldset>
</form>
{/block}
