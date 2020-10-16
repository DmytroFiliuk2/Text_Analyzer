<?php

namespace src\Exporters;

use src\Entities\FileData;

interface ExportInterface
{
    /**
     * @param array $dataToExport
     *
     * @return FileData
     */
    public function export(array $dataToExport): FileData;
}
