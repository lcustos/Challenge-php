<?php
function calc($string): int{
    return eval("return $string;");
}