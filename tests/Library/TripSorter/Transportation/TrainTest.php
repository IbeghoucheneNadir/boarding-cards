<?php

use \App\Library\TripSorter\Transportation\Train;
use PHPUnit\Framework\TestCase;
/**
 * Class TrainTest
 *
 * @package tests\Library\TripSorter\Transportation;
 */

class TrainTest extends TestCase
{

    protected $train;

    protected $trip = array(
        'Departure' => 'A',
        'Arrival' => 'B',
        'Transportation' => 'Train',
        'Transportation_number' => '10A',
        'Seat'=> '45B'
    );

    public function testPrintMessage(): void 
    {
        $this->train = new Train();
        $message = $this->train->getMessage($this->trip);
        $this->assertTrue(strlen($message) > 0);
    }
    
}