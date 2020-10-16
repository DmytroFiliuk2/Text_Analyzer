<?php

namespace src\Services;

use Doctrine\ORM\EntityManagerInterface;
use src\Entities\Report;
use src\Repository\ReportRepository;

class ReportService
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getReportsCount()
    {
       $repo =  $this->entityManager->getRepository(Report::class);

        /** @var $repo ReportRepository */
      return  $repo->count(array('id' => !NULL));
    }
}