<?php
function breakLines($string, $int) : string{
    $count=0;
    $space=0;
    for ($i=0;$i<strlen($string);$i++){
        $count ++;
        if ($string[$i] == " "){
            $space = $i;
        }
        if ($count == $int+1){
            if ($string[$i]==" ") {
                $string[$i] = "\n";
                $count = 0;
            }else{
                $string[$space] = "\n";
                $count = 0;
            }
        }
    }
    return $string;
}