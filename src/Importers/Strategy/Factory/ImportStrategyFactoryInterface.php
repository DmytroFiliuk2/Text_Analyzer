<?php

namespace src\Importers\Strategy\Factory;

use src\Importers\Strategy\ImportStrategyInterface;

interface ImportStrategyFactoryInterface
{
    /**
     * @param string $fileExtension
     * @return ImportStrategyInterface
     */
    public function getImportStrategy(string $fileExtension) : ImportStrategyInterface;
}
