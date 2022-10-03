<?php
function mul($x)
{
    return function ($y) use ($x) {
        return $x * $y;
    };
}

function add($x)
{
    return function ($y) use ($x) {
        return $x + $y;
    };
}

function sub($x)
{
    return function ($y) use ($x) {
        return $x - $y;
    };
}

function f():array{
    $array = array('+'=>function($a,$b){return $a+$b;},'-'=>function($a,$b){return $a-$b;},'*'=>function($a,$b){return $a*$b;});
    return $array;
}

