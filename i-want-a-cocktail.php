<?php
class Mojito{
    public float $alcoholRate;
    public array $ingredient;
    public int $price;

    public function __construct(float $alcoholRate=0.15, array $ingredient = ["rum", "lime", "sparkling water", "mint", "sugar"], int $price = 8){
        $this->alcoholRate = $alcoholRate;
        $this->ingredient = $ingredient;
        $this->price = $price;
    }
}