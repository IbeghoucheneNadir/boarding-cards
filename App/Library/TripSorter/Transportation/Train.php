<?php

namespace App\Library\TripSorter\Transportation;

/**
 * Class Train
 *
 * @package App\Library\TripSorter\Transportation;
 */

class Train extends AbstractTranspostation
{
    /**
     * Return a message for the trip, defined in TransportationInterface
     *
     * @return string
     */
    public function getMessage(array $array)
    {
        // construct the message
        $message = 'Take train '.$array['Transportation_number']. ' from '.$array['Departure'].' to '.$array['Arrival'].'. Sit in seat '.$array['Seat'];
        // add end of line 
        $message.='.'.PHP_EOL;
        return $message;
    }
    
}