<?php


namespace src\Importers;

use src\Entities\Report;

interface ImportInterface
{
    /**
     * @param Report $reportData
     * @return \SplFileObject
     */
    public function import(Report $reportData);
}