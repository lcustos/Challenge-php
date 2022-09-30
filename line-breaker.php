<?php
function breakLines($string, $size) : string{
    $count =1;
    for($i=0;$i<strlen($string)/$size;$i++)
    {
        $position = strrpos(substr($string,($count-1)*$size,$count*$size)," ");
        $string[$position+$size*$count] = "\n";
        $count++;
    }
    return $string;
}