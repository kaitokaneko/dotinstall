<?php

// if 条件分離
// 比較演算子 > < >= <= == === != !==
// 論理演算子 and && , or || , !
$score = 40;

if ($score > 80) {
  echo "great!";
} else if ($score > 60){
  echo "good";
}else {
  echo "so so ...";
}
