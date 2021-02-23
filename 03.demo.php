<?php
header("content-type:text/html;charset=utf-8");
$link=mysqli_connect("localhost",'root','','info');
// if(mysqli_connect_error($link)){
//     die(mysqli_connect_error());
// }else{
//     echo '连接成功';
// }

//设置编码
mysqli_set_charset($link,"utf8");
// 编写sql语句
$sql="select * from users";
//执行sql语句，并返回结果集
$result=mysqli_query($link,$sql);
// var_dump($result);
//从结果集中获取内容
// $row=mysqli_fetch_row($result);
$row=mysqli_fetch_assoc($result);//(常用)
// $row=mysqli_fetch_array($result);
var_dump($row);
//关闭数据库连接
mysqli_close($link);
?>