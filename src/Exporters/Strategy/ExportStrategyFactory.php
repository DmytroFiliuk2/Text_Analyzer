<?php

namespace src\Exporters\Strategy;

use src\Exporters\Exceptions\FileFormatNotSupportedException;

class ExportStrategyFactory
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
            default:
                throw new FileFormatNotSupportedException($fileFormat);

        }

        return $strategy;
    }
}
