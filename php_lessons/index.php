<?php

// 真偽値
/*
# falseになる場合
 文字列: 空、"0"
 数値:0, 0.0
 論理値: false
 配列: 要素の数が0
 null
*/

$x=5;
// if ($x) {
  if ($x == true) {
    echo "great";
  }
  echo "great";
}

// 三項演算子

$max = ($a>$b) ? $a : $b;

if ($a > $b) {
  $max = $a;
} else {
  $max = $b;
}
