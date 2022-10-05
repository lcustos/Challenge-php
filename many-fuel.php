<?php

class Car {
    private $tank;

    public function getTank(): float {
        return $this->tank;
    }

    public function setTank(float $tank): Car {
        $this->tank = $tank;
        return $this;
    }

    public function addFuel(float $fuel): Car {
        $this->tank += $fuel;
        return $this;
    }

    public function ride(float $distance): Car {
        $this->tank -= $distance / 20;
        return $this;
    }
}