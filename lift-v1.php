<?php
function getFloor(int $currentFloor, ?int $requestFloor,array $buttonCalled): ?int{
    if ($requestFloor !== null){
        return $requestFloor;
    }
    if (!empty($buttonCalled)){
        return nearestFloor($currentFloor, $buttonCalled);
    }
    return $currentFloor;

}

function nearestFloor(int $a, array $b): int
{
    $c = array_map(function ($x) use ($a) {
        return abs($x - $a);
    }, $b);
    return $b[array_search(min($c), $c)];
}

function getDirection(int $currentFloor, ?int $requestFloor,array $buttonCalled):int{
    if (getFloor($currentFloor,$requestFloor,$buttonCalled)>$currentFloor){
        return 1;
    }elseif (getFloor($currentFloor,$requestFloor,$buttonCalled)<$currentFloor){
        return -1;
    }
    return 0;
}