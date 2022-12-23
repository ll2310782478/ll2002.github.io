<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/css1.css">
<link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg"/>
<title>购物车</title>
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
function select_all()
{
 n=document.f1.elements.length; //当前页面中所有控件的个数
 for(i=0;i<n;i++)
 {
  if(document.f1.elements[i].type=="checkbox")
  document.f1.elements[i].checked=true;
 }
}
function reset_all()
{
 n=document.f1.elements.length; //当前页面中所有控件的个数
 for(i=0;i<n;i++)
 {
  if(document.f1.elements[i].type=="checkbox")
  document.f1.elements[i].checked=false;
 }
}
function delete_all()
{
 n=document.f1.elements.length; //当前页面中所有控件的个数
 str="|";
 for(i=0;i<n;i++)
 {
  if(document.f1.elements[i].checked==true)
  {
   value=document.f1.elements[i].value;
   str=str+value+"|";
  }
 }
 if(str=="|")
  alert('请至少选择一种商品!');
 else
  parent.top.window.location="look.php?str="+str;
}

function na()
{ return confirm('是否真的拿掉该商品?');}

function op(t,id)
{ 
 value=t.value; //按钮上显示的文字 
 if(value=='+')  //带参数跳转，兼容Google、ie
 { parent.top.window.location="look.php?op=add&id="+id; }
 if(value=='-')
 { parent.top.window.location="look.php?op=sub&id="+id; }
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
 <div id="main1">  <!-- 内容开始 -->
    <?php	
	 if(isset($_SESSION["uname"]) ){ //当已经登录单   
      echo "查看购物车 | 当前用户：".$_SESSION['uname']; 
    ?>
  
<form action="look.php" method="post" name="f1">
<table border="0" align="center" width="100%"  cellspacing="0"  style="line-height:35px">
<tr bgcolor=#FDF5E6>
 <th>选择</th>
 <th>商品名称</th>
 <th>商品图片</th>
 <th>订购数量</th>
 <th>单价</th>
 <th>操作</th>
</tr>
<?php
//连接到数据库
	$con=mysqli_connect("localhost","root","");
	if(!$con){ echo "连接数据库服务器出错了！"; exit;}
// 打开指定的数据库
	mysqli_select_db($con,"liliang") or die("打开数据库出错了！"); 
	mysqli_query($con,"set names utf8");  //防止汉字乱码




$user=$_SESSION['uname'];

//除处理"拿掉该商品"超链接删除
if(isset($_GET["id"]) && $_GET["op"]=="移除")
{
 $id=$_GET["id"];
 $sql="delete from dingdan where id=$id";
 if(mysqli_query($con,$sql)){
   echo "<script>alert('拿掉商品成功!')</script>";
  }else{
   echo "<script>alert('拿掉商品失败!')</script>";}  
 echo "<script>location.href('look.php')</script>";
}

//增减按钮处理+、-操作
if(isset($_GET["op"]))
{
 $op=$_GET["op"];
 $id=$_GET["id"]; 
 $sql="select * from dingdan where id=$id";
 $result=mysqli_query($con,$sql)or die('error'); 
 $A=mysqli_fetch_array($result);
 if($op=="add")
 {  $A["num"]++;
  mysqli_query($con,"update dingdan set num=$A[num] where id=$id"); //将加1以后的值写进来
 }
 if($op=="sub")
 {
  if($A["num"]!=1)
  {   $A["num"]--;
   mysqli_query($con,"update dingdan set num=$A[num] where id=$id");
  }
 }
}

//处理"拿掉选中商品"按钮
if(isset($_GET["str"]))
{  
 $str=$_GET["str"];  
 $A=explode("|",$str); //拆分
 for($i=0;$i<count($A);$i++){
  $sql="delete from dingdan where id=$A[$i]";
  mysqli_query($con,$sql);
 }
 echo "<script>alert('拿掉商品成功!')</script>";
 echo "<script>location.href('look.php')</script>";
}

//显示购物车
$sql="select dingdan.id as id,sp.spname as name,sp.sptp as photo,dingdan.num as num,sp.spprice as money from sp,dingdan where sp.spid=dingdan.spid and dingdan.user='$user' and dingdan.flag=0";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n==0) echo "<br/>购物车是空的！";
for($i=0;$i<$n;$i++)
{
 if($i%2==1)
  echo "<tr align=center bgcolor=#F0F0F0 onmouseover='openme(this)' onmouseout='closeme(this)'>";
 else
  echo "<tr align=center onmouseover='openme(this)' onmouseout='closeme1(this)'>";
 $A=mysqli_fetch_array($result);
 echo "<td><input type=checkbox name=flag value=$A[id]></td>";
 echo "<td>$A[name]</td>";
 echo "<td><img src=img/$A[photo] width=30 height=30></td>";
 $bianhao=$A["id"];
 echo "<td><input type=button name=enter value='-' onclick='op(this,$A[id])'> 
 <input type=text name=num{$bianhao} readonly size=3 style='text-align:center' value=$A[num]>
 <input type=button name=enter value='+' onclick='op(this,$A[id])'></td>";
 echo "<td>￥$A[money]元</td>";
 echo "<td><a href=look.php?op=移除&id=$A[id] onclick='return na()'>拿掉该商品</a></td>";
 echo "</tr>";
}
?>
<tr align="center">
 <td colspan="5">
  <input type="button" name="enter" value="全选"  onclick="select_all()">
  <input type="button" name="enter" value="全部取消"  onclick="reset_all()">
  <input type="button" name="enter" value="拿掉选中商品" onclick="delete_all()">
 </td>
</tr>
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
 echo $sum." 元";
 echo " | <a href=jiekuan.php>去付款</a>";
?>
</form>
<?php
//若用户没有登录
}else{ echo "您没有<a href='login.php'>登录</a>";}
?>
</div><!-- 内容 结束 -->
<?php //include "footer.php"; ?>
</div>
</body>
</html>