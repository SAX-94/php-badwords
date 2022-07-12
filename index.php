<?php

$paragrafo = "S’i’ fosse foco, arderei ’l mondo; 
s’i’ fosse vento, lo tempesterei; 
s’i’ fosse acqua, i’ l’annegherei; 
s’i’ fosse Dio, mandereil’en profondo;
s’i’ fosse papa, sare’ allor giocondo, 
ché tutti cristïani imbrigherei; 
s’i’ fosse ’mperator, sa’ che farei? 
A tutti mozzarei lo capo a tondo.
S’i’ fosse morte, andarei da mio padre; 
s’i’ fosse vita, fuggirei da lui: 
similemente farìa da mi’ madre.
S’i’ fosse Cecco, com’i’ sono e fui, 
torrei le donne giovani e leggiadre: 
e vecchie e laide lasserei altrui.";

?>

<h2>Censura la parola "fosse" nel seguente paragrafo, e conta quanti caratteri contiene prima e dopo:</h2>

<p><?php echo $paragrafo ?></p>
<p>○ Il paragrafo contiene <strong><?php echo strlen($paragrafo) ?></strong> caratteri.</p>

<?php
// Tramite il parametro GET passo la parola da censurare
$word = $_GET["fosse"];
?>

<!-- Ristampo il paragrafo e la sua lunghezza dopo aver censurato la parola mare con tre *** -->
<?php if (stripos($paragrafo, "fosse") !== false) {
    $paragrafo = str_ireplace("fosse", "***", $paragrafo);
}
$str_len = strlen($paragrafo)
?>
<p><?php echo $paragrafo ?></p>
<br>
<p>○ Ora il paragrafo è lungo <strong><?php echo $str_len ?></strong> caratteri.</p>