<?php
function f():array{
    $array = array('+'=>function($a,$b){return $a+$b;},'-'=>function($a,$b){return $a-$b;},'*'=>function($a,$b){return $a*$b;});
    return $array;
}

