<?php

class Car{
    private int $tank;

    public function setFuelLevel(float $fuelLevel): self
    {
        $this->tank = $fuelLevel;

        return $this;
    }

    public function ride($float) :  self{
        $this->setFuelLevel(1/20)*$float;
        return $this;
    }
}