<?php
function dnaDiff($str1, $str2):int|bool {
    $diff=0;
    if (strlen($str1)!=strlen($str2)) return false;
    for ($i=0;$i<strlen($str1);$i++) {
        if ($str1[$i]!=$str2[$i]) {
            $diff++;
        }
    }
    return $diff;
}
$str1='CATCGTAATGACGGCCT';
$str2='CATCGTAATGACGGC';

print(dnaDiff($str1, $str2));