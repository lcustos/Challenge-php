<?php
function factorial(int $int):int{
    if ($int == 1){
        return 1;
    }else{
        return intval($int * factorial($int-1));
    }
}

print factorial(189.189);