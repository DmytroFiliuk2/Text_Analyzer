<?php


namespace src\Importers;

use src\Exporters\Entities\ReportEntity;

interface ImportInterface
{
    /**
     * @param ReportEntity $reportData
     * @return \SplFileObject
     */
    public function import(ReportEntity $reportData): \SplFileObject;
}