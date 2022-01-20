<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: *");
  header("Access-Control-Allow-Headers: Origin, Methods, Content-Type"); 
header('content-type:text/html;charset="utf-8"');
 
$username = $_POST['username'];
$password = $_POST['password'];
$create_time = $_POST['create_time'];
 
//對密碼加密
$password = md5(md5($password."aaa")."bbb");
 
// $responddata = ["code"=>"","message"=>""];
$responddata = array("code"=>"","message"=>"");
 
//創建數據庫
//連接數據庫
$link = mysqli_connect("localhost","root","","login");
 
if(!$link){
    $responddata['code'] = 0;
    $responddata['message'] = "數據庫連接失敗";
    echo json_encode($responddata);
    exit;
}
 
 
//mysql_set_charset("utf8");
 
//mysql_select_db("test");
 
$sql = "SELECT * FROM sheet1 WHERE username='{$username}'";
$res = mysqli_query($link,$sql);
$row = mysql_fetch_assoc($res);
 
if($row){
    $responddata['code'] = 1;
    $responddata['message'] = "用户名重複";
    echo json_encode($responddata);
    exit;
}
 
 
$sql1 = "INSERT INTO users(username,password,create_time) VALUES('{$username}','{$password}',{$create_time})";
$res1 = mysql_query($sql1);
if(!$res1){
    $responddata['code'] = 2;
    $responddata['message'] = "註冊失敗";
    echo json_encode($responddata);
    exit;
}else{
    $responddata['code'] = 3;
    $responddata['message'] = "註冊成功";
    echo json_encode($responddata);
}
 
mysql_close();
 
?>