<?php
$blogs = $_POST;

if(empty($blog['title'])) {
  exit('タイトルを入力してください');
}

if(empty($blog['title']) > 191) {
  exit('タイトルは191文字以下にしてください');
}

if(empty($blog['contents'])) {
  exit('本文を入力してください');
}
if(empty($blog['category'])) {
  exit('カテゴリーは必須です。');
}
if(empty($blog['publish_status'])) {
  exit('タイトルを入力してください');
}
$sql = 'INSERT INTO blog(title, contents, category, publish_status) VALUES(:title, contents, category, publish_status)';
$dbh = dbConnect();

$dbh->beginTransaction();
try {
  $stmt = $dbh->prepare($sql);
  $stme->bindValue(':title',$blogs['title'],PDO::PARAM_STR);
  $stme->bindValue(':contents',$blogs['contents'],PDO::PARAM_STR);
  $stme->bindValue(':category',$blogs['category'],PDO::PARAM_STR);
  $stme->bindValue(':publish_status',$blogs['publish_status'],PDO::PARAM_STR);
  $stmt->execute();
  $dbh->commit();
  echo 'ブログを投稿しました。';
}catch(PDOException $e){
  $dbh->rollBack();
  exit($e);
}
?>