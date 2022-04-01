<?php

declare(strict_types=1);

$pdo = null;

try {
  $pdo = new PDO('mysql:host=mysql;dbname=exempo', 'login', 'senha');
} catch(exception $e) {
  echo $e->getMessage();
  die();
}
return $pdo;
?>