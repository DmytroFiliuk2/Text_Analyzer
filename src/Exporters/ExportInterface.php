<?php

namespace src\Exporters;

use SplFileObject;

interface ExportInterface
{
    /**
     * @param array $stats
     * @return SplFileObject
     */
    public function export(array $stats): SplFileObject;

}