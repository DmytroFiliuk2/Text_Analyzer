<?php

namespace src\Exporters\Strategy\Factory;

use src\Exporters\Strategy\ExportStrategyInterface;

interface ExportStrategyFactoryInterface
{
    public function getStrategy(string $string): ExportStrategyInterface;
}