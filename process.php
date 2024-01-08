<?php 

//ricevere i dati dal form
$paragraph = $_GET["paragraph"];
$wordToCensor = $_GET["wordToCensor"];

//stampare il paragrafo e la sua lunghezza
echo "Paragrafo: $paragraph <br>";
echo "Lunghezza del paragrafo: " . strlen($paragraph) . " caratteri <br>";

//sostituire la parola censurata con ***
$censoredParagraph = str_ireplace($wordToCensor, '***', $paragraph);

//stampare paragrafo censurato e la sua lunghezza
echo "Paragrafo censurato: $censoredParagraph <br>";
echo "Lunghezza del paragrafo censurato: " . strlen($censoredParagraph) . " caratteri";
?>