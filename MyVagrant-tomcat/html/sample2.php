<?php
  $mysqli = new mysqli("localhost","root","","test2");
  if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
  } else {
    $mysqli->set_charset("utf8");
  }

  $date = date('Y-m-d H:i:s');


  // テーブルの作成
  //$sql = 'CREATE TABLE list (
  //	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //	name VARCHAR(20),
  //	age INT(11),
  //	mailaddress VARCHAR(20),
  //	modify_datetime DATETIME,
  //	create_datetime DATETIME
  //) engine=innodb default charset=utf8';


// テーブルへ新規登録
//  $sql = "INSERT INTO list(
//    name,age,mailaddress, modify_datetime, create_datetime
// )VALUES(
//    'usr','20','','".$date."','".$date."'
//  )";


// データの更新
//$sql = "UPDATE list SET
//  name = '木村',
//  age = 33,
//  mailaddress = 'kimura@gmail.com',
//  modify_datetime = '".$date."'
//WHERE id = 4";


// データの削除
//$sql = "DELETE FROM list WHERE id = 5";


// データの取得
$sql = 'SELECT * FROM list WHERE id = 2';


$res = $mysqli->query($sql);

if($res){
  var_dump($res->fetch_all());
}

//var_dump($res);

// DB接続を閉じる
  $mysqli->close();

?>
