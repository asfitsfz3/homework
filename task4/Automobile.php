<?php
namespace Cars;

class Automobile
{
    use Engine, TransmissionManual, TransmissionAuto {
        TransmissionManual::switchToBack insteadof TransmissionAuto;
        TransmissionManual::switchToNeutral insteadof TransmissionAuto;
    }

    public $transmission_type = "manual";
    public function startMotion($distance, $speed, $direction)
    {
        if ($direction =="forward") {
            if ($this->transmission_type == "manual") {
                if (($speed > 0) and ($speed <= 20)) {
                    $this->switchToForwardFirst();
                } elseif ($speed > 20) {
                    $this->switchToForwardSecond();
                } else {
                    exit;
                }

            } elseif ($this->transmission_type == "auto") {
                $this->switchToForward();
            } else {
                exit;
            }
        } elseif ($direction == "back") {
            $this->switchToBack();
        } else {
            exit;
        }

        $this->turnOn($distance, $speed);
        $this->turnOff();
        $this->switchToNeutral();
    }
}
