<?php

namespace App\Library\TripSorter\Transportation;

/**
 * Class Bus
 *
 * @package App\Library\TripSorter\Transportation;
 */

class Bus extends AbstractTranspostation
{

    /**
     * Return a message for a trip
     *
     * @return string
     */
    public function getMessage(array $array)
    {
        // constrcut the message
        $message= 'Take the airport bus from '.$array['Departure'].' to '.$array['Arrival'].'. No seat assignment.';
        // add end of line 
        $message.=''.PHP_EOL;

        return $message;
    }
}