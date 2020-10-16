<?php

namespace src\Exporters\Strategy\Factory;

use src\Exporters\Exceptions\FileFormatNotSupportedException;
use src\Exporters\Strategy\ExportCSVStrategy;
use src\Exporters\Strategy\ExportStrategyInterface;
use src\Exporters\Strategy\TextStrategy;

class ExportStrategyFactory implements ExportStrategyFactoryInterface
{
    /**
     * @param string $fileFormat
     *
     * @return ExportStrategyInterface
     */
    public function getStrategy(string $fileFormat): ExportStrategyInterface
    {
        $strategy = null;

        switch ($fileFormat) {
            case ExportCSVStrategy::getSupportedFileFormat():
                $strategy = new ExportCSVStrategy();
                break;
            case TextStrategy::getSupportedFileFormat():
                $strategy = new TextStrategy();
                break;
            default:
                throw new FileFormatNotSupportedException($fileFormat);

        }

        return $strategy;
    }
}
