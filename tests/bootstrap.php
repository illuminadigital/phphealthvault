<?php

define('MARSHALLING_LIB', __DIR__ . '/../vendor/php-xml-marshalling/lib');

require_once MARSHALLING_LIB . '/vendor/doctrine-common/lib/Doctrine/Common/ClassLoader.php';

// Register the Symfony console classes
$classLoader = new \Doctrine\Common\ClassLoader('Symfony\Component\Console', realpath(MARSHALLING_LIB . '/vendor'));
$classLoader->register();

// Register Doctrine Common
$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\Common', realpath(MARSHALLING_LIB . '/vendor/doctrine-common/lib'));
$classLoader->register();

// Register OXM
$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\OXM', realpath(MARSHALLING_LIB));
$classLoader->register();

// Register our library
$classLoader = new \Doctrine\Common\ClassLoader('DLS\Healthvault', realpath(__DIR__ . '/../src'));
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('DLS\Types', realpath(__DIR__ . '/../src'));
$classLoader->register();

// Register the entities
$classLoader = new \Doctrine\Common\ClassLoader('com', realpath(__DIR__ . '/../src'));
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('org', realpath(__DIR__ . '/../src'));
$classLoader->register();

// Register our tests
$classLoader = new \Doctrine\Common\ClassLoader('DLS\Tests', realpath(__DIR__ . '/../tests'));
$classLoader->register();


