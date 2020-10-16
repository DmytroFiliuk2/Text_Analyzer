<?php

namespace src\Exporters\Strategy;

use SplFileObject;
use src\Exporters\Entities\FileDataEntity;

class ExportCSVStrategy implements ExportStrategyInterface
{
    /**
     * @param SplFileObject $fileObject
     * @return FileDataEntity
     */
    public function export(array $fileObject): FileDataEntity
    {

        $fileDataEntity = new FileDataEntity();

        return $fileDataEntity;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSupportedFileFormat(): string
    {
        return 'CSV';
    }
}
