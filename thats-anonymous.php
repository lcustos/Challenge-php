<?php
$month = date('F');
$day = date('d');
$year = date('Y');

$today = function () use ($month, $day, $year){
    echo "It is $month $day, $year";
};

$today();

$isLeapYear = function () use ($year){
    if($year%4==0){
        echo true;
    }else{
        echo false;
    }
};

$isLeapYear();