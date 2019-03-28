<?php
// Should return a PDO
require_once 'config.php';
$pdo;
function db_connect() {

  try {

    $connectionString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
    $user=DBUSER;
    $pass=DBPASS;
    $pdo = new PDO($connectionString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     return $pdo;
  }
  catch (PDOException $e)
  {
    die($e->getMessage());
  }
}
