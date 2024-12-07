{extends file="templates/main.tpl"}

{block name=top}
<h2>Witamy w systemie rezerwacji stolików w naszej restauracji!</h2>

<div class="pure-g">
    <div class="pure-u-1 pure-u-md-1-2">
        <h3>O restauracji</h3>
        <p>Nasza restauracja to miejsce, w którym tradycyjna kuchnia spotyka się z nowoczesnymi trendami kulinarnymi. 
        Dbamy o to, aby każdy gość znalazł coś dla siebie – od klasycznych dań mięsnych, przez świeże ryby i owoce morza, 
        aż po bogatą ofertę dań wegetariańskich i wegańskich.</p>
        
        <p>Zapraszamy do zapoznania się z naszą ofertą oraz do rezerwacji stolika. 
        Zarezerwuj dogodny termin już dziś, aby mieć pewność, że czeka na Ciebie wolne miejsce!</p>
    </div>
    <div class="pure-u-1 pure-u-md-1-2">
        <h3>Dostępne funkcjonalności</h3>
        <ul>
            <li>Przeglądanie dostępnych terminów i rezerwacja stolika online.</li>
            <li>Podgląd i zarządzanie swoimi rezerwacjami (dla zalogowanych użytkowników).</li>
            <li>Panel pracownika – zarządzanie rezerwacjami i ich statusami.</li>
            <li>Panel administratora – zarządzanie użytkownikami, rolami i ustawieniami systemu.</li>
        </ul>
    </div>
</div>

<hr class="top-margin bottom-margin">

<!-- Sekcja wyszukiwania dostępnych terminów -->
<h3>Wyszukaj wolny stolik</h3>
<form class="pure-form pure-form-stacked" action="{$conf->action_root}searchAvailability">
    <fieldset>
        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-4">
                <label for="search_date">Data:</label>
                <input type="date" id="search_date" name="search_date"/>
            </div>
            <div class="pure-u-1 pure-u-md-1-4">
                <label for="search_time">Godzina:</label>
                <input type="time" id="search_time" name="search_time"/>
            </div>
            <div class="pure-u-1 pure-u-md-1-4">
                <label for="search_people">Liczba osób:</label>
                <input type="number" id="search_people" name="search_people" min="1" max="20" placeholder="np. 4"/>
            </div>
            <div class="pure-u-1 pure-u-md-1-4 top-margin">
                <button type="submit" class="pure-button pure-button-primary">Szukaj</button>
            </div>
        </div>
    </fieldset>
</form>

<!-- Sekcja przykładowych dań - oferta -->
<hr class="top-margin bottom-margin">
<h3>Nasze specjały</h3>
<div class="pure-g">
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-u-1 box">
            <img src="{$conf->app_url}/img/danie1.jpg" alt="Danie 1" style="width:100%; border-radius:5px;"/>
            <h4>Danie Klasyczne</h4>
            <p>Sztandarowe danie naszej kuchni – aromatyczne, pełne smaku i przygotowane ze świeżych składników.</p>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-u-1 box">
            <img src="{$conf->app_url}/img/danie2.jpg" alt="Danie 2" style="width:100%; border-radius:5px;"/>
            <h4>Nowoczesny Twist</h4>
            <p>Połączenie tradycji z nowoczesnością, dedykowane tym, którzy lubią eksperymenty smakowe.</p>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-u-1 box">
            <img src="{$conf->app_url}/img/danie3.jpg" alt="Danie 3" style="width:100%; border-radius:5px;"/>
            <h4>Deser Dnia</h4>
            <p>Każdego dnia inny słodki specjał na zakończenie posiłku. Pozwól się zaskoczyć!</p>
        </div>
    </div>
</div>

<!-- Sekcja informacji dodatkowych -->
<hr class="top-margin bottom-margin">
<h3>Informacje dla gości</h3>
<ul>
    <li>Jeśli jesteś nowym użytkownikiem, zarejestruj się, aby zarezerwować stolik.</li>
    <li>Jesteś stałym gościem? Zaloguj się i przejdź do sekcji "Moje rezerwacje", aby zarządzać umówionymi terminami.</li>
    <li>Potrzebujesz pomocy? Skontaktuj się z obsługą restauracji telefonicznie lub przez formularz kontaktowy (wkrótce!).</li>
</ul>
{/block}
