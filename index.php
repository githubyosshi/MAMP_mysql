<?php
  // echo "Hello Word!";
  // mysqli_connect("localhosts","root","root");
  mysqli_connect("localhost","root","root");
  // サーバー名、データベースユーザー名、パスワード
  if(mysqli_connect_error()){
    echo "データベースへの接続に失敗しました。";
  } else  {
    echo "データベースへの接続に成功しました。";
  }
?>