<?php
function explodeWords($string, $separator=' ', $limit=PHP_INT_MAX):array{
    $array=[];
    $str="";
    if ($limit>0){
        $max_limit=0;
        for ($i = 0; $i<=strlen($string);$i++){
            if ($limit-1>$max_limit){
                if ($string[$i]==$separator){
                    $max_limit +=1;
                    array_push($array, $str);
                    $str="";
                }
                else {
                    $str .= $string[$i];
                }
            }else{
                $str.=$string[$i];
            }
        }
        array_push($array, $str);
    }elseif ($limit<0){
        $max_limit=0;
        for ($i = 0; $i<=strlen($string);$i++){
            if ($limit<$max_limit){
                if ($string[$i]==$separator){
                    $max_limit -=1;
                    array_push($array, $str);
                    $str="";
                }
                else {
                    $str .= $string[$i];
                }
            }else{
                if ($string[$i]==$separator){
                    array_push($array, $str);
                    $str="";
                    return $array;
                }else {
                    $str .= $string[$i];
                }
            }
        }
        array_push($array, $str);
    }elseif ($limit==0){
        return explodeWords($string,$separator,1);
    }else{
        for ($i = 0; $i<=strlen($string);$i++){
            if ($string[$i]==$separator){
                array_push($array, $str);
                $str="";
            }else{
                $str.=$string[$i];
            }
        }
        array_push($array, $str);
    }
    return $array;
}
