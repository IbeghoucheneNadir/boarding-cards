<?php

namespace App\Library\ParserJson\Reader;

/**
 * Class Json
 *
 * @package App\Library\ParserJson\Reader
 */
class Json
{
    /**
     * Read a file and create an array
     *
     * @param string $filename
     *
     * @return array
     */
    public static function getArrayByJsonFile($filename)
    {
            return json_decode(file_get_contents($filename),true);
    }
}
