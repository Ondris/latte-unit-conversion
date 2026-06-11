# Latte Unit Conversion

Simple Latte extension providing unit conversion filters for Nette and Latte applications.

## Installation

Install the package via Composer:

```bash
composer require ondris/latte-unit-conversion
```

Register the extension in your `config.neon`:

```neon
extensions:
    unitConversion: Ondris\LatteUnitConversion\DI\UnitConversionCompilerExtension
```

## Configuration

You can set the default precision used by all filters:

```neon
unitConversion:
    precision: 2
```

Default value:

```neon
unitConversion:
    precision: 0
```

## Available Filters

### kiloToPound

Converts kilograms to pounds.

```latte
{$weight|kiloToPound}
{$weight|kiloToPound:2}
```

### poundToKilo

Converts pounds to kilograms.

```latte
{$weight|poundToKilo}
{$weight|poundToKilo:2}
```

### kiloToGram

Converts kilograms to grams.

```latte
{$weight|kiloToGram}
```

### gramToKilo

Converts grams to kilograms.

```latte
{$weight|gramToKilo}
{$weight|gramToKilo:3}
```

### kiloToOunce
### gramToPound
### gramToOunce
### poundToGram
### poundToOunce
### ounceToKilo
### ounceToGram
### ounceToPound

### meterToKilo
### meterToInch
### meterToFoot
### meterToYard
### meterToMile
### kiloToMeter
### kiloToInch
### kiloToFoot
### kiloToYard
### kiloToMile
### inchToMeter
### inchToKilo
### inchToFoot
### inchToYard
### inchToMile
### footToMeter
### footToKilo
### footToInch
### footToYard
### footToMile
### yardToMeter
### yardToKilo
### yardToInch
### yardToFoot
### yardToMile
### mileToMeter
### mileToKilo
### mileToInch
### mileToFoot
### mileToYard

## Examples

```latte
{$10|kiloToPound}
```

Output:

```text
22
```

With precision:

```latte
{$10|kiloToPound:4}
```

Output:

```text
22.0462
```

Using configured precision:

```neon
unitConversion:
    precision: 2
```

```latte
{$10|kiloToPound}
```

Output:

```text
22.05
```

## Requirements

* PHP 8.2+
* Latte 3+
* Nette DI 3+

## License

MIT License