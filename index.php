<?php

// Define path to source directory
defined('SOURCE_FILE_PATH')
|| define('SOURCE_FILE_PATH', __DIR__ . '/sourcefile/');

require "vendor/autoload.php";

use App\Library\TripSorter\Transportation\TransportationFactory;


    $sourceFile = SOURCE_FILE_PATH . 'cards.json';

    $JsonParser = new App\Library\ParserJson\Reader\Json();

    $tripCollection = $JsonParser::getArrayByJsonFile($sourceFile);


    $i=1;
    echo 'Source File : ' . $sourceFile . PHP_EOL;
    foreach($tripCollection  as $value){

        echo TransportationFactory::getTransportation($value['Transportation'])->getMessage($value);
        if($i == count($tripCollection))
        echo TransportationFactory::getTransportation($value['Transportation'])::MESSAGE_FINAL_DESTINATION . PHP_EOL;
        $i++;
    }


