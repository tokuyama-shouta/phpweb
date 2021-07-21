<?php
 $id = $_GET['id'];

 if(empty($id)){
    exit('idが不正です。');
 }

 function bdConnect() {

  $dsn = 'mysql:host=localhost;dbname=blog_app;charset=utf8';
  $user = 'bogdayo_user';
  $pass = 'ts1031205';

    try{
      $dbh = new PDO($dsn,$user,$pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTREMULATE_PREPARES => false,
      ]);
    
    } catch(PDOException $e) {
      echo '接続失敗'.$e->getMessage();
      exit();
    };
    return $dbh;
 }

 $dbh = dbConnect();

 $stmt = $dbh->prepare('SELECT * FROM blog Weher id = :id');
 $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);

 $stmt->execute();
 $result = $stmt->fetch(PDO::FETCH_ASSOC);
 
 if(!$result){
   exit('ブログがありません。');
 };
 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ブログ詳細</title>
</head>
<body>
  <h2>ブログ詳細</h2>
  <h3>タイトル：<?php echo $result['title'] ?></h3>
  <p>投稿日時：<?php echo $result['post_at'] ?></p>
  <p>カテゴリ：<?php echo $result['category'] ?></p>
  <hr>
  <p>本文：<?php echo $result['contents'] ?></p>
</body>
</html>