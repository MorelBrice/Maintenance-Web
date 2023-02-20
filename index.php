<?php
$doc = new DOMDocument();
$doc->loadHTMLFile("Quizz_formulaire_connexion.html");
echo $doc->saveHTML();
?>