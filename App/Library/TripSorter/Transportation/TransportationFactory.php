<?php
declare(strict_types=1);
namespace App\Library\TripSorter\Transportation;

/**
 * Class TranspostationFactory
 *
 * @package App\Library\TripSorter\Transportation;
 */

class TransportationFactory {

    public static function getTransportation(string $type): AbstractTranspostation {

        switch ($type) {
            case 'Train' :
                return new Train();
            case 'Bus' :
                return new Bus();
            case 'Plane' :
                return new  Plane();
            default:
                throw new \Exception('Type is not valid');
        }
    }

}
