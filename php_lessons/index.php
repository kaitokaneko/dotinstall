<?php

// User

class User {
  // SDO_Model_Property
  public $name;

  //constructor
  public function __construct($name) {
    $this -> name = $name;
  }
  //method
  public function sayHi() {
    echo "hi, i am $this->name!";
  }
}

$tom = new User("Tom");
$bob = new User("Bob");

echo $tom->name; //Tom
$bob->sayHi(); //hi, i am Bob!
