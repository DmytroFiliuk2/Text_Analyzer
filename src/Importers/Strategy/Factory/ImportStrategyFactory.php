<?php

namespace src\Importers\Strategy\Factory;

use src\Exporters\Exceptions\FileFormatNotSupportedException;
use src\Importers\CSVImportStrategy;
use src\Importers\Strategy\ImportStrategyInterface;

class ImportStrategyFactory implements ImportStrategyFactoryInterface
{
    /**
     * @param string $fileExtension
     * @return ImportStrategyInterface
     */
    public function getImportStrategy(string $fileExtension): ImportStrategyInterface
    {
        $strategy = null;

        switch ($fileExtension) {
            case CSVImportStrategy::getSupportedFileFormat():
                $strategy = new CSVImportStrategy();
                break;
            default:
                throw new FileFormatNotSupportedException($fileExtension);
        }

        return $strategy;
    }
}