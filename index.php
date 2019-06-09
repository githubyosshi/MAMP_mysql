<?php

    session_start();

    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {

        $link = mysqli_connect("localhost", "root", "root", "memberapp");
                            // サーバー名、データベースユーザー名、パスワード
            if (mysqli_connect_error()) {

              die ("データベースへの接続に失敗しました。");

            }


        if ($_POST['email'] == '') {

            echo "Eメールアドレスを入力してください";

        } else if ($_POST['password'] == '') {

            echo "パスワードを入力してください";

        } else {

            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

            $result = mysqli_query($link, $query);

            if (mysqli_num_rows($result) > 0) {

              echo "すでにそのメールアドレスは使用されています。";

            } else {
              // 未使用の場合の処理を記述
                $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
                  // print_r($_POST['password']);
              if (mysqli_query($link, $query)) {

                  $_SESSION['email'] = $_POST['email'];
                  header("Location: session.php");
              } else {

                  echo "登録に失敗しました！";
              }
            }
          }
        }
        /*
        1.Eメールとパスワードの入力フォーム、「登録する」ボタンを設置する
        2.データが入力されているか
        3.メールアドレスが既に使用されていないかチェックする
        4.重複がなければユーザ登録（データベーステーブルに追加する）を実行する
        5.ユーザ登録に成功しました、というメッセージを表示する
        */
        
        ?>
        <!-- // echo "登録されました！"; -->
        <!-- // print_r($_POST['email']); -->
        <!-- // print_r($_SESSION['email']); -->


<form method = "post">
    <input name="email" type="text" placeholder="Eメール">
    <input name="password" type="password" placeholder="パスワード">
    <input type="submit" value = "登録する">
</form>