<?php 

require_once './HighWay.php';

final class MotorWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50; 

    public function addVehicle(Vehicle $vehicle) {
        
        $this->setcurrentVehicles($vehicle);
        

    }
}

?>