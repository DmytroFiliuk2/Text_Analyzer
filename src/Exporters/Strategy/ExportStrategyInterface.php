<?php

namespace src\Exporters\Strategy;

use src\Entities\FileData;
use src\Exporters\ExportInterface;

interface ExportStrategyInterface extends ExportInterface
{
    /**
     * Get format name
     * @return string
     */
    public static function getSupportedFileFormat(): string;
}
