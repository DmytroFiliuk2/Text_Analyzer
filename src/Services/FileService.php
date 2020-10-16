<?php

namespace src\Services;

use src\Entities\FileData;
use src\Entities\Report;
use src\Exporters\ExportInterface;
use src\Exporters\Strategy\Factory\ExportStrategyFactory;
use src\Importers\ImportInterface;
use src\Importers\Strategy\Factory\ImportStrategyFactory;

class FileService implements ExportInterface, ImportInterface
{
    /**
     * @var ExportStrategyFactory
     */
    private ExportStrategyFactory $factory;

    /**
     * @var ImportStrategyFactory
     */
    private ImportStrategyFactory $importFactory;

    /**
     * @param ExportStrategyFactory $factory
     * @param ImportStrategyFactory $importFactory
     */
    public function __construct(ExportStrategyFactory $factory, ImportStrategyFactory $importFactory)
    {
        $this->factory = $factory;
        $this->importFactory = $importFactory;
    }

    /**
     * @param array $dataToExport
     *
     * @return FileData
     */
    public function export(array $dataToExport): FileData
    {
        $strategy = $this->factory->getStrategy(pathinfo($dataToExport['name'], PATHINFO_EXTENSION));

        return  $strategy->export($dataToExport);
    }

    /**
     * @param Report $reportData
     *
     * @return \SplFileObject
     */
    public function import(Report $reportData): \SplFileObject
    {
        $strategy = $this->importFactory->getImportStrategy(pathinfo($reportData->fileName(), PATHINFO_EXTENSION));

        return  $strategy->import($reportData);
    }
}