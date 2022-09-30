<?php
function breakLines($string, $int) : string{
    $count=0;
    for ($i=0;$i<strlen($string);$i++){
        if ($count >= 15){
            if ($string[$i]==" "){
                $string[$i]="\n";
                $count = 0;
            }
        }
        $count ++;
    }
    return $string;
}
