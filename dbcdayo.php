<?php

// 関数1つに1つの機能のみを持たせる
// 1.データベース接続
// 2.データを取得
// 3.カテゴリー名を表示する

// 1.データベース接続
// 引数 なし
// 返り値：接続結果を返す
function bdConnect() {

  $dsn = 'mysql:host=localhost;dbname=blog_app;charset=utf8';
  $user = 'bogdayo_user';
  $pass = 'ts1031205';

    try{
      $dbh = new PDO($dsn,$user,$pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      ]);
    
    } catch(PDOException $e) {
      echo '接続失敗'.$e->getMessage();
      exit();
    };
    return $dbh;
  }
    //echo '接続成功';
    

  // 2.データを取得
  // 引数なし
  // 返り値：取得したデータを返す
  function getAllBlog() {
    $dbh = dbConnect();
    //sql準備
    $sql = 'SELECT * FROM blog';
    //sqlの実行
    $stmt = $dbh->query($sql);
    //sqlの結果を受け取る
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
    $dbh = null;
  }

  // 2.カテゴリー名を表示
  // 引数 数字
  // 返り値：カテゴリーの文字列
  function setCategoryName($category) {
    if($category === '1'){
      return 'ブログ';
    }elseif($category === '2'){
      return '日常';
    }else{
      return 'その他';
    }
  }





?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ブログ一覧</title>
</head>
<body>
  <h2>ブログ一覧</h2>
  <table>
    <tr>
      <th>No</th>
      <th>タイトル</th>
      <th>カテゴリ</th>
    </tr>
    <?php foreach($result as $column): ?>
    <tr>
      <td><?php echo $column['id'] ?></td>
      <td><?php echo $column['title'] ?></td>
      <td><?php echo setCategoryName($column['category']) ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>