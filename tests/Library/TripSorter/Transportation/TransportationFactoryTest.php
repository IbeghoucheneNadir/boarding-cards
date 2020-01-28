<?php
declare(strict_types=1);
use \App\Library\TripSorter\Transportation\TransportationFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class TranspostationFactoryTest
 *
 * @package tests\Library\TripSorter\Transportation;
 */
class TransportationFactoryTest extends TestCase {

    protected $train;
    protected $bus;
    protected $plane;
    protected $transpostationFacroty;

    public function testGetTransportation(): void {

        $this->train = "Train";
        $this->bus = "Bus";
        $this->plane = "Plane";

        $this->transpostationFacroty = new TransportationFactory();
        $instanceOfTrain = $this->transpostationFacroty::getTransportation($this->train);
        $instanceOfBus   = $this->transpostationFacroty::getTransportation($this->bus);
        $instanceOfPlane = $this->transpostationFacroty::getTransportation($this->plane);

        $this->assertInstanceOf('App\Library\TripSorter\Transportation\AbstractTranspostation', $instanceOfTrain);
        $this->assertInstanceOf('App\Library\TripSorter\Transportation\AbstractTranspostation', $instanceOfBus);
        $this->assertInstanceOf('App\Library\TripSorter\Transportation\AbstractTranspostation', $instanceOfPlane);
    }
}
