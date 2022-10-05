<?php
class Magic {
    public string $card = 'As';

    public function __construct() {
        echo 'Construct' . PHP_EOL;
    }

    public function __destruct() {
        echo 'Destruct' . PHP_EOL;
    }

    public function __get($name) {
        echo 'Get' . PHP_EOL;
    }

    public function __set($name, $value) {
        echo 'Set' . PHP_EOL;
    }

    public function __isset($name) {
        echo 'Isset' . PHP_EOL;
    }

    public function __toString() {
        echo 'ToString' . PHP_EOL;
    }
}