<?php
function breakLines($string, $int) : string{
    $count=0;
    for ($i=0;$i<strlen($string);$i++){
        if ($count >= $int){
            if ($string[$i]==" "){
                $string[$i]="\n";
                $count = 0;
            }
        }
        $count ++;
    }
    return $string;
}

print breakLines('Title is long Line with words break', 12);