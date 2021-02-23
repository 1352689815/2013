<?php
header("content-type:text/html;charset=utf-8");
//连接数据库
$link=mysqli_connect("localhost","root","","info");
// 设置编码
mysqli_set_charset($link,"utf8");
// 编写sql语句
$sql="select * from users";
// 执行sql语句，并返回结果集
$result=mysqli_query($link,$sql);
// 遍历结果集中的数据
while($row=mysqli_fetch_assoc($result)){
    var_dump($row);
}
// 关闭数据库连接
mysqli_close($link);
?>