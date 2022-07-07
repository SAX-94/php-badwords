<?php

$paragrafo = "Sempre caro mi fu quest'ermo colle,
e questa siepe, che da tanta parte
dell'ultimo orizzonte il guardo esclude.
Ma sedendo e mirando, interminati
spazi di là da quella, e sovrumani
silenzi, e profondissima quiete
io nel pensier mi fingo, ove per poco
il cor non si spaura. E come il vento
odo stormir tra queste piante, io quello
infinito silenzio a questa voce
vo comparando: e mi sovvien l'eterno,
e le morte stagioni, e la presente
e viva, e il suon di lei. Così tra questa
immensità s'annega il pensier mio:
e il naufragar m'è dolce in questo mare.";

?>

<p><?php echo $paragrafo ?></p>
<p>Il paragrafo contiene <strong><?php echo strlen($paragrafo) ?></strong> caratteri.</p>

<?php
// Tramite il parametro GET passo la parola da censurare
$word = $_GET["mare"];
?>

<!-- Ristampo il paragrafo e la sua lunghezza dopo aver censurato la parola mare con tre *** -->
<?php if (stripos($paragrafo, "mare") !== false) {
    $paragrafo = str_ireplace("mare", "***", $paragrafo);
}
$str_len = strlen($paragrafo)
?>
<p><?php echo $paragrafo ?></p>
<br>
Ora il paragrafo è lungo <strong><?php echo $str_len ?></strong> caratteri.