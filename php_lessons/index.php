<?php

// session
// サーバー側
//大きなデータ
//改ざんされない
//中身が見られない

session_start();

// $_SESSION["username"] = "taguchi";

echo $_SESSION["username"];

// unset($_SESSION["username"]);
