<?php

namespace Ondris\LatteUnitConversion;

use Latte\Extension;

final class LengthConversion
{
    
	public static function meterToKilo(int|float $meters, int $precision = 0): int|float
	{
		return round($meters * 0.001, $precision);
	}
	
	public static function meterToInch(int|float $meters, int $precision = 0): int|float
	{
		return round($meters * 39.3701, $precision);
	}
	
	public static function meterToFoot(int|float $meters, int $precision = 0): int|float
	{
		return round($meters * 3.28084, $precision);
	}
	
	public static function meterToYard(int|float $meters, int $precision = 0): int|float
	{
		return round($meters * 1.09361, $precision);
	}
	
	public static function meterToMile(int|float $meters, int $precision = 0): int|float
	{
		return round($meters * 0.000621371, $precision);
	}
	
	
	public static function kiloToMeter(int|float $kilos, int $precision = 0): int|float
	{
		return round($kilos * 1000, $precision);
	}
	
	public static function kiloToInch(int|float $kilos, int $precision = 0): int|float
	{
		return round($kilos * 39370.1, $precision);
	}
	
	public static function kiloToFoot(int|float $kilos, int $precision = 0): int|float
	{
		return round($kilos * 3280.84, $precision);
	}
	
	public static function kiloToYard(int|float $kilos, int $precision = 0): int|float
	{
		return round($kilos * 1093.61, $precision);
	}
	
	public static function kiloToMile(int|float $kilos, int $precision = 0): int|float
	{
		return round($kilos * 0.621371, $precision);
	}
	
	
	public static function inchToMeter(int|float $inchs, int $precision = 0): int|float
	{
		return round($inchs * 0.0254, $precision);
	}
	
	public static function inchToKilo(int|float $inchs, int $precision = 0): int|float
	{
		return round($inchs * 0.0000254, $precision);
	}
	
	public static function inchToFoot(int|float $inchs, int $precision = 0): int|float
	{
		return round($inchs * 0.0833333, $precision);
	}
	
	public static function inchToYard(int|float $inchs, int $precision = 0): int|float
	{
		return round($inchs * 0.0277778, $precision);
	}
	
	public static function inchToMile(int|float $inchs, int $precision = 0): int|float
	{
		return round($inchs * 0.0000157828, $precision);
	}
	
	
	public static function footToMeter(int|float $feet, int $precision = 0): int|float
	{
		return round($feet * 0.3048, $precision);
	}
	
	public static function footToKilo(int|float $feet, int $precision = 0): int|float
	{
		return round($feet * 0.0003048, $precision);
	}
	
	public static function footToInch(int|float $feet, int $precision = 0): int|float
	{
		return round($feet * 12, $precision);
	}
	
	public static function footToYard(int|float $feet, int $precision = 0): int|float
	{
		return round($feet * 0.333333, $precision);
	}
	
	public static function footToMile(int|float $feet, int $precision = 0): int|float
	{
		return round($feet * 0.000189394, $precision);
	}
	
	
	public static function yardToMeter(int|float $yards, int $precision = 0): int|float
	{
		return round($yards * 0.9144, $precision);
	}
	
	public static function yardToKilo(int|float $yards, int $precision = 0): int|float
	{
		return round($yards * 0.0009144, $precision);
	}
	
	public static function yardToInch(int|float $yards, int $precision = 0): int|float
	{
		return round($yards * 36, $precision);
	}
	
	public static function yardToFoot(int|float $yards, int $precision = 0): int|float
	{
		return round($yards * 3, $precision);
	}
	
	public static function yardToMile(int|float $yards, int $precision = 0): int|float
	{
		return round($yards * 0.000568182, $precision);
	}
	
	
	public static function mileToMeter(int|float $miles, int $precision = 0): int|float
	{
		return round($miles * 1609.344, $precision);
	}
	
	public static function mileToKilo(int|float $miles, int $precision = 0): int|float
	{
		return round($miles * 1.609344, $precision);
	}
	
	public static function mileToInch(int|float $miles, int $precision = 0): int|float
	{
		return round($miles * 63360, $precision);
	}
	
	public static function mileToFoot(int|float $miles, int $precision = 0): int|float
	{
		return round($miles * 5280, $precision);
	}
	
	public static function mileToYard(int|float $miles, int $precision = 0): int|float
	{
		return round($miles * 1760, $precision);
	}
}
