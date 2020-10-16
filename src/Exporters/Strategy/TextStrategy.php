<?php

namespace src\Exporters\Strategy;

use src\Entities\FileData;

class TextStrategy implements ExportStrategyInterface
{
    /**
     * @param array $dataToExport
     * @return FileData
     */
    public function export(array $dataToExport): FileData
    {
        $filName = $dataToExport['name'];
        $text = file_get_contents($dataToExport['tmp_name'], 'rb');
        return new FileData($filName, $text);
    }

    /**
     * @return string
     */
    public static function getSupportedFileFormat(): string
    {
        return 'txt';
    }
}
