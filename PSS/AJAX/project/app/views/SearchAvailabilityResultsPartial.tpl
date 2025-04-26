{* app/views/SearchAvailabilityResultsPartial.tpl *}
<p>Data: {$searchDate}</p>
<p>Przedział godzinowy: {$searchTimeSlot}</p>
<p>Liczba osób: {$searchPeople}</p>

<table class="pure-table pure-table-bordered top-margin">
  <thead>
    <tr>
      <th>Stolik</th>
      <th>Maks. liczba osób</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    {if $results|@count > 0}
      {foreach $results as $r}
        <tr>
          <td>{$r.tableName}</td>
          <td>{$r.capacity}</td>
          <td>{$r.status}</td>
        </tr>
      {/foreach}
    {else}
      <tr><td colspan="3">Brak wyników.</td></tr>
    {/if}
  </tbody>
</table>
