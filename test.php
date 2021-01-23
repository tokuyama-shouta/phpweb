<?php
  //変数
  //ブログのタイトル
  const ID = 1;
  $title = "PHPテスト";
  $contents = 'PHPテストです。';
  $post_at = '2021/01/23';
  $tag = ['PHP', 'プログラミング'];
  $status = true; //公開 //非公開 false

  // ブログ2
  const ID2 = 2;
  $title2 = "PHPテスト2";
  $contents2 = 'PHPテストです。2';
  $post_at2 = '2021/01/23';
  $tag2 = ['PHP', 'プログラミング'];
  $status2 = true; //公開 //非公開 false

  $blog2 = [
    'id2' => ID2,
    'title2' => $title2,
    'contents2' => $contents2,
    'post_at2' => $post_at2,
    'tag2' => $tag2,
    'status2' => $status2
  ];


  //定数
  // const ID = 1;

  // echo ID;
  // echo '<br>';

  // echo $title;
  // echo '<br>';
  // echo $contents;
  // echo '<br>';
  // echo $postAt;
  // echo '<br>';
  // print_r($tag);

  // データ型
  // var_dump( $title);

  // "" と ''の違い
  // echo '<br>';
  // echo "タイトル名: $title";
  // echo '<br>';
  // echo 'タイトル名: $title' ;
  // '' の方が処理速度が早い


  // 二つの記事データを配列に入れて、ループ処理で表示する
  // ブログ１
  $blog1 = array(
    'id' => ID,
    'title' => $title,
    'contents' => $contents,
    'post_at' => $post_at,
    'tag' => $tag,
    'status' => $status
  );

  // 配列の取り出し方
  // 配列の中から添字orキーを指定する
  // echo $blog1['title'];

  // PHP 5.4 以降では配列の短縮構文が追加され
  // array() の代わりに [] を使えるようになった


  //ブログ2

  
  // echo '<pre>';
  // var_dump($blog2);
  // echo '<pre>';

  // 多次元配列
  // 配列の中に配列
  $blogs = [$blog1, $blog2];

  // echo '<pre>';
  // var_dump($blogs);
  // echo '<pre>';

  // ループ処理
  // foreachの練習
  // 1 valueのみ出力
  // foreach($blog1 as $blog) {
  //   echo '<pre>';
  //   echo $blog;
  //   echo '</pre>';
  // };

  // 2 キーとvalueを出力
  // foreach($blog2 as $key => $value) {
  //   echo '<pre>';
  //   echo $key . '=' .$value;
  //   echo '</pre>';
  // };


  // 多次元配列blogsを展開するには
  foreach($blogs as $blog) {
    foreach($blog as $value) {
      echo '<pre>';
      echo $value;
      echo '</pre>';
    }
  }



?>