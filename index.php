<?php

require_once 'ClasaMea.php';

$clasa = new ClasaMea(1500,5,6,9);
echo $clasa->getFructe().PHP_EOL;
echo $clasa->getLegume().PHP_EOL;
echo $clasa->getLeguminoase().PHP_EOL;
echo $clasa->getDulciuri().PHP_EOL;
echo $clasa->getHello().PHP_EOL;
