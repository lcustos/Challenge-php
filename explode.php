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
        for ($i = 0; $i<=strlen($string);$i++){
            if ($string[$i]==$separator){
                array_push($array, $str);
                $str="";
            }else{
                $str.=$string[$i];
            }
        }
    }elseif ($limit==0){
        $max_limit=-1;
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
print_r(explodeWords('La-fonction/explode/est/trop-bien', '/', -2));