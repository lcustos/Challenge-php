<?php
$month = date('F');
$day = date('d');
$year = date('Y');

$today = function () use ($month, $day, $year):string{
    return "It is $month $day, $year";
};

$isLeapYear = function ($year){
    if($year%4==0){
        return true;
    }else{
        return false;
    }
};