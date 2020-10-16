<?php

namespace src\Importers;

use src\Entities\Report;
use src\Importers\Strategy\ImportStrategyInterface;

class CSVImportStrategy implements ImportStrategyInterface
{
    /**
     * @param Report $reportData
     */
    public function import(Report $reportData)
    {
    }

    /**
     * @return string
     */
    public static function getSupportedFileFormat(): string
    {
        return 'CSV';
    }
}