<?php
function factorial(int $int):int|float{
    if ($int == 1){
        return 1;
    }else{
        return $int * factorial($int-1);
    }
}