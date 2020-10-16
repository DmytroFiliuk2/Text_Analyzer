<?php

namespace src\Exporters\Strategy;

use src\Exporters\Entities\FileDataEntity;

class TextStrategy implements ExportStrategyInterface
{
    /**
     * @param array $dataToExport
     * @return FileDataEntity
     */
    public function export(array $dataToExport): FileDataEntity
    {
        $filName = $dataToExport['name'];
        $text = file_get_contents($dataToExport['tmp_name'], 'rb');
        return new FileDataEntity($filName, $text);
    }

    /**
     * @return string
     */
    public static function getSupportedFileFormat(): string
    {
        return 'txt';
    }
}
