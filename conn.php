<!-- 这个php代码也能换成这样
    // 连接数据库(地址,用户名,密码,数据库名)
    $conn = new mysqli("localhost","root","root","liuyanban");
    // 判断
    if($conn->connect_error){
        die("连接失败");
    }
 -->
<?php
    // 连接数据库(地址,用户名,密码,数据库名)
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="login";
    // 创建链接
    $conn = new mysqli($servername,$username,$password,$login);
    // 检测链接
    if($conn->connect_error){
        die("连接失败：".$conn->connect_error);
    }
?>