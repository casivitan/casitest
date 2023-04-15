<?php

class Calculator {

    public $Andreea;
    public $Marian;

    public function inmultire($Andreea, $Marian) {
        return $Andreea * $Marian;
    }
    public function adunare($Andreea, $Marian) {
        return $Andreea + $Marian;
    }
    public function impartire($Andreea, $Marian) {
        return $Andreea / $Marian;
    }
    public function scadere($Andreea, $Marian) {
        return $Andreea - $Marian;
    }

    public function getInmultire() {
        return $this->inmultire();
    }
    public function getAdunare() {
        return $this->adunare();
    }
    public function getImpartire() {
        return $this->impartire();
    }
    public function getScadere() {
        return $this->scadere();
    }

}

$calculator = new Calculator();
$inmultire = $calculator->inmultire(5,25);
$adunare = $calculator->adunare(20,70);
$impartire = $calculator->impartire(10,2);
$scadere = $calculator->scadere(100,10);
echo "Andreea si Marian inmultit au impreuna " . $inmultire . " de mere".PHP_EOL;
echo "Andreea si Marian adunat au impreuna " . $adunare . " de mere".PHP_EOL;
echo "Andreea si Marian impartit au impreuna " . $impartire . " de mere".PHP_EOL;
echo "Andreea si Marian scazut au impreuna " . $scadere . " de mere".PHP_EOL;

if ($inmultire > $impartire) {
    echo "Rezultatul inmultirii este mai mare";
} else {
    echo "Rezultat inmultirii nu este mai mare";
}

if ($adunare > $scadere) {
    echo "Rezultatul adunarii este mai mare";
} else {
    echo "Rezultatul adunarii nu este mai mare";
}

if ($adunare == $scadere) {
    echo "Rezultatul adunarii este egal cu cel al scaderii";
} else {
    echo "Rezultatul adunarii nu este este egal cu cel al scaderii";
}

class Calculator2 extends Calculator {

    public $Cristian;
    public $Razvan;

    function getAndreeaPlusCristian($Andreea, $Cristian) {
        return $Andreea + $Cristian;
    }
}

$Rezult = new Calculator2();
echo $Rezult->getAndreeaPlusCristian(2,6).PHP_EOL;

// Gata cu clasele, acum liste iar


$a = array(2, 2, 2, 2);
$b = array(3, 3, 3);
echo "Suma listei A este: " . array_sum($a).PHP_EOL;
echo "Suma listei B este: " . array_sum($b).PHP_EOL;

if (array_sum($a) > array_sum($b))
{
echo "Produsul listei A este mai mare ca si lista B ";
}

else {
    echo "Produsul listei A nu este mai mare ca si lista B";
}

echo "Produsul listei A este: " . array_product($a) . PHP_EOL;
echo "Produsul listei A este: " . array_product($b) . PHP_EOL;
