<?php
$uname=$_POST["username"];
$upwd=$_POST($conn);
$conn=mysqli_connect("localhost","root","");
var_dump($conn);
if(!$conn){echo "连接数据库服务器出错！"exit;}
mysqli_select_db($conn,"li") or die("数据打开失败");
mysqli_query($conn,"set name utf8");
$sql="select * from usertable where username='$name' and userpwd='$upwd'"
$rwsult=mysql_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo "登陆成功"；

}else{echo"输入用户名或密码错误！"}