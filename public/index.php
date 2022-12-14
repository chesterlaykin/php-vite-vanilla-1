<?php

if(!isset($_SERVER["DOCUMENT_ROOT"])){
  die('<h1>404</h1>');
}
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
$path =  __DIR__ . "/../vendor/autoload.php";
//  die($path);
require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../backend/index.php";