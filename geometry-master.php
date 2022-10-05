<?php

abstract class AbstractGeometry{
    abstract public function area();
    abstract public function perimeter();
}

class Rectangle extends AbstractGeometry{
    public $width;
    public $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float|int
    {
        return $this->width * $this->height ;
    }
    public function perimeter(): float|int
    {
        return ($this->width * $this->height)*2;
    }
}

class Square extends AbstractGeometry{
    public $width;

    public function __construct($width) {
        $this->width = $width;
    }

    public function area(): int
    {
        return $this->width **2;
    }
    public function perimeter(): float|int
    {
        return $this->width * 4;
    }

}

class Triangle extends AbstractGeometry{
    public function __construct($a,$b,$c) {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
    }
    public function perimeter() {
        return $this->a + $this->b + $this->c;
    }

    public function area(): float
    {
        $P= $this->a + $this->b + $this->c;
        $p=$P/2;
        return sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));

    }

}

print(new Rectangle(6,3))->perimeter();