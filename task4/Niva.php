<?php
namespace Cars;

class Niva extends Automobile
{
    public function __construct(string $tr_type)
    {
        $this->transmission_type = $tr_type;
    }
}
