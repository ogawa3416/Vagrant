<?php
  $mysqli = new mysqli("localhost","root","","");
  if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
  } else {
    $mysqli->set_charset("utf8");
  }

$mysqli->query("create database if not exists test2 default character set utf8");
$result = $mysqli->query("show databases");

while ($row = $result->fetch_array(MYSQLI_NUM)) {
    echo $row[0];
		echo nl2br("\n");
}

// DB接続を閉じる
  $mysqli->close();

?>
