<?php
function calc($string): int{
    return eval("return $string;");
}

print calc('((5+3+(1+2)-9)+1) + (9+1)');