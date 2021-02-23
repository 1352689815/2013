<?php
header("content-type:text/html;charset=utf-8");
$link=mysqli_connect("localhost","root",'',"info");
mysqli_set_charset($link,"utf8");

//获取传入的参数
$u1=$_GET["username"];
$p1=$_GET['pwd'];

//SQL语句
$sql="select * from users where name='$u1' and password=$p1";
//执行SQL
$result=mysqli_query($link,$sql);
// $row=mysqli_fetch_assoc($result);
// var_dump ($row);
//判断结果集中是否存在数据
if($row=mysqli_fetch_assoc($result)){
    // echo "登录成功";
    header("location:./list.html");
}else{
    // echo "登录失败";
    echo "<script>alert('登录失败');location='./login.html'</script>";
    // header("location:./login.html");
    // header("window:alert('登录失败')");
    // echo "<h2>大家好</h2>";
}
//关闭连接
mysqli_close($link);


?>