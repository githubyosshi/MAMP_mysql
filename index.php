<?php
  $link = mysqli_connect("localhost","root","root","memberapp");
  // サーバー名、データベースユーザー名、パスワード

  if(mysqli_connect_error()){
    die("データベースへの接続に失敗しました。");
  }

  /*
  $query = "INSERT INTO `users` (`email`,`password`) VALUES ('kirsten@gmail.com','thereisnopassword')";

  if($result = mysqli_query($link,$query)){
    echo "INSERTクエリの発行に成功しました。";
  }
  */
  
  // $query = "UPDATE `users` SET email='syoshimoto@gmail.com' WHERE id=1 LIMIT 1";
  $query ="UPDATE `users` SET password='changeme' WHERE email='syoshimoto@gmail.com' LIMIT 1";
  if($result = mysqli_query($link,$query)){
    echo "UPDATEクエリの発行に成功しました。";
    echo "<br>";
  }

  $query = "SELECT * FROM users";

  if($result = mysqli_query($link,$query)){
  //  echo "クエリの発行に成功しました。";
  }
  $row = mysqli_fetch_array($result);

  // print_r($row);

  echo "あなたのメールアドレスは".$row['email']."、パスワードは".$row['password']."です。";

  echo "<p>";

/*
  echo "あなたのメールアドレスは".$row[1]."、パスワードは".$row[2]."です。";
  echo "<p>";
  echo "あなたのIDは".$row['id']."です。"
*/

?>