<?php

namespace Ondris\LatteUnitConversion;

use Latte\Extension;

final class TemperatureConversion
{
    
	public static function fahrenheitToCelsius(int|float $degreesFahrenheits, int $precision = 0): int|float
	{
	    return round(($degreesFahrenheits - 32) * 5/9, $precision);
	}
	
	public static function celsiusToFahrenheit(int|float $degreesCelsius, int $precision = 0): int|float
	{
	    return round(($degreesCelsius * 1.8) + 32, $precision);
	}
}
