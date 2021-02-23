<?php
header("content-type:text/html;charset=utf-8");
$link=mysqli_connect("localhost","root",'',"info");
mysqli_set_charset($link,"utf8");

$u1=$_GET['username'];
$p1=$_GET['pwd'];


//sql语句
$sql="select * from users where name='$u1' and password=$p1";
$result=mysqli_query($link,$sql);

if(mysqli_fetch_assoc($result)){

    setCookie("name",$u1,time()+100);

    echo "<script>location='./list.html'</script>";

}else{

    echo "<script>alert('账号或密码有误');</script>";

}
//关闭连接
mysqli_close($link);
?>