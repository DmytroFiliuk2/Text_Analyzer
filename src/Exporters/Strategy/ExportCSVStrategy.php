<?php

namespace src\Exporters\Strategy;

use SplFileObject;
use src\Entities\FileData;

class ExportCSVStrategy implements ExportStrategyInterface
{
    /**
     * @param SplFileObject $fileObject
     * @return FileData
     */
    public function export(array $fileObject): FileData
    {

        $FileData = new FileData();

        return $FileData;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSupportedFileFormat(): string
    {
        return 'CSV';
    }
}
