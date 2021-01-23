<?php

  $blog = $_GET;

  foreach($blog as $key => $value) {
    echo '<pre>';
    echo $key . ':' . htmlspecialchars($value,ENT_QUOTES,'UTF-8');
    echo '</pre>';
  }

?>