<?php
  // echo "Hello Word!";
  // mysqli_connect("localhosts","root","root");
  // mysqli_connect("localhost","root","root");
  $link = mysqli_connect("localhost","root","root","memberapp");
  // サーバー名、データベースユーザー名、パスワード

  if(mysqli_connect_error()){
    echo "データベースへの接続に失敗しました。";
  //   echo "データベースへの接続に失敗しました。";
  // } else  {
  //   echo "データベースへの接続に成功しました。";
    die("データベースへの接続に失敗しました。");
  }
  $query = "SELECT * FROM users";
  // if(mysqli_query($link,$query)){
  if($result = mysqli_query($link,$query)){
?>