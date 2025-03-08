<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator Kredytu</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
    <label for="id_kwota">Kwota: </label>
    <input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" /><br />
    <label for="id_lata">Lat: </label>
    <input id="id_lata" type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>" /><br />
    <label for="id_opr">Oprocentowanie: </label>
    <input id="id_opr" type="text" name="oprocentowanie" value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>" /><br />
    <input type="submit" value="Oblicz" />
</form>    

<?php
if (isset($messages)) {
    if (count($messages) > 0) {
        echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; background-color: #f88; width:300px;">';
        foreach ($messages as $msg) {
            echo '<li>'.$msg.'</li>';
        }
        echo '</ol>';
    }
}
?>

<?php if (isset($result)) { ?>
<div style="margin: 20px; padding: 10px; background-color: #ff0; width:300px;">
    <?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>
