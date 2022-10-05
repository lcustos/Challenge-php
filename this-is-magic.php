<?php
class Magic {
    public string $card = 'As';

    public function construct() {
        echo 'Construct' . PHP_EOL;
    }

    public function destruct() {
        echo 'Destruct' . PHP_EOL;
    }

    public function get($name) {
        echo 'Get' . PHP_EOL;
    }

    public function set($name, $value) {
        echo 'Set' . PHP_EOL;
    }

    public function isset($name) {
        echo 'Isset' . PHP_EOL;
    }

    public function toString() {
        echo 'ToString' . PHP_EOL;
    }
}