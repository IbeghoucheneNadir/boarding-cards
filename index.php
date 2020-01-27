<?php
// Define path to source directory
defined('SOURCE_FILE_PATH') || define('SOURCE_FILE_PATH', __DIR__ . '/sourcefile/');
require "vendor/autoload.php";

// Load TransportationFactory
use App\Library\TripSorter\Transportation\TransportationFactory;

    const MESSAGE_FINAL_DESTINATION = 'You have arrived at your final destination.';

    // Load File Json source
    $sourceFile = SOURCE_FILE_PATH . 'cards.json';
    $JsonParser = new App\Library\ParserJson\Reader\Json();
    $tripCollection = $JsonParser::getArrayByJsonFile($sourceFile);

    $text = '';

    foreach ($tripCollection as $value) {
        $text .= TransportationFactory::getTransportation($value['Transportation'])->getMessage($value).'*';
    }
    $text .= MESSAGE_FINAL_DESTINATION;
    $itemList = $JsonParser::getArrayByString($text);
    $jsonItemList= $JsonParser::encode($itemList);

    echo $jsonItemList;



