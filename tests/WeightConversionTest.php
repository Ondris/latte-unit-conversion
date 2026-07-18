<?php


require '../vendor/autoload.php'; 
require '../src/WeightConversion.php';


use Tester\Assert;
use Ondris\LatteUnitConversion\WeightConversion;


class WeightConversionTest extends \Tester\TestCase
{

    
    public static function testKiloToGram(): void
    {
	Assert::same(10000.0, WeightConversion::kiloToGram(10));
	Assert::same(10000.0, WeightConversion::kiloToGram(10.0));
	Assert::same(0.0, WeightConversion::kiloToGram(0));
	Assert::same(-10000.0, WeightConversion::kiloToGram(-10));
	Assert::same(10000.00, WeightConversion::kiloToGram(10, 2));
	Assert::same(10000.000, WeightConversion::kiloToGram(10, 3));
	Assert::same(10000.0000, WeightConversion::kiloToGram(10, 4));
    }
    	
    public function testKiloToPound(): void
    {
	Assert::same(22.0, WeightConversion::kiloToPound(10));
	Assert::same(22.0, WeightConversion::kiloToPound(10.0));
	Assert::same(0.0, WeightConversion::kiloToPound(0));
	Assert::same(-22.0, WeightConversion::kiloToPound(-10));
	Assert::same(22.05, WeightConversion::kiloToPound(10, 2));
	Assert::same(22.046, WeightConversion::kiloToPound(10, 3));
	Assert::same(22.0462, WeightConversion::kiloToPound(10, 4));
    }
    	
    public function testKiloToOunce(): void
    {
	Assert::same(353.0, WeightConversion::kiloToOunce(10));
	Assert::same(353.0, WeightConversion::kiloToOunce(10.0));
	Assert::same(0.0, WeightConversion::kiloToOunce(0));
	Assert::same(-353.0, WeightConversion::kiloToOunce(-10));
	Assert::same(352.74, WeightConversion::kiloToOunce(10, 2));
	Assert::same(352.740, WeightConversion::kiloToOunce(10, 3));
	Assert::same(352.7400, WeightConversion::kiloToOunce(10, 4));
    }
	
	
    public function testGramToKilo(): void
    {
	Assert::same(2.0, WeightConversion::gramToKilo(1500));
	Assert::same(2.0, WeightConversion::gramToKilo(1500.0));
	Assert::same(0.0, WeightConversion::gramToKilo(0));
	Assert::same(-5.0, WeightConversion::gramToKilo(-5000));
	Assert::same(0.01, WeightConversion::gramToKilo(10, 2));
	Assert::same(0.010, WeightConversion::gramToKilo(10, 3));
	Assert::same(0.0100, WeightConversion::gramToKilo(10, 4));
    }
	
    public function testGramToPound(): void
    {
	Assert::same(2.0, WeightConversion::gramToPound(1000));
	Assert::same(2.0, WeightConversion::gramToPound(1000.0));
	Assert::same(0.0, WeightConversion::gramToPound(0));
	Assert::same(-2.0, WeightConversion::gramToPound(-1000));
	Assert::same(2.21, WeightConversion::gramToPound(1000, 2));
	Assert::same(2.205, WeightConversion::gramToPound(1000, 3));
	Assert::same(2.2050, WeightConversion::gramToPound(1000, 4));
    }
	
    public function testGramToOunce(): void
    {
	Assert::same(35.0, WeightConversion::gramToOunce(1000));
	Assert::same(35.0, WeightConversion::gramToOunce(1000.0));
	Assert::same(0.0, WeightConversion::gramToOunce(0));
	Assert::same(-35.0, WeightConversion::gramToOunce(-1000));
	Assert::same(35.27, WeightConversion::gramToOunce(1000, 2));
	Assert::same(35.274, WeightConversion::gramToOunce(1000, 3));
	Assert::same(35.2740, WeightConversion::gramToOunce(1000, 4));
    }
	
	
    public function testPoundToKilo(): void
    {
	Assert::same(454.0, WeightConversion::poundToKilo(1000));
	Assert::same(454.0, WeightConversion::poundToKilo(1000.0));
	Assert::same(0.0, WeightConversion::poundToKilo(0));
	Assert::same(-454.0, WeightConversion::poundToKilo(-1000));
	Assert::same(453.59, WeightConversion::poundToKilo(1000, 2));
	Assert::same(453.592, WeightConversion::poundToKilo(1000, 3));
	Assert::same(453.5924, WeightConversion::poundToKilo(1000, 4));
    }
	
    public function testPoundToGram(): void
    {
	Assert::same(4536.0, WeightConversion::poundToGram(10));
	Assert::same(4536.0, WeightConversion::poundToGram(10.0));
	Assert::same(0.0, WeightConversion::poundToGram(0));
	Assert::same(-4536.0, WeightConversion::poundToGram(-10));
	Assert::same(4535.92, WeightConversion::poundToGram(10, 2));
	Assert::same(4535.924, WeightConversion::poundToGram(10, 3));
	Assert::same(4535.9237, WeightConversion::poundToGram(10, 4));
    }

    public function testPoundToOunce(): void
    {
	Assert::same(160.0, WeightConversion::poundToOunce(10));
	Assert::same(160.0, WeightConversion::poundToOunce(10.0));
	Assert::same(0.0, WeightConversion::poundToOunce(0));
	Assert::same(-160.0, WeightConversion::poundToOunce(-10));
	Assert::same(160.00, WeightConversion::poundToOunce(10, 2));
	Assert::same(160.000, WeightConversion::poundToOunce(10, 3));
	Assert::same(160.0000, WeightConversion::poundToOunce(10, 4));
    }
	
	
    public function testOunceToKilo(): void
    {
	Assert::same(3.0, WeightConversion::ounceToKilo(100));
	Assert::same(3.0, WeightConversion::ounceToKilo(100.0));
	Assert::same(0.0, WeightConversion::ounceToKilo(0));
	Assert::same(-3.0, WeightConversion::ounceToKilo(-100));
	Assert::same(2.83, WeightConversion::ounceToKilo(100, 2));
	Assert::same(2.835, WeightConversion::ounceToKilo(100, 3));
	Assert::same(2.8350, WeightConversion::ounceToKilo(100, 4));
    }

    public function testOunceToGram(): void
    {
	Assert::same(2835.0, WeightConversion::ounceToGram(100));
	Assert::same(2835.0, WeightConversion::ounceToGram(100.0));
	Assert::same(0.0, WeightConversion::ounceToGram(0));
	Assert::same(-2835.0, WeightConversion::ounceToGram(-100));
	Assert::same(2834.95, WeightConversion::ounceToGram(100, 2));
	Assert::same(2834.950, WeightConversion::ounceToGram(100, 3));
	Assert::same(2834.9500, WeightConversion::ounceToGram(100, 4));
    }
	
    public function testOunceToPound(): void
    {
	Assert::same(6.0, WeightConversion::ounceToPound(100));
	Assert::same(6.0, WeightConversion::ounceToPound(100.0));
	Assert::same(0.0, WeightConversion::ounceToPound(0));
	Assert::same(-6.0, WeightConversion::ounceToPound(-100));
	Assert::same(6.25, WeightConversion::ounceToPound(100, 2));
	Assert::same(6.250, WeightConversion::ounceToPound(100, 3));
	Assert::same(6.2500, WeightConversion::ounceToPound(100, 4));
    }
}

(new WeightConversionTest())->run();