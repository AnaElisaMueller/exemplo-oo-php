<?php

require_once('casaGrande.php');
require_once('casaPequena.php');

$minhaCasa = new casaGrande( 15, 25);
$minhaCasa->setCorCasa('amarela');

$minhaCasaP = new casaPequena( 8, 9);

print($minhaCasa->showCasa());
print($minhaCasaP->showCasa());

/*print("<p>Casa Grande</p>");
print('<pre>');
print_r($minhaCasa);
print('<pre>');

print("<p>Casa Pequena</p>");

$minhaCasaP = new casaPequena( 8, 9);

print('<pre>');
print_r($minhaCasaP);
print('<pre>');

*/



