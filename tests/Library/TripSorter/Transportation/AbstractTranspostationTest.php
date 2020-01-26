<?php

namespace App\Library\TripSorter\Transportation;

/**
 * Class AbstractVehicule
 *
 * @package App\Library\TripSorter\Transportation;
 */

abstract class AbstractTranspostation
{

    const MESSAGE_FINAL_DESTINATION = 'You have arrived at your final destination.';

    public function __construct()
    {
        
    }
    abstract public function getMessage (array $array);
    
}
