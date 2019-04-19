<?php

// ユーザの一覧

require_once(__DIR__ . '/../config/config.php');

// var_dump($_SESSION['me']);

$app = new MyApp\Controller\Index();

$app->run();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <form action="logout.php" method="post" id="logout">
      aaa@gmail.com <input type="submit" value="Log Out">
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>
    <h1>Users <span class="fs12">(3)</span></h1>
    <ul>
      <li>aaa@gmail.com</li>
      <li>aaa@gmail.com</li>
      <li>aaa@gmail.com</li>
    </ul>
  </div>
</body>
</html>
