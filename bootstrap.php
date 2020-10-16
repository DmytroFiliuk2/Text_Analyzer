<?php

require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$paths = [__DIR__."/src/Entities"];
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// database configuration parameters
$conn = array(
    'dbname' => 'puppy',
    'user' => 'root',
    'password' => 'dfkthf2114',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);