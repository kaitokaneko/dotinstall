<?php

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'g6fd7Xx');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

try {
  // connect
  $db = new PDO(PDO_DNS, DB_USERNAME, DB_PASSWORD);
  $db->setAtrribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //

} catch (PDOExeption $e) {
  echo $e->getMessage();
  exit;
}
