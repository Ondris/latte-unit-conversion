<?php


require '../vendor/autoload.php'; 
require '../src/LengthConversion.php';


use Tester\Assert;
use Ondris\LatteUnitConversion\LengthConversion;


class LengthConversionTest extends \Tester\TestCase
{

    
    public static function testMeterToKilo(): void
    {
	Assert::same(2.0, LengthConversion::meterToKilo(1500));
	Assert::same(2.0, LengthConversion::meterToKilo(1500.0));
	Assert::same(-2.0, LengthConversion::meterToKilo(-1500));
	Assert::same(1.50, LengthConversion::meterToKilo(1500, 2));
	Assert::same(1.500, LengthConversion::meterToKilo(1500, 3));
	Assert::same(1.5000, LengthConversion::meterToKilo(1500, 4));
    }
    	
    public function testMeterToInch(): void
    {
	Assert::same(39.0, LengthConversion::meterToInch(1));
	Assert::same(39.0, LengthConversion::meterToInch(1.0));
	Assert::same(-39.0, LengthConversion::meterToInch(-1));
	Assert::same(39.37, LengthConversion::meterToInch(1, 2));
	Assert::same(39.370, LengthConversion::meterToInch(1, 3));
	Assert::same(39.3701, LengthConversion::meterToInch(1, 4));
    }
    
    public function testMeterToFoot(): void
    {
	Assert::same(3.0, LengthConversion::meterToFoot(1));
	Assert::same(3.0, LengthConversion::meterToFoot(1.0));
	Assert::same(-3.0, LengthConversion::meterToFoot(-1));
	Assert::same(3.28, LengthConversion::meterToFoot(1, 2));
	Assert::same(3.281, LengthConversion::meterToFoot(1, 3));
	Assert::same(3.2808, LengthConversion::meterToFoot(1, 4));
    }
    
    public function testMeterToYard(): void
    {
	Assert::same(11.0, LengthConversion::meterToYard(10));
	Assert::same(11.0, LengthConversion::meterToYard(10.0));
	Assert::same(-11.0, LengthConversion::meterToYard(-10));
	Assert::same(10.94, LengthConversion::meterToYard(10, 2));
	Assert::same(10.936, LengthConversion::meterToYard(10, 3));
	Assert::same(10.9361, LengthConversion::meterToYard(10, 4));
    }
    
    public function testMeterToMile(): void
    {
	Assert::same(1.0, LengthConversion::meterToMile(2000));
	Assert::same(1.0, LengthConversion::meterToMile(2000.0));
	Assert::same(-1.0, LengthConversion::meterToMile(-2000.0));
	Assert::same(1.24, LengthConversion::meterToMile(2000, 2));
	Assert::same(1.243, LengthConversion::meterToMile(2000, 3));
	Assert::same(1.2427, LengthConversion::meterToMile(2000, 4));
    }
    
    
    public function testKiloToMeter(): void
    {
	Assert::same(1000.0, LengthConversion::kiloToMeter(1));
	Assert::same(1000.0, LengthConversion::kiloToMeter(1.0));
	Assert::same(-1000.0, LengthConversion::kiloToMeter(-1));
	Assert::same(1000.00, LengthConversion::kiloToMeter(1, 2));
	Assert::same(1000.000, LengthConversion::kiloToMeter(1, 3));
	Assert::same(1000.0000, LengthConversion::kiloToMeter(1, 4));
    }
    
    public function testKiloToInch(): void
    {
	Assert::same(39370.0, LengthConversion::kiloToInch(1));
	Assert::same(39370.0, LengthConversion::kiloToInch(1.0));
	Assert::same(-39370.0, LengthConversion::kiloToInch(-1));
	Assert::same(39370.10, LengthConversion::kiloToInch(1, 2));
	Assert::same(39370.100, LengthConversion::kiloToInch(1, 3));
	Assert::same(39370.1000, LengthConversion::kiloToInch(1, 4));
    }
    
    public function testKiloToFoot(): void
    {
	Assert::same(3281.0, LengthConversion::kiloToFoot(1));
	Assert::same(3281.0, LengthConversion::kiloToFoot(1.0));
	Assert::same(-3281.0, LengthConversion::kiloToFoot(-1));
	Assert::same(3280.84, LengthConversion::kiloToFoot(1, 2));
	Assert::same(3280.840, LengthConversion::kiloToFoot(1, 3));
	Assert::same(3280.8400, LengthConversion::kiloToFoot(1, 4));
    }
    
    public function testKiloToYard(): void
    {
	Assert::same(1094.0, LengthConversion::kiloToYard(1));
	Assert::same(1094.0, LengthConversion::kiloToYard(1.0));
	Assert::same(-1094.0, LengthConversion::kiloToYard(-1));
	Assert::same(1093.61, LengthConversion::kiloToYard(1, 2));
	Assert::same(1093.610, LengthConversion::kiloToYard(1, 3));
	Assert::same(1093.6100, LengthConversion::kiloToYard(1, 4));
    }
    
    public function testKiloToMile(): void
    {
	Assert::same(6.0, LengthConversion::kiloToMile(10));
	Assert::same(6.0, LengthConversion::kiloToMile(10.0));
	Assert::same(-6.0, LengthConversion::kiloToMile(-10));
	Assert::same(6.21, LengthConversion::kiloToMile(10, 2));
	Assert::same(6.214, LengthConversion::kiloToMile(10, 3));
	Assert::same(6.2137, LengthConversion::kiloToMile(10, 4));
    }
    
    
    public function testInchToMeter(): void
    {
	Assert::same(3.0, LengthConversion::inchToMeter(100));
	Assert::same(3.0, LengthConversion::inchToMeter(100.0));
	Assert::same(-3.0, LengthConversion::inchToMeter(-100));
	Assert::same(2.54, LengthConversion::inchToMeter(100, 2));
	Assert::same(2.540, LengthConversion::inchToMeter(100, 3));
	Assert::same(2.5400, LengthConversion::inchToMeter(100, 4));
    }
    
    public function testInchToKilo(): void
    {
	Assert::same(3.0, LengthConversion::inchToKilo(100000));
	Assert::same(3.0, LengthConversion::inchToKilo(100000.0));
	Assert::same(-3.0, LengthConversion::inchToKilo(-100000));
	Assert::same(2.54, LengthConversion::inchToKilo(100000, 2));
	Assert::same(2.540, LengthConversion::inchToKilo(100000, 3));
	Assert::same(2.5400, LengthConversion::inchToKilo(100000, 4));
    }
    
    public function testInchToFoot(): void
    {
	Assert::same(8.0, LengthConversion::inchToFoot(100));
	Assert::same(8.0, LengthConversion::inchToFoot(100.0));
	Assert::same(-8.0, LengthConversion::inchToFoot(-100));
	Assert::same(8.33, LengthConversion::inchToFoot(100, 2));
	Assert::same(8.333, LengthConversion::inchToFoot(100, 3));
	Assert::same(8.3333, LengthConversion::inchToFoot(100, 4));
    }
    
    public function testInchToYard(): void
    {
	Assert::same(3.0, LengthConversion::inchToYard(100));
	Assert::same(3.0, LengthConversion::inchToYard(100.0));
	Assert::same(-3.0, LengthConversion::inchToYard(-100));
	Assert::same(2.78, LengthConversion::inchToYard(100, 2));
	Assert::same(2.778, LengthConversion::inchToYard(100, 3));
	Assert::same(2.7778, LengthConversion::inchToYard(100, 4));
    }
    
    public function testInchToMile(): void
    {
	Assert::same(2.0, LengthConversion::inchToMile(100000));
	Assert::same(2.0, LengthConversion::inchToMile(100000.0));
	Assert::same(-2.0, LengthConversion::inchToMile(-100000));
	Assert::same(1.58, LengthConversion::inchToMile(100000, 2));
	Assert::same(1.578, LengthConversion::inchToMile(100000, 3));
	Assert::same(1.5783, LengthConversion::inchToMile(100000, 4));
    }
    
    
    public function testFootToMeter(): void
    {
	Assert::same(3.0, LengthConversion::footToMeter(10));
	Assert::same(3.0, LengthConversion::footToMeter(10.0));
	Assert::same(-3.0, LengthConversion::footToMeter(-10));
	Assert::same(3.05, LengthConversion::footToMeter(10, 2));
	Assert::same(3.048, LengthConversion::footToMeter(10, 3));
	Assert::same(3.0480, LengthConversion::footToMeter(10, 4));
    }
    
    public function testFootToKilo(): void
    {
	Assert::same(3.0, LengthConversion::footToKilo(10000));
	Assert::same(3.0, LengthConversion::footToKilo(10000.0));
	Assert::same(-3.0, LengthConversion::footToKilo(-10000));
	Assert::same(3.05, LengthConversion::footToKilo(10000, 2));
	Assert::same(3.048, LengthConversion::footToKilo(10000, 3));
	Assert::same(3.0480, LengthConversion::footToKilo(10000, 4));
    }
    
    public function testFootToInch(): void
    {
	Assert::same(12.0, LengthConversion::footToInch(1));
	Assert::same(12.0, LengthConversion::footToInch(1.0));
	Assert::same(-12.0, LengthConversion::footToInch(-1));
	Assert::same(12.00, LengthConversion::footToInch(1, 2));
	Assert::same(12.000, LengthConversion::footToInch(1, 3));
	Assert::same(12.0000, LengthConversion::footToInch(1, 4));
    }
    
    public function testFootToYard(): void
    {
	Assert::same(3.0, LengthConversion::footToYard(10));
	Assert::same(3.0, LengthConversion::footToYard(10.0));
	Assert::same(-3.0, LengthConversion::footToYard(-10));
	Assert::same(3.33, LengthConversion::footToYard(10, 2));
	Assert::same(3.333, LengthConversion::footToYard(10, 3));
	Assert::same(3.3333, LengthConversion::footToYard(10, 4));
    }
    
    public function testFootToMile(): void
    {
	Assert::same(2.0, LengthConversion::footToMile(10000));
	Assert::same(2.0, LengthConversion::footToMile(10000.0));
	Assert::same(-2.0, LengthConversion::footToMile(-10000));
	Assert::same(1.89, LengthConversion::footToMile(10000, 2));
	Assert::same(1.894, LengthConversion::footToMile(10000, 3));
	Assert::same(1.8939, LengthConversion::footToMile(10000, 4));
    }
    
    
    public function testYardToMeter(): void
    {
	Assert::same(9.0, LengthConversion::yardToMeter(10));
	Assert::same(9.0, LengthConversion::yardToMeter(10.0));
	Assert::same(-9.0, LengthConversion::yardToMeter(-10));
	Assert::same(9.14, LengthConversion::yardToMeter(10, 2));
	Assert::same(9.144, LengthConversion::yardToMeter(10, 3));
	Assert::same(9.1440, LengthConversion::yardToMeter(10, 4));
    }
    
    public function testYardToKilo(): void
    {
	Assert::same(9.0, LengthConversion::yardToKilo(10000));
	Assert::same(9.0, LengthConversion::yardToKilo(10000.0));
	Assert::same(-9.0, LengthConversion::yardToKilo(-10000));
	Assert::same(9.14, LengthConversion::yardToKilo(10000, 2));
	Assert::same(9.144, LengthConversion::yardToKilo(10000, 3));
	Assert::same(9.1440, LengthConversion::yardToKilo(10000, 4));
    }
    
    public function testYardToInch(): void
    {
	Assert::same(36.0, LengthConversion::yardToInch(1));
	Assert::same(36.0, LengthConversion::yardToInch(1.0));
	Assert::same(-36.0, LengthConversion::yardToInch(-1));
	Assert::same(36.00, LengthConversion::yardToInch(1, 2));
	Assert::same(36.000, LengthConversion::yardToInch(1, 3));
	Assert::same(36.0000, LengthConversion::yardToInch(1, 4));
    }
    
    public function testYardToFoot(): void
    {
	Assert::same(3.0, LengthConversion::yardToFoot(1));
	Assert::same(3.0, LengthConversion::yardToFoot(1.0));
	Assert::same(-3.0, LengthConversion::yardToFoot(-1));
	Assert::same(3.00, LengthConversion::yardToFoot(1, 2));
	Assert::same(3.000, LengthConversion::yardToFoot(1, 3));
	Assert::same(3.0000, LengthConversion::yardToFoot(1, 4));
    }
    
    public function testYardToMile(): void
    {
	Assert::same(6.0, LengthConversion::yardToMile(10000));
	Assert::same(6.0, LengthConversion::yardToMile(10000.0));
	Assert::same(-6.0, LengthConversion::yardToMile(-10000));
	Assert::same(5.68, LengthConversion::yardToMile(10000, 2));
	Assert::same(5.682, LengthConversion::yardToMile(10000, 3));
	Assert::same(5.6818, LengthConversion::yardToMile(10000, 4));
    }
    
    
    public function testMileToMeter(): void
    {
	Assert::same(1609.0, LengthConversion::mileToMeter(1));
	Assert::same(1609.0, LengthConversion::mileToMeter(1.0));
	Assert::same(-1609.0, LengthConversion::mileToMeter(-1));
	Assert::same(1609.34, LengthConversion::mileToMeter(1, 2));
	Assert::same(1609.344, LengthConversion::mileToMeter(1, 3));
	Assert::same(1609.3440, LengthConversion::mileToMeter(1, 4));
    }
    
    public function testMileToKilo(): void
    {
	Assert::same(16.0, LengthConversion::mileToKilo(10));
	Assert::same(16.0, LengthConversion::mileToKilo(10.0));
	Assert::same(-16.0, LengthConversion::mileToKilo(-10));
	Assert::same(16.09, LengthConversion::mileToKilo(10, 2));
	Assert::same(16.093, LengthConversion::mileToKilo(10, 3));
	Assert::same(16.0934, LengthConversion::mileToKilo(10, 4));
    }
    
    public function testMileToInch(): void
    {
	Assert::same(63360.0, LengthConversion::mileToInch(1));
	Assert::same(63360.0, LengthConversion::mileToInch(1.0));
	Assert::same(-63360.0, LengthConversion::mileToInch(-1));
	Assert::same(63360.00, LengthConversion::mileToInch(1, 2));
	Assert::same(63360.000, LengthConversion::mileToInch(1, 3));
	Assert::same(63360.0000, LengthConversion::mileToInch(1, 4));
    }
    
    public function testMileToFoot(): void
    {
	Assert::same(5280.0, LengthConversion::mileToFoot(1));
	Assert::same(5280.0, LengthConversion::mileToFoot(1.0));
	Assert::same(-5280.0, LengthConversion::mileToFoot(-1));
	Assert::same(5280.00, LengthConversion::mileToFoot(1, 2));
	Assert::same(5280.000, LengthConversion::mileToFoot(1, 3));
	Assert::same(5280.0000, LengthConversion::mileToFoot(1, 4));
    }
    
    public function testMileToYard(): void
    {
	Assert::same(1760.0, LengthConversion::mileToYard(1));
	Assert::same(1760.0, LengthConversion::mileToYard(1.0));
	Assert::same(-1760.0, LengthConversion::mileToYard(-1));
	Assert::same(1760.00, LengthConversion::mileToYard(1, 2));
	Assert::same(1760.000, LengthConversion::mileToYard(1, 3));
	Assert::same(1760.0000, LengthConversion::mileToYard(1, 4));
    }
    
}

(new LengthConversionTest())->run();