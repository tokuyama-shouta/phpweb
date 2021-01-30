<?php
  const ID = 1;
  $title = "PHPテスト";
  $contents = 'PHPテストです。';
  $post_at = '2020/01/29';
  $tag = ['PHP','プログラミング'];
  $status = true; //公開 //非公開 false

  const ID2 = 2;
  $title2 = "PHPテスト2";
  $contents2 = 'PHPテストです。2';
  $post_at2 = '2020/01/29';
  $tag2 = ['PHP','プログラミング2'];
  $status2 = true; //公開 //非公開 false



  $blog1 = array(
    'id' => ID,
    'title' => $title,
    'contents' => $contents,
    'post_at' => $post_at,
    'tag' => $tag,
    'status' => $status
  );

  // echo $blog1['title'];

  $blog2 = [
    'id2' => ID2,
    'title2' => $title2,
    'contents2' => $contents2,
    'post_at2' => $post_at2,
    'tag2' => $tag2,
    'status2' => $status2
  ];

  // echo '<pre>';
  // var_dump($blog2);
  // echo '</pre>';

  //多次元配列
  //配列の中に配列
  $blogs = [$blog1, $blog2];

  // echo '<pre>';
  // var_dump($blogs);
  // echo '</pre>';

  // foreach($blog1 as $blog) {
  //   echo '<pre>';
  //   echo $blog;
  //   echo '</pre>';
  // }

  // foreach($blog2 as $key => $value) {
  //   echo '<pre>';
  //   echo $key . '=' . $value;
  //   echo '</pre>';
  // }

  foreach($blogs as $blog) {
    foreach($blog as $value) {
      echo '<pre>';
      echo $value;
      echo '</pre>';
    }
  }

?>