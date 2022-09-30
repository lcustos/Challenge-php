<?php
function factorial($int){
    if ($int == 1){
        return 1;

    }else{
        return $int * factorial($int-1);
    }
}

print factorial(5);