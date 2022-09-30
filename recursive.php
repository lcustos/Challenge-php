<?php
function factorial(int $int):float{
    if ($int == 1){
        return 1;
    }else{
        return $int * factorial($int-1);
    }
}

print factorial(5);