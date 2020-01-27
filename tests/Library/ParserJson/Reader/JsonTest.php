<?php

declare(strict_types=1);

use App\Library\ParserJson\Reader\Json;
use PHPUnit\Framework\TestCase;
/**
 * Class JsonTest
 *
 * @package tests\ParserJson\Reader
 */

class JsonTest extends TestCase {

    public function testGetArrayByJsonFile(): void {

        $this->parser = new Json();

        $sourceFile = realpath('sourcefile/cards.json');

        $data = $this->parser::getArrayByJsonFile($sourceFile);

        $this->assertTrue(is_array($data));
    }

    public function testGetArrayByString(): void {

        $text= "mot1 * mot2 * mot 3 ";
        
        $this->parser = new Json();

        $array = $this->parser::getArrayByString($text);

        $this->assertTrue(is_array($array));
    }

    public function testEncode(): void {
        
        $array=array("first sentence", "seconde phrase", "troisième phrase" );
                
        $this->parser = new Json();

        $string = $this->parser::encode($array);

        $this->assertTrue(is_string($string));
    }

}
