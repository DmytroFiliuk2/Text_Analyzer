<?php

namespace src\Exporters\Strategy;

class ExportCSVStrategy implements ExportStrategyInterface
{
    /**
     * @inheritDoc
     */
    public static function getSupportedFileFormat(): string
    {
       return 'CSV';
    }
}