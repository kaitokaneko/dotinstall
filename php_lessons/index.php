<?php

// 名前空間

require $class . "User.class.php";

// use Dotinstall\lib as Lib;
use Dotinstall\lib;

$bob = new lib\User("Bob");
$bob -> sayHi();
