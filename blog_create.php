<?php
require_once('dbc.php');
$blogs = $_POST;

if(empty($blogs['title'])) {
  exit('タイトルを入力してください');
};

if (mb_strlen($blogs['title']) > 191) {
  exit('タイトルは191文字以下にして下さい');
};

if(empty($blogs['contents'])) {
  exit('本文を入力してください');
};

if(empty($blogs['title'])) {
  exit('カテゴリーは必須です。');
};

if(empty($blogs['publish_status'])) {
  exit('公開ステータスは必須です。');
};

$sql = 'INSERT INTO
          blog(title, contents, category, publish_status)
        VALUES
          (:title, :contents, :category, :publish_status)';

$dbh = dbConnect();
$bdh->beginTransaction();
try {
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':title', $blogs['title'], PDO::PARAM_STR);
  $stmt->bindValue(':contents' ,$blogs['contents'], PDO::PARAM_STR);
  $stmt->bindValue(':category', $blogs['category'], PDO::PARAM_INT);
  $stmt->bindValue(':publish_status', $blogs['publish_status'], PDO::PARAM_INT);
  $stmt->execute();
  $dbh->commit();
  echo 'ブログを投稿しました！';

}catch(PDOException $e){
  $dbh->rollBack();
  exit($e);
}

?>