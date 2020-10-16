<?php

namespace src\Servisec;

use SplFileObject;
use src\Exporters\Entities\FileDataEntity;
use src\Exporters\Entities\ReportEntity;
use src\Exporters\ExportInterface;
use src\Exporters\Strategy\Factory\ExportStrategyFactory;
use src\Importers\ImportInterface;

class FileService implements ExportInterface, ImportInterface
{
    /**
     * @var ExportStrategyFactory
     */
    private ExportStrategyFactory $factory;

    /**
     * @param ExportStrategyFactory $factory
     */
    public function __construct(ExportStrategyFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param array $dataToExport
     * @return FileDataEntity
     */
    public function export(array $dataToExport): FileDataEntity
    {
        $strategy = $this->factory->getStrategy(pathinfo($dataToExport['name'], PATHINFO_EXTENSION));

        return  $strategy->export($dataToExport);
    }


    public function import(ReportEntity $reportData): \SplFileObject
    {
        // TODO: Implement import() method.
    }
}