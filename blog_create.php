<?php
require_once('blog.php');
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

$blog = new Blog();
$blog->blogCreate($blogs);
?>