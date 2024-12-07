<?php
/* Smarty version 3.1.33, created on 2024-12-07 17:18:24
  from 'C:\xampp\htdocs\project\app\views\HomeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675475501b9783_22186553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfca56b665b4ca2c3e622e20263f4641074b9917' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project\\app\\views\\HomeView.tpl',
      1 => 1733588300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675475501b9783_22186553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10798352906754755019f3c6_02321949', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'top'} */
class Block_10798352906754755019f3c6_02321949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_10798352906754755019f3c6_02321949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
searchAvailability">
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
            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/danie1.jpg" alt="Danie 1" style="width:100%; border-radius:5px;"/>
            <h4>Danie Klasyczne</h4>
            <p>Sztandarowe danie naszej kuchni – aromatyczne, pełne smaku i przygotowane ze świeżych składników.</p>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-u-1 box">
            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/danie2.jpg" alt="Danie 2" style="width:100%; border-radius:5px;"/>
            <h4>Nowoczesny Twist</h4>
            <p>Połączenie tradycji z nowoczesnością, dedykowane tym, którzy lubią eksperymenty smakowe.</p>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-u-1 box">
            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/danie3.jpg" alt="Danie 3" style="width:100%; border-radius:5px;"/>
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
<?php
}
}
/* {/block 'top'} */
}
