<?php

namespace Ondris\LatteUnitConversion;

use Latte\Extension;

final class LatteExtension extends Extension
{
    
    public function __construct(
        private readonly int $precision = 0,
    ) {
    }

    public function getFilters(): array
    {
	return [
	    'kiloToGram' => fn(int|float $kilos, ?int $precision = null) => WeightConversion::kiloToGram($kilos, $precision ?? $this->precision),
	    'kiloToPound' => fn(int|float $kilos, ?int $precision = null) => WeightConversion::kiloToPound($kilos, $precision ?? $this->precision),
	    'kiloToOunce' => fn(int|float $kilos, ?int $precision = null) => WeightConversion::kiloToOunce($kilos, $precision ?? $this->precision),
	    
	    'gramToKilo' => fn(int|float $grams, ?int $precision = null) => WeightConversion::gramToKilo($grams, $precision ?? $this->precision),
	    'gramToPound' => fn(int|float $grams, ?int $precision = null) => WeightConversion::gramToPound($grams, $precision ?? $this->precision),
	    'gramToOunce' => fn(int|float $grams, ?int $precision = null) => WeightConversion::gramToOunce($grams, $precision ?? $this->precision),
	    
	    'poundToKilo' => fn(int|float $pounds, ?int $precision = null) => WeightConversion::poundToKilo($pounds, $precision ?? $this->precision),
	    'poundToGram' => fn(int|float $pounds, ?int $precision = null) => WeightConversion::poundToGram($pounds, $precision ?? $this->precision),
	    'poundToOunce' => fn(int|float $pounds, ?int $precision = null) => WeightConversion::poundToOunce($pounds, $precision ?? $this->precision),
	    
	    'ounceToKilo' => fn(int|float $ounces, ?int $precision = null) => WeightConversion::ounceToKilo($ounces, $precision ?? $this->precision),
	    'ounceToGram' => fn(int|float $ounces, ?int $precision = null) => WeightConversion::ounceToGram($ounces, $precision ?? $this->precision),
	    'ounceToPound' => fn(int|float $ounces, ?int $precision = null) => WeightConversion::ounceToPound($ounces, $precision ?? $this->precision),
	    
	    //length
	    'meterToKilo' => fn(int|float $meters, ?int $precision = null) => LengthConversion::meterToKilo($meters, $precision ?? $this->precision),
	    'meterToInch' => fn(int|float $meters, ?int $precision = null) => LengthConversion::meterToInch($meters, $precision ?? $this->precision),
	    'meterToFoot' => fn(int|float $meters, ?int $precision = null) => LengthConversion::meterToFoot($meters, $precision ?? $this->precision),
	    'meterToYard' => fn(int|float $meters, ?int $precision = null) => LengthConversion::meterToYard($meters, $precision ?? $this->precision),
	    'meterToMile' => fn(int|float $meters, ?int $precision = null) => LengthConversion::meterToMile($meters, $precision ?? $this->precision),
	    
	    'kiloToMeter' => fn(int|float $kilos, ?int $precision = null) => LengthConversion::kiloToMeter($kilos, $precision ?? $this->precision),
	    'kiloToInch' => fn(int|float $kilos, ?int $precision = null) => LengthConversion::kiloToInch($kilos, $precision ?? $this->precision),
	    'kiloToFoot' => fn(int|float $kilos, ?int $precision = null) => LengthConversion::kiloToFoot($kilos, $precision ?? $this->precision),
	    'kiloToYard' => fn(int|float $kilos, ?int $precision = null) => LengthConversion::kiloToYard($kilos, $precision ?? $this->precision),
	    'kiloToMile' => fn(int|float $kilos, ?int $precision = null) => LengthConversion::kiloToMile($kilos, $precision ?? $this->precision),
	    
	    'inchToMeter' => fn(int|float $inchs, ?int $precision = null) => LengthConversion::inchToMeter($inchs, $precision ?? $this->precision),
	    'inchToKilo' => fn(int|float $inchs, ?int $precision = null) => LengthConversion::inchToKilo($inchs, $precision ?? $this->precision),
	    'inchToFoot' => fn(int|float $inchs, ?int $precision = null) => LengthConversion::inchToFoot($inchs, $precision ?? $this->precision),
	    'inchToYard' => fn(int|float $inchs, ?int $precision = null) => LengthConversion::inchToYard($inchs, $precision ?? $this->precision),
	    'inchToMile' => fn(int|float $inchs, ?int $precision = null) => LengthConversion::inchToMile($inchs, $precision ?? $this->precision),
	    
	    'footToMeter' => fn(int|float $feet, ?int $precision = null) => LengthConversion::footToMeter($feet, $precision ?? $this->precision),
	    'footToKilo' => fn(int|float $inchs, ?int $precision = null) => LengthConversion::footToKilo($inchs, $precision ?? $this->precision),
	    'footToInch' => fn(int|float $inchs, ?int $precision = null) => LengthConversion::footToInch($inchs, $precision ?? $this->precision),
	    'footToYard' => fn(int|float $inchs, ?int $precision = null) => LengthConversion::footToYard($inchs, $precision ?? $this->precision),
	    'footToMile' => fn(int|float $inchs, ?int $precision = null) => LengthConversion::footToMile($inchs, $precision ?? $this->precision),
	    
	    'yardToMeter' => fn(int|float $yard, ?int $precision = null) => LengthConversion::yardToMeter($yard, $precision ?? $this->precision),
	    'yardToKilo' => fn(int|float $yard, ?int $precision = null) => LengthConversion::yardToKilo($yard, $precision ?? $this->precision),
	    'yardToInch' => fn(int|float $yard, ?int $precision = null) => LengthConversion::yardToInch($yard, $precision ?? $this->precision),
	    'yardToFoot' => fn(int|float $yard, ?int $precision = null) => LengthConversion::yardToFoot($yard, $precision ?? $this->precision),
	    'yardToMile' => fn(int|float $yard, ?int $precision = null) => LengthConversion::yardToMile($yard, $precision ?? $this->precision),
	    
	    'mileToMeter' => fn(int|float $miles, ?int $precision = null) => LengthConversion::mileToMeter($miles, $precision ?? $this->precision),
	    'mileToKilo' => fn(int|float $miles, ?int $precision = null) => LengthConversion::mileToKilo($miles, $precision ?? $this->precision),
	    'mileToInch' => fn(int|float $miles, ?int $precision = null) => LengthConversion::mileToInch($miles, $precision ?? $this->precision),
	    'mileToFoot' => fn(int|float $miles, ?int $precision = null) => LengthConversion::mileToFoot($miles, $precision ?? $this->precision),
	    'mileToYard' => fn(int|float $miles, ?int $precision = null) => LengthConversion::mileToYard($miles, $precision ?? $this->precision),
	    
	    //temperature
	    'fahrenheitToCelsius' => fn(int|float $degreesFahrenheits, ?int $precision = null) => TemperatureConversion::fahrenheitToCelsius($degreesFahrenheits, $precision ?? $this->precision),
	    'celsiusToFahrenheit' => fn(int|float $degreesCelsius, ?int $precision = null) => TemperatureConversion::celsiusToFahrenheit($degreesCelsius, $precision ?? $this->precision),
	];
    }
	
}
