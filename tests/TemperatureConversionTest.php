<?php


require '../vendor/autoload.php'; 
require '../src/TemperatureConversion.php';


use Tester\Assert;
use Ondris\LatteUnitConversion\TemperatureConversion;


class TemperatureConversionTest extends \Tester\TestCase
{

    
    public static function testFahrenheitToCelsius(): void
    {
	Assert::same(-40.0, TemperatureConversion::fahrenheitToCelsius(-40));
	Assert::same(-18.0, TemperatureConversion::fahrenheitToCelsius(0));
	Assert::same(10.0, TemperatureConversion::fahrenheitToCelsius(50));
	Assert::same(10.0, TemperatureConversion::fahrenheitToCelsius(50.0));
    }
    	
    public function testCelsiusToFahrenheit(): void
    {
	Assert::same(32.0, TemperatureConversion::celsiusToFahrenheit(0));
	Assert::same(68.0, TemperatureConversion::celsiusToFahrenheit(20));
	Assert::same(77.0, TemperatureConversion::celsiusToFahrenheit(25));
	Assert::same(212.0, TemperatureConversion::celsiusToFahrenheit(100));
	Assert::same(212.0, TemperatureConversion::celsiusToFahrenheit(100.0));
    }
}

(new TemperatureConversionTest())->run();