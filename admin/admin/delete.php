<?php
	session_start();
	if(!isset($_SESSION["flag"]) || ($_SESSION["flag"]==0)){ 
		header("location:../index.php");
		
	}
?>



<?php
//1. 连接数据库服务器
$conn=mysqli_connect("localhost","root","");
var_dump($conn);
if(!$conn){ echo "连接数据库服务器出错了！"; exit;}
//2. 打开指定的数据库
mysqli_select_db($conn,"db215152") or die("打开数据库出错了！"); 
mysqli_query($conn,"set names utf8");  //防止汉字乱码
//3. 向sp表中
$id=$_GET["id"];

$sql="delete from sp where spid=$id";
mysqli_query($conn,$sql) or die("数据删除失败！");
echo "删除成功！";
header("location:index.php");

?>