<?php 

require_once './HighWay.php';

final class MotorWay extends HighWay
{
    
    
    protected int $nbLane=4;
    protected int $maxSpeed=130;


    public function addVehicle(Vehicle $vehicle) {
        if (!($vehicle instanceof Bike) && !($vehicle instanceof Skateboard)) {
            $this->setcurrentVehicles($vehicle);
        }

    }
}

?>