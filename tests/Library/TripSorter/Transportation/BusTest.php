<?php
declare(strict_types=1);
use \App\Library\TripSorter\Transportation\Bus;
use PHPUnit\Framework\TestCase;

/**
 * Class BusTest
 *
 * @package test\Library\TripSorter\Transportation;
 */

class BusTest extends TestCase
{

    protected $bus;

    protected $trip = array(
        'Departure' => 'A',
        'Arrival' => 'B',
        'Transportation' => 'Bus',
    );
    

    public function testGetMessage(): void 
    {
        $this->bus = new Bus();
        $message = $this->bus->getMessage($this->trip);
        $this->assertTrue(strlen($message) > 0);
    }

}