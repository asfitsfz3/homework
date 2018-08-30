<?php
namespace Cars;

trait Engine
{
    private $status = "turned_off";
    private $power = 15;
    private $temperature = 25;
    private $speed = 0;

    private function cooling()
    {
        $this->temperature = $this->temperature - 10;
        echo " Включается охлаждение!!";
    }

    public function turnOn($distance, $spd)
    {
        $this->status = "turned_on";
        echo "Двигатель включен" . PHP_EOL;
        $this->speed = $spd;

        if ($this->speed >= $this->power*2) {
            $this->speed = $this->power*2;
        }

        for ($i = 0; $i <= $distance; $i = $i+10) {
            $this->temperature = $this->temperature + 5;

            echo "Скорость:". $this->speed . "м/с Дистанция:" . $i . "м Температура: ";
            echo $this->temperature;

            if ($this->temperature >= 90) {
                $this->cooling();
            }
            echo PHP_EOL;
        }
    }

    public function turnOff()
    {
        $this->status = "turned_off";
        echo "Двигатель выключен" . PHP_EOL;
        $this->speed = 0;
    }
}
