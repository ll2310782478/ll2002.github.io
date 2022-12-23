<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>会员中心</title>
<link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="css/css1.css">
<script language="javascript">
function openme(t)
{
 t.style.background="#E6E6FA";
 t.style.color="#333333";
 t.style.cursor="hand";
}
function closeme(t)
{
 t.style.background="#F0F0F0";
 t.style.color="#888888";
}
function closeme1(t)
{
 t.style.background="#FFFFFF";
 t.style.color="#888888";
}
function check()
{
 if(document.f1.m.value=="")
 {
  alert('您的充值不能为空');
  document.f1.m.focus();
  return false;
 }
 else
 {
  m=document.f1.m.value; //得到tel的值
  m_good=m.match(/\b(^[1-9][0-9]*$)\b/gi);
  if(!m_good)
  {
   alert('您输入的金额格式不合法!');
   document.f1.m.value="";
   document.f1.m.focus();
   return false;
  }
 }
}
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
	if(isset($_SESSION["uname"])){   //当已经登录单   
     echo "会员中心 | 当前用户：".$_SESSION['uname'];
  ?>
<form action="user.php" method="post" name="f1">
<table border=0 align=center width=100%  cellspacing=0  cellpadding=4 bordercolorlight=#145AA0 style="line-height:35px">
<caption><b>购物清单</b></caption>
<tr bgcolor=#FDF5E6>
 <th>商品名称</th>
 <th>商品图片</th>
 <th>订购数量</th>
 <th>单价</th>
 <th>小计</th>
 <th>购物时间</th>
</tr>
<?php
//连接到数据库
	$con=mysqli_connect("localhost","root","");
	if(!$con){ echo "连接数据库服务器出错了！"; exit;}
// 打开指定的数据库
	mysqli_select_db($con,"liliang") or die("打开数据库出错了！"); 
	mysqli_query($con,"set names utf8");  //防止汉字乱码



$user=$_SESSION["uname"];
$sql="select dingdan.id as id,sp.spname as name,sp.sptp as photo,dingdan.num as num,sp.spprice as money,dingdan.time as time from sp,dingdan  where sp.spid=dingdan.spid and dingdan.user='$user' and dingdan.flag=1";
//历史记录非空，输出
$result=mysqli_query($con,$sql); 
$n=mysqli_num_rows($result);
if($n!==0){ 
$sum=0;
for($i=0;$i<$n;$i++)
{
 if($i%2==1)
   echo "<tr align=center bgcolor=#F0F0F0 onmouseover='openme(this)' onmouseout='closeme(this)'>";
 else
   echo "<tr align=center onmouseover='openme(this)' onmouseout='closeme1(this)'>";
 $A=mysqli_fetch_array($result);  // var_dump($A);
 echo "<td>$A[name]</td>";
 echo "<td><img src=img/$A[photo] width=30 height=30></td>";
 $bianhao=$A["id"];
 echo "<td>$A[num]</td>";
 echo "<td>￥$A[money]元</td>";
 $t=$A["num"]*$A["money"];
 echo "<td>￥".$t."元</td>";
 echo "<td>$A[time]</td>";
 echo "</tr>";
 $sum+=$t;
}
}else{echo "您没有购物记录！";}
?>
</table>

<?php
//充值
if(isset($_POST["enter"]))
{
 $user=$_SESSION['uname'];
 $m=$_POST["m"];
 $sql="select * from usertable where username='$user'";
 $result=mysqli_query($con,$sql);
 $A=mysqli_fetch_array($result);
 $current=$m+$A["money"];
 $sql="update usertable set money=$current where username='$user'";
 if(mysqli_query($con,$sql)){  
    echo "<script>alert('充值成功!')</script>";
 }else{  echo "<script>alert('充值失败!')</script>"; 
 }
 }
//查询余额
 $sql="select * from usertable where username='$user'";
 $result=mysqli_query($con,$sql);
 $A=mysqli_fetch_array($result);
 echo "<div id='chongzhi'>您的账号余额：￥ <font color=#f00>".$A["money"]."</font> 元<br>";
 echo "当前的积分：<font color=#f00>".$A["jifen"]."</font> 分<br>";
 echo "向卡中充值：<input type=text name=m> 元 ";
 echo "<input type=submit name=enter value=确定 onclick='return check()'></div>";
?>
</form>
<?php	}else{ echo "您没有<a href='login.php'>登录</a>";}
//  include "footer.php";
  ?>

</div>
</body>
</html>