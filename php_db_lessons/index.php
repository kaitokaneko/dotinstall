<?php

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'g6fd7Xx');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

try {
  // connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  /*
  (1) exec(): 結果を返さない、 安全なSQL
  (2) query(): 結果を返す、安全、何回も実行されないSQL
  (3) prepare(): 結果を返す、安全対策が必要、複数回実行されるSQL
  */
  // insert
  // bindValue: 値をbind
  // bindParam: 変数への参照をbind

  $stmt = $db->prepare("insert into users (name, score) values (?, ?)");


  $name = 'taguchi';
  $stmt->bindValue(1, $name, PDO::PARAM_STR);
  // $score = 23;
  // $stmt->bindValue(2, $score, PDO::PARAM_INT);
  // $stmt->execute();
  // $score = 44;
  // $stmt->bindValue(2, $score, PDO::PARAM_INT);
  // $stmt->execute();

  $stmt->bindParam(2, $score, PDO::PARAM_INT);
  $score = 52;
  $stmt->execute();
  $score = 44;
  $stmt->execute();
  $score = 6;
  $stmt->execute();

  // PDO::PARAM_NULL
  // PDO::PARAM_BOOL

} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}
