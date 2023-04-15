<?php

    $fructeLista = array('Pepene Rosu', 'Banane', 'Mere', 'Portocale', 'Grafeuit', 'Pere');
    $legumeLista = array('Cartofi', 'Castraveti', 'Rosii', 'Ceapa', 'Ardei');
    $leguminoaseLista = array('Mazare', 'Spanac');
    $dulciuriLista = array('Ciocolata', 'Prajituri', 'Chipsuri', 'Napolitane');

//    var_dump($fructeLista).PHP_EOL;
//    var_dump($legumeLista).PHP_EOL;

    if (in_array('Pepene Rosu', $fructeLista)) {
        echo "Elementul este in lista";
    } else {
        echo "Elementul nu este in lista";
    }

    if (is_array($legumeLista)) {
        echo "LegumeLista este o lista";
    } else {
        echo "LegumeLista Nu este o lista".PHP_EOL;
    }

    array_unshift($fructeLista, 'Ciorba');
    array_unshift($legumeLista, 'Supa');
    array_unshift($leguminoaseLista, 'Supa');
    array_unshift($dulciuriLista, 'Cozonac');

    var_dump($fructeLista).PHP_EOL;
    var_dump($legumeLista).PHP_EOL;
    var_dump($leguminoaseLista).PHP_EOL;
    var_dump($dulciuriLista).PHP_EOL;



