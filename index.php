<?php

// echo md5("password");    //md5に登録のハッシュ
// https://crackstation.net

$salt ="dfdsfshg";

$row['id'] = 73;

// echo md5($salt."password");
echo md5(md5($row['id'])."password");

?>