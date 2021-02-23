<?php
header("content-type:text/html;charset=utf-8");
// 连接数据库
$link=mysqli_connect("localhost",'root','','info');
// 设置编码
mysqli_set_charset($link,"utf8");
// 编写sql语句
$sql="select * from users";
// 执行sql语句，并返回结果集
$result=mysqli_query($link,$sql);
// 创建存储数据的数组
$ar1=[];
// 遍历结果集中的数据
while($row=mysqli_fetch_assoc($result)){
    // 把从结果集中遍历出来的数据追加到数组中
    array_push($ar1,$row);

}
var_dump($ar1);
// 把当前数组转为json字符串
$str=json_encode($ar1);
echo $str;
// 关闭数据库连接
mysqli_close($link);
?>