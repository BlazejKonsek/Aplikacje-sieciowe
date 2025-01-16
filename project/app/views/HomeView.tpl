{extends file="templates/main.tpl"}

{block name="top"}
<div class="hero">
    <h2>Witamy w systemie rezerwacji stolików w naszej restauracji!</h2>
    <p>Poznaj smak i atmosferę, które sprawią, że poczujesz się wyjątkowo.</p>
    <a href="{$conf->action_root}searchAvailabilityShow" class="pure-button pure-button-primary">
        <i class="fa fa-search"></i> Wyszukaj wolny stolik
    </a>
</div>

<h3>O restauracji</h3>
<div class="pure-g custom-responsive">
    <div class="pure-u-1 pure-u-md-1-2">
        <div class="box">
            <img src="{$conf->app_url}/img/danie1.jpg" alt="Danie 1" />
            <h4>Przystawki</h4>
            <p>Sztandarowe danie naszej kuchni – aromatyczne, pełne smaku i przygotowane ze świeżych składników.</p>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-2">
        <div class="box">
            <img src="{$conf->app_url}/img/danie2.jpg" alt="Danie 2" />
            <h4>Dania Główne</h4>
            <p>Połączenie tradycji z nowoczesnością, dedykowane tym, którzy lubią eksperymenty smakowe.</p>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-2">
        <div class="box">
            <img src="{$conf->app_url}/img/danie3.jpg" alt="Danie 3" />
            <h4>Napoje</h4>
            <p>Dla spragnionych!</p>
        </div>
    </div>
     <div class="pure-u-1 pure-u-md-1-2">
        <div class="box">
            <img src="{$conf->app_url}/img/danie4.jpg" alt="Danie 4" />
            <h4>Desery</h4>
            <p>Każdego dnia proponujemy słodki specjał na zakończenie posiłku. Pozwól się rozpieścić!</p>
        </div>
    </div>
</div>

<hr class="top-margin bottom-margin">

<h3>Dostępne funkcjonalności</h3>
<div class="pure-g custom-responsive">
    <div class="pure-u-1 pure-u-md-1-2">
        <div class="box">
            <h4>Rezerwacja Online</h4>
            <p>Przeglądaj dostępne terminy i rezerwuj stolik bez wychodzenia z domu.</p>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-2">
        <div class="box">
            <h4>Zarządzanie Rezerwacjami</h4>
            <p>Przeglądaj i zarządzaj swoimi rezerwacjami jako zalogowany użytkownik.</p>
        </div>
    </div>
</div>

<hr class="top-margin bottom-margin">



<hr class="top-margin bottom-margin">

<h3>Informacje dla gości</h3>
<ul>
    <li>Jeśli jesteś nowym użytkownikiem, zarejestruj się, aby zarezerwować stolik.</li>
    <li>Jesteś stałym gościem? Zaloguj się i przejdź do sekcji "Moje rezerwacje", aby zarządzać umówionymi terminami.</li>
</ul>
{/block}
