<?php
	session_start();
	if(!isset($_SESSION["flag"]) || ($_SESSION["flag"]==0)){ 
		header("location:../index.php");
		
	}
?>

<?php
 $pid=$_POST["pid"];
 $pname=$_POST["pname"];
 $pprice=$_POST["pprice"];
 $pjianjie=$_POST["pjianjie"];
 $ptp=$_POST["ptp"];

//1. 连接数据库服务器
$conn=mysqli_connect("localhost","root","");
var_dump($conn);
if(!$conn){ echo "连接数据库服务器出错了！"; exit;}
//2. 打开指定的数据库
mysqli_select_db($conn,"liliang") or die("打开数据库出错了！"); 
mysqli_query($conn,"set names utf8");  //防止汉字乱码


$sql="update sp  
set spname='$pname',spprice=$pprice,spjianjie='$pjianjie'
where spid=$pid";

mysqli_query($conn,$sql) or die("数据修改失败！");
echo "修改成功！";
header("location:index.php");

?>