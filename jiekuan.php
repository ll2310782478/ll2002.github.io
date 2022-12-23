<?php  session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>结账</title>
<link rel="stylesheet" type="text/css" href="css/css1.css">
<link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg"/>
   <script language="javascript">
     function pay_money()
       {   alert('交钱走人!');  }
   </script>
</head>

<body>
<div class="content"><!-- content开始 -->
  <!-- header开始 -->
	<?php //require "header.php"; 
		  //require "daohang.php";
	?>	
  <!-- header结束 -->
       <?php 
	 if(isset($_SESSION["uname"]) ){ //当已经登录单   
         echo "付款中心 | 当前用户：".$_SESSION['uname'];  
    ?>
 
<form action="jiekuan.php" method="post" name="f1">
<table border=0 align=center width=100%  cellspacing=0 bordercolordark=#9CC7EF cellpadding=4 style="line-height:35px">
<tr bgcolor=#FDF5E6>
 <th>商品名称</th>
 <th>商品图片</th>
 <th>订购数量</th>
 <th>单价</th>
 <th>小计</th>
</tr>
<?php
 //连接到数据库
	$con=mysqli_connect("localhost","root","");
	if(!$con){ echo "连接数据库服务器出错了！"; exit;}
// 打开指定的数据库
	mysqli_select_db($con,"liliang") or die("打开数据库出错了！"); 
	mysqli_query($con,"set names utf8");  //防止汉字乱码
 
 
 
$user=$_SESSION["uname"];
$sql="select dingdan.id as id,sp.spname as name,sp.sptp as photo,dingdan.num as num,sp.spprice as money from sp,dingdan where sp.spid=dingdan.spid and dingdan.user='$user' and dingdan.flag=0";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
for($i=0;$i<$n;$i++)
{
 if($i%2==1)
   echo "<tr align=center bgcolor=#F0F0F0 onmouseover='openme(this)' onmouseout='closeme(this)'>";
 else
   echo "<tr align=center onmouseover='openme(this)' onmouseout='closeme1(this)'>";
 $A=mysqli_fetch_array($result);
 echo "<td>$A[name]</td>";
 echo "<td><img src=img/$A[photo] width=30 height=30></td>";
 $bianhao=$A["id"];
 echo "<td>$A[num]</td>";
 echo "<td>￥$A[money]元</td>";
 echo "<td>￥".$A["num"]*$A["money"]."元</td>";
 echo "</tr>";
}

?>
</table>
<center>应付金额：<b><font color=#FF0000>￥
<?php
 $sql="select sp.spprice as money,dingdan.num as num from sp,dingdan where sp.spid=dingdan.spid and dingdan.user='$user' and dingdan.flag=0";
 $result=mysqli_query($con,$sql);
 $n=mysqli_num_rows($result);
 $sum=0;
 for($i=0;$i<$n;$i++)
 {
  $A=mysqli_fetch_array($result);
  $t=$A["money"]*$A["num"];
  $sum+=$t;
 }
 echo $sum." 元</font></b>";
 echo " | <a href=look.php>调整商品</a>";
 echo " | <input type=button name=enter value=打印商品清单 onclick='window.print()'>";
 echo " | <input type=button name=enter value=现金结款 onclick='pay_money()'>";
 echo " | <input type=submit name=enter value=卡中扣除>";
?>

</form>
<?php
if(isset($_POST["enter"])){
if($_POST["enter"]=="卡中扣除")
{
 $user=$_SESSION["uname"];
 $sql="select * from usertable where username='$user'";
 $result=mysqli_query($con,$sql);
 $A=mysqli_fetch_assoc($result);
 $money=$A["money"]; //用户原有余额
 $fen=$A["jifen"]; //原有的积分
 if($sum<=$money)
 {
  $yuer=$money-$sum;
  echo $yuer;
  $fen=$fen+$sum; //每1元积1分
  $sql="update usertable set money=$yuer where username='$user'";
  if(mysqli_query($con,$sql))
  {
   echo "<script>alert('付款成功!')</script>";
   mysqli_query($con,"update dingdan set flag=1 where user='$user'");
   mysqli_query($con,"update usertable set jifen=$fen where username='$user'");
   header("refresh:0;url=user.php");  //刷新
  }
  else  {
   echo "<script>alert('付款失败!')</script>";
  }
 } else {
  echo "<script>alert('您的账户余额不足,请充值后再付款!')</script>";
  header("refresh:0;url=user.php");  //延迟跳转到充值页
 }
}
}
}else{ echo "您没有<a href='login.php'>登录</a>";}
?>

</div>
</body>
</html>