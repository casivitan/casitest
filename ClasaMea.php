<?php

include 'ClasaMea2.php';

trait ClasaMeaTrait {

    public $fructe = 20;
    public $legume = 33;
    public $leguminoase = 55;
    public $dulciuri = 20;


    public function __construct($fructe, $legume, $leguminoase, $dulciuri)
    {
        $this->fructe = $fructe;
        $this->legume = $legume;
        $this->leguminoase = $leguminoase;
        $this->dulciuri = $dulciuri;
    }

    public function getFructe() {
        return $this->fructe;
    }

    public function setFructe($fructe): void {
        $this->fructe = $fructe;
    }

    public function getLegume() {
        return $this->legume;
    }

    public function setLegume($legume) {
        $this->legume = $legume;
    }

    public function getLeguminoase() {
        return $this->leguminoase;
    }

    public function setLeguminoase($leguminoase) {
        $this->leguminoase = $leguminoase;
    }

    public function getDulciuri() {
        return $this->dulciuri;
    }
    public function setDulciuri($dulciuri) {
        $this->dulciuri = $dulciuri;
    }


}

class ClasaMea {

    use ClasaMeaTrait, ClasaMea2Trait;

}

