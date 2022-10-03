<?php
function add ($int,$int2){
    return $int + $int2;
};
function sub ($int,$int2){
    return $int - $int2;
};
function mul ($int,$int2){
    return $int * $int2;
};

$f = function ():array {
    return $array =["+"=>add(), "-"=>sub(),"*"=>mul()];
};