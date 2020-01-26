<?php

use App\Library\ParserJson\Reader\Json;
use PHPUnit\Framework\TestCase;
/**
 * Class JsonTest
 *
 * @package tests\ParserJson\Reader
 */
class JsonTest extends TestCase
{

    public function testGetArrayByJsonFile()
    {

        $JsonParser = new App\Library\ParserJson\Reader\Json();

        $sourceFile=realpath('sourcefile/cards.json');
        
        $data = $JsonParser::getArrayByJsonFile($sourceFile);

        $this->assertTrue(is_array($data));
    }
}
