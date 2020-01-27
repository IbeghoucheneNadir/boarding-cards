<?php
declare(strict_types=1);
namespace App\Library\TripSorter\Transportation;

/**
 * Class Bus
 *
 * @package App\Library\TripSorter\Transportation;
 */

class Bus extends AbstractTranspostation
{

    /**
     * Return a message for a trip Bus
     *
     * @return string
     */
    public function getMessage(array $array):string
    {
        // constrcut the message
        $message= 'Take the airport bus from '.$array['Departure'].' to '.$array['Arrival'].'. No seat assignment.';
        
        return $message;
    }
}