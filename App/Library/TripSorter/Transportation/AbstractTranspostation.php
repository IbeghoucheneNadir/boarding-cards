<?php
declare(strict_types=1);
namespace App\Library\TripSorter\Transportation;

/**
 * Class AbstractVehicule
 *
 * @package App\Library\TripSorter\Transportation;
 */

abstract class AbstractTranspostation
{
    public function __construct()
    {
        
    }
    abstract public function getMessage (array $array):string;   
}
