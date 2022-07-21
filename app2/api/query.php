<?php
//處理查詢資料的請求
$classroom=$_GET['classroom'];
$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn,'root','');

$sql="select * from students where classroom='{$classroom}'";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// 用json_encode直接變成JSON格式
echo json_encode($rows);

?>