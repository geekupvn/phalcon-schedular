<?php

return new \Phalcon\Config([
  'database' => [
    'adapter' => 'Mysql',
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'vagrant',
    'dbname' => 'phalcon-schedular',
    'charset' => 'utf8',
    'port' => '3306'
  ],
  'version' => '1.0',
  'printNewLine' => true,
]);
