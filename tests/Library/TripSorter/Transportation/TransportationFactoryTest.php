<?php

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


    public function testGetTransportation () {

            $this->train="Train";
            $this->bus="Bus";
            $this->plane="Plane";

            $this->transpostationFacroty = new TransportationFactory();
            $instanceTrain=$this->transpostationFacroty::getTransportation($this->train);
            $instanceBus=$this->transpostationFacroty::getTransportation($this->bus);
            $instancePlane=$this->transpostationFacroty::getTransportation($this->plane);


            $this->assertInstanceOf('App\Library\TripSorter\Transportation\AbstractTranspostation',$instanceTrain);
            $this->assertInstanceOf('App\Library\TripSorter\Transportation\AbstractTranspostation',$instanceBus);
            $this->assertInstanceOf('App\Library\TripSorter\Transportation\AbstractTranspostation',$instancePlane);

        }
    }

