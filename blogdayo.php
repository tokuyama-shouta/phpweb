<?php

//$blog = $_GET;
$blog = $_POST;

if($blog['publish_status'] === 'publish') {
  foreach($blog as $key => $value) {
    echo '<pre>';
    echo $key . ':' . htmlspecialchars($value,ENT_QUOTES,'UTF-8') . $value;
    echo '</pre>';
  }
}elseif($blog['publish_status'] === 'un_publish'){
  echo '公開中の記事はありません。';
}else{
  echo '記事がありません。';
}




?>