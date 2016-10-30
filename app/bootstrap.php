<?php

use Phalcon\Di\FactoryDefault\Cli as CliDI;
use Phalcon\Cli\Console as ConsoleApp;
use Phalcon\Loader;

$di = new CliDI();

$loader = new Loader();
$loader->registerDirs(
  [
    __DIR__ . "/tasks",
  ]
);

$loader->register();

$configFile = __DIR__ . "/config/config.php";
if (is_readable($configFile)) {
  $config = include $configFile;
  $di->set("config", $config);
}



// Create a console application
$console = new ConsoleApp();
$console->setDI($di);

/**
 * Process the console arguments
 */
$arguments = [];

foreach ($argv as $k => $arg) {
  if ($k === 1) {
    $arguments["task"] = $arg;
  } elseif ($k === 2) {
    $arguments["action"] = $arg;
  } elseif ($k >= 3) {
    $arguments["params"][] = $arg;
  }
}

try {
  $console->handle($arguments);
  echo PHP_EOL;
} catch (\Phalcon\Exception $e) {
  echo $e->getMessage() . PHP_EOL;
  exit(255);
}