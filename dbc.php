<?php

$dsn = 'mysql:host=localhost;dbname=blog_app;charset=utf8';
$user = 'blog_user';
$pass = 'ts1031';

try {
  $dbh = new PDO($dsn,$user,$pass,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  ]);
    echo '接続成功';
    $dbh = null;
} catch(PDOException $e) {
  echo '接続失敗'. $e->getMessage();
  exit();
};


var_dump($dbh);


?>