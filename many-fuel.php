<?php

class Car{
    private $tank;

    public function setTank(float $fuelLevel): self
    {
        $this->tank = $fuelLevel;

        return $this;
    }

    public function ride($float) :  self{
        $this->setTank((1/20)*$float);
        return $this;
    }
}