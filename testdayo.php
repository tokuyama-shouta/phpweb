<?php 

//変数
// ブログのタイトル
$title = "PHP";
$contents = "PHPテストです。";
$post_at = "2020/07/08";
$tag = ['PHP', 'プログラミング'];
$status = true;
//定数
const ID = 1;
echo ID;
echo $title;
echo'<br>';
echo $contents;
echo'<br>';
echo $post_at;
echo'<br>';
print_r($tag);

//データ型
var_dump(ID);
//""と''
echo'<br>';
echo "タイトル名:$title";
echo'<br>';
echo 'タイトル名:$title';




?>