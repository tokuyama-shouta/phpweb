<?php 

//変数
// ブログのタイトル
$title = "PHP";
$contents = "PHPテストです。";
$post_at = "2020/07/08";
$tag = ['PHP', 'プログラミング'];
$status = true;
//定数
// const ID = 1;
// echo ID;
// echo $title;
// echo'<br>';
// echo $contents;
// echo'<br>';
// echo $post_at;
// echo'<br>';
// print_r($tag);

// //データ型
// var_dump(ID);
// //""と''
// echo'<br>';
// echo "タイトル名:$title";
// echo'<br>';
// echo 'タイトル名:$title';

$blog1 = array(
  'id' => ID,
  'title' => $title,
  'contents' => $contents,
  'posta_at' => $post_at,
  'tag' => $tag,
  'status' => $status
);

// echo $blog1['title'];

$blog2 = [
  'id2' => ID2,
  'title2' => $title2,
  'contents2' => $contents2,
  'posta_at2' => $post_at2,
  'tag2' => $tag2,
  'status2' => $status2

];

$blog = [$blog1,$blog2];
  
// echo '<pre>';
// var_dump($blog2);
// echo '</pre>';


// foreach($blog1 as $blog){
//   echo '<pre>';
//   echo $blog;
//   echo '</pre>';
// };

foreach($blog2 as $key => $value) {
  echo '<pre>';
  echo $key . '=' . $value;
  echo '</pre>';
}
foreach($blogs as $blog) {
  foreach($blog as $value){
    echo '<pre>';
    echo $value;
    echo '</pre>';
  }
}


?>