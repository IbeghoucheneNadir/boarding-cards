<?php
declare(strict_types=1);
namespace App\Library\ParserJson\Reader;

/**
 * Class Json
 *
 * @package App\Library\ParserJson\Reader
 */
class Json {

    /**
     * Read a file and create an array
     *
     * @param string $filename
     *
     * @return array
     */
    public static function getArrayByJsonFile($filename): array {
        return json_decode(file_get_contents($filename), true);
    }

    /**
     * Read a string and create an array
     *
     * @param string text
     *
     * @return array of string
     */
    public static function getArrayByString(string $text): array {
        $delimiter = "*";
        return explode($delimiter, $text);
    }

    /**
     * Read a array and create an String
     *
     * @param array : $listOfCards
     *
     * @return string : Returns the JSON representation of a value
     */
    public static function encode(array $array): string {
        return  json_encode($array);  // or  json_encode($array,JSON_FORCE_OBJECT);
    }
}
