<?php

trait ClasaMea2Trait {

    public $hello;
    public function hello() {
        echo "Salutare";
    }

    public function getHello() {
        return $this->hello();
    }

    public function setHello($hello) {
        $this->hello = $hello;
    }
}

