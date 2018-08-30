<?php
namespace Cars;

?>
<pre>
<?php
require "DriveForward.php";
require "DriveForwardFirst.php";
require "DriveForwardSecond.php";
require "DriveBack.php";
require "DriveNeutral.php";
require "TransmissionAuto.php";
require "TransmissionManual.php";
require "Engine.php";
require "Automobile.php";
require "Niva.php";

$some_car = new Niva("manual");
$some_car->startMotion(200, 18, "forward");
