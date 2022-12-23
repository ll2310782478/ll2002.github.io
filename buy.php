<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>购买商品</title>
<link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg"/>
</head>
<body>
<?php 
   if(isset($_SESSION["uname"]) and isset($_POST["goumai"])){ //当已经登录，并且填写了订单  
// 1. 获取数据  
	 $spid=$_POST["spid"];
     $userid=$_SESSION["userid"];
     $buysl=$_POST["num"];
	 $username=$_SESSION["uname"];	
//2. 写入数据到订单表
     //连接到数据库
	$con=mysqli_connect("localhost","root","");
	if(!$con){ echo "连接数据库服务器出错了！"; exit;}
// 打开指定的数据库
	mysqli_select_db($con,"liliang") or die("打开数据库出错了！"); 
	mysqli_query($con,"set names utf8");  //防止汉字乱码
	 $ddate=date('Y-m-d H:i:s');
	 $sql="insert into dingdan(spid,num,user,time,flag)values($spid,$buysl,'$username','$ddate',0)";
	if(mysqli_query($con,$sql)) {
		echo "加入购物车成功<br>";
		echo "<a href='index.php'>继续购买商品</a><br/>";
		echo "<a href='look.php'>查看购物车</a>";
		}else{ echo mysqli_affected_rows($con);
		echo "出错了".$ddate;}
   }else{ echo "您没有<a href='login.html'>登录</a>或者没有选择订单";}
?>
</body>
</html>