<?php
namespace Cars;

class Niva extends Automobile
{
    private $chair_type = "leather";
    private $steering_wheel_type = "round";

    public function __construct(string $tr_type)
    {
        $this->transmission_type = $tr_type;
    }
}
