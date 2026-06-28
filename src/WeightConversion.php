<?php

namespace Ondris\LatteUnitConversion;

use Latte\Extension;

final class WeightConversion
{
    
	public static function kiloToGram(int|float $kilos, int $precision = 0): int|float
	{
	    return round($kilos * 1000, $precision);
	}
	
	public static function kiloToPound(int|float $kilos, int $precision = 0): int|float
	{
		return round($kilos * 2.20462, $precision);
	}
	
	public static function kiloToOunce(int|float $kilos, int $precision = 0): int|float
	{
	    return round($kilos * 35.274, $precision);
	}
	
	
	public static function gramToKilo(int|float $grams, int $precision = 0): int|float
	{
	    return round($grams * 0.001, $precision);
	}
	
	public static function gramToPound(int|float $grams, int $precision = 0): int|float
	{
	    return round($grams * 0.002205, $precision);
	}
	
	public static function gramToOunce(int|float $grams, int $precision = 0): int|float
	{
	    return round($grams * 0.035274, $precision);
	}
	
	
	public static function poundToKilo(int|float $pounds, int $precision = 0): int|float
	{
	    return round($pounds * 0.45359237, $precision);
	}
	
	public static function poundToGram(int|float $pounds, int $precision = 0): int|float
	{
	    return round($pounds * 453.59237, $precision);
	}

	public static function poundToOunce(int|float $pounds, int $precision = 0): int|float
	{
	    return round($pounds * 16, $precision);
	}
	
	
	public static function ounceToKilo(int|float $ounces, int $precision = 0): int|float
	{
	    return round($ounces * 0.0283495, $precision);
	}

	public static function ounceToGram(int|float $ounces, int $precision = 0): int|float
	{
	    return round($ounces * 28.3495, $precision);
	}
	
	public static function ounceToPound(int|float $ounces, int $precision = 0): int|float
	{
	    return round($ounces * 0.0625, $precision);
	}
	
}
