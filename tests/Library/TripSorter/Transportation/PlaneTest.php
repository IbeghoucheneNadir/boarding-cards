<?php
declare(strict_types=1);
use \App\Library\TripSorter\Transportation\Plane;
use PHPUnit\Framework\TestCase;
/**
 * Class PlaneTest
 *
 * @package tests\Library\TripSorter\Transportation;
 */

class PlaneTest extends TestCase
{

    protected $plane;

    protected $trip = array(
        'Departure' => 'A',
        'Arrival' => 'B',
        'Transportation' => 'Plane',
        'Transportation_number' => '10A',
        'Seat' => '10A',
        'Gate' => '10A',
    );

    public function testGetMessage() : void 
    {
        $this->plane = new Plane();
        $message = $this->plane->getMessage($this->trip);
        $this->assertTrue(strlen($message) > 0);
    }
}
   
    
