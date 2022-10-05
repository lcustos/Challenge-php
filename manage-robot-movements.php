<?php
function manageMovements($string):array{
    $array = array('R'=>'RIGHT', 'L'=>'LEFT', 'B'=>'BACKWARDS', 'F'=>'FRONT');
    $array2=[];
    for ($i=0;$i<=strlen($string);$i++){
        if ($string[$i]=='R'){
            if ($string[$i-1]=='R'){
                $array2[] = 'RIGHT AGAIN';
            }else{
                $array2[] = $array[$string[$i]];
            }
        }elseif ($string[$i]=='L'){
            if ($string[$i-1]=='L'){
                $array2[] = 'LEFT AGAIN';
            }else{
                $array2[] = $array[$string[$i]];
            }
        }elseif ($string[$i]=='B'){
            if ($string[$i-1]=='B'){
                $array2[] = 'BACKWARDS AGAIN';
            }else{
                $array2[] = $array[$string[$i]];
            }
        }elseif ($string[$i]=='F'){
            if ($string[$i-1]=='F'){
                $array2[] = 'FRONT AGAIN';
            }else{
                $array2[] = $array[$string[$i]];
            }
        }
    }
   return $array2;
}