<?php

namespace src\Exporters\Strategy;

use src\Exporters\Entities\FileDataEntity;
use src\Exporters\ExportInterface;

interface ExportStrategyInterface extends ExportInterface
{
    /**
     * Get format name
     * @return string
     */
    public static function getSupportedFileFormat(): string;
}
