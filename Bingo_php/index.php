<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Bingo.php');

$bingo = new \MyApp\Bingo();
$nums = $bingo->create();

/*
$nums[][]
B: $nums[0] 1-15
I: $nums[1] 16-30
N: $nums[2] 31-45
G: $nums[3]
O: $nums[4]

$nums[$i] $i*15+1 ~ $i*15+15
*/

$nums=[];

for ($i = 0; $i < 5; $i++) {
  $col = range($i*15+1 , $i*15+15);
  shuffle($col);
  $nums[$i] = array_slice($col, 0, 5);
}

// var_dump($nums);
// exit;

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

$nums[2][2] = "FREE"
 ?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>BINGO!</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div id=container>
      <table>
        <tr>
          <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
        </tr>
        <?php for ($i = 0; $i < 5; $i++) : ?>
        <tr>
          <?php for ($j = 0; $j < 5; $j++) : ?>
          <td><?= h($nums[$j][$i]); ?></td>
          <?php endfor; ?>
        </tr>
      <?php endfor; ?>
      </table>
    </div>
  </body>
</html>
