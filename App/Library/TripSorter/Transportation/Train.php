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
     * Return a message for the trip Train
     * @return string
     */
    public function getMessage(array $array)
    {
        // construct the message
        $message = 'Take train ';
        $message .= $array['Transportation_number']. ' from '.
        $message .= $array['Departure'].' to ';
        $message .= $array['Arrival'].'. Sit in seat ';
        $message .= $array['Seat'];
        $message.='.'.PHP_EOL;
        return $message;
    }
    
}