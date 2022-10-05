<?php
interface PoolTempsInterface
{
    public function getActualTemp(): int;

    public function getLastDaysTemps(): array;

    public function setHeater($bool): void;
}
class PoolTemps implements PoolTempsInterface{
    public $isActive = false;
    private int $temp;
    private array $DaysTemp;

    public function __construct($int, $array){
        $this->temp = $int;
        $this->DaysTemp = $array;
    }

    public function getActualTemp():int
    {
        return $this->temp;
    }

    public function getLastDaysTemps():array
    {
        return $this->DaysTemp;
    }

    public function setHeater($bool):void
    {
        if ($this->isActive === false) {
        $this->isActive = $bool;
        }
    }

    public function activateHeater()
    {
        if ($this->isActive === false) {
            if ($this->temp >= 25) {
                if ((array_sum($this->DaysTemp)/7)>20){
                    $this->isActive = true;
                }
            }
        }

    }
}

$poolTemps = new PoolTemps(25, [19, 20, 21, 16, 19, 23, 20]);
$poolTemps->activateHeater();

var_dump($poolTemps->isActive); // false