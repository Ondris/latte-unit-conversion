<?php

namespace Ondris\LatteUnitConversion\DI;

use Nette\DI\CompilerExtension;
use Ondris\LatteUnitConversion\LatteExtension;
use Nette\Schema\Expect;
use Nette\Schema\Schema;

final class UnitConversionCompilerExtension extends CompilerExtension
{
    public function loadConfiguration(): void
    {
	$builder = $this->getContainerBuilder();
	$config = $this->getConfig();
	
	$latteExtension = $builder->addDefinition($this->prefix('latte.extension'))
            ->setFactory(LatteExtension::class, [
		$config->precision,
	    ]);
	
	 /** @var \Nette\DI\Definitions\FactoryDefinition $latteFactory */
        $latteFactory = $builder->getDefinition('latte.latteFactory');

        $latteFactory->getResultDefinition()
            ->addSetup('addExtension', [$latteExtension]);
    }
    
    public function getConfigSchema(): Schema
    {
	return Expect::structure([
	    'precision' => Expect::int(0),
	]);
    }
}