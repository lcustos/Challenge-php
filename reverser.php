<?php
function reverse(string $str): string{
    return strrev($str);
}

function isPalindrome($string):bool
{
    $len = strlen($string);
    $length = !($len&1)? $len/2-1:$len/2;
    for($i=0;$i<$length;$i++)
    {
        if($string[$i]!=$string[$len-$i-1])
        {
            return false;
        }
    }
    return true;
}