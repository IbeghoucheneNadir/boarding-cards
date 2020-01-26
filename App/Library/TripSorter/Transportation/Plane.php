<?php

namespace App\Library\TripSorter\Transportation;

/**
 * Class Plane
 *
 * @package App\Library\TripSorter\Transportation;
 */

class Plane extends AbstractTranspostation
{

    const MESSAGE_BAGGAGE_TICKET = 'Baggage drop at ticket counter';
    const MESSAGE_NO_BAGGAGE_TICKET = 'Baggage will we automatically transferred from your last leg.';

    /**
     * Return a message for the trip Plane
     *
     * @return string
     */
    public function getMessage(array $array)
    {
        // construct the message
        $message  ='From ';
        $message .= $array['Departure'].', take flight ';
        $message .= $array['Transportation_number'].' to ';
        $message .= $array['Arrival'].'. Gate ';
        $message .= $array['Gate'].', seat ';
        $message .= $array['Seat'].'.';
        
        if(isset($array['Baggage']))
        {
            $message.='Baggage drop at ticket counter '.$array['Baggage'];
        }
        else
        {
            $message.='Baggage will we automatically transferred from your last leg';;
        }

        $message.='.'.PHP_EOL;
     
     return $message;
    }
    
}