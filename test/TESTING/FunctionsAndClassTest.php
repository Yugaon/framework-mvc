<?php

declare(strict_types=1);

namespace App;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use App\DiceHand;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
* Test cases for class Guess.
*/
class FunctionsAndClass extends TestCase
{
    /**
    * Construct object and verify that the object has the expected
    * properties, use no arguments.
    */
    public function testForDice()
    {
        $dice = new Dice(6);
        $this->assertInstanceOf("\App\Dice", $dice);

        $res = $dice->roll();
        $this->assertEquals($res, $res);

        $getLast = $dice->getLastRoll();
        $this->assertEquals($res, $getLast);
    }

    public function testForDiceHand()
    {
        $dice = new DiceHand(6);
        $this->assertInstanceOf("\App\DiceHand", $dice);

        $res = $dice->values();
        $this->assertEquals($res, $res);
    }
}
