<?php

namespace src\Importers\Strategy;

use src\Importers\ImportInterface;

interface ImportStrategyInterface extends ImportInterface
{
    /**
     * Get format name
     * @return string
     */
    public static function getSupportedFileFormat(): string;
}