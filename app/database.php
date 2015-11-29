<?php
use Illiminate\Database\Capsule\Manage as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
  "driver" => "mysql",
  "host" => "localhost",
  "database" => "project",
  "username" => "root",
  "password" => "password",
  "charset" => "utf8",
  "collation" => "utf8_unicode_ci",
  "prefix" => ""
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
