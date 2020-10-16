<?php

namespace src\Exporters;

use SplFileObject;
use src\Exporters\Entities\FileDataEntity;

interface ExportInterface
{
    /**
     * @param array $dataToExport
     *
     * @return FileDataEntity
     */
    public function export(array $dataToExport): FileDataEntity;
}
