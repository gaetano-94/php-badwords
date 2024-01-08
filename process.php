<?php 

//ricevere i dati dal form
$paragraph = $_GET["paragraph"];
$wordToCensor = $_GET["wordToCensor"];

//stampare il paragrafo e la sua lunghezza
echo "Paragrafo: $paragraph <br>";
echo "Lunghezza del paragrafo: " . strlen($paragraph) . " caratteri";
?>