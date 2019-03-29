<?php
namespace Myapp;

class Todo {
  private $_db;

  public function __construct() {
    try {
      $this->_db = new \PDO(DSN, DB_USERNAME, DB_PASSWORD);
      $this->_db = setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException #e) {
      echo $e->getMessege();
    }
  }

  public function getAll() {

  }
}
