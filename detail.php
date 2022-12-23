<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>商品详细信息</title>
<link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg"/>
<style>
  #left,#right{ float:left; margin-left:20px;}
</style>
<script>  
function oper(t,money)
{  
 value=t.value;
 num=parseInt(document.f1.num.value);
 if(value=='+')
 {
  num++;
  sum=num*money;
  document.f1.num.value=num;
  document.f1.sum.value=sum.toFixed(2);
 }
 if(value=='-')
 {
  if(num==1)
    alert('订购数量至少为1');
  else
    num--;
  sum=num*money;
  document.f1.num.value=num;
  document.f1.sum.value=sum.toFixed(2);
 }
}

</script>
</head>

<body>
 <?php
  
if(isset($_GET["buyflag"])){ //判断是单击超链接后转进来
// 1. 接收URL参数
     $spid=$_GET["spid"];
	 $spname=$_GET["spname"];
	 $price=$_GET["price"];
	 $jianjie=$_GET["jianjie"];
	 $shuliang=$_GET["shuliang"];
	 $haoping=$_GET["haoping"];
     $picture="./img/".$_GET["picture"];
?>
 <div id='left'>
 <img src='<?php echo $picture ?>' width='500'><br/> 
 <a href=haoping.php?id=<?php echo $spid?>>给此物好评</a> 
 </div>
 <div id='right'>
 <?php echo "商品名称： $spname"; 
   echo "<br><br>";
   echo "商品描述： $jianjie"; 
   echo "<br><br>";
   echo "商品评价："; 
    if($haoping>50) $haoping=50; 
    @$xing=ceil($haoping/10);
	$xing2=5-$xing;
    for($i=1;$i<=$xing;$i++)
    { echo "<img src=img/star.png width=20  alt='评价'>"; }
    for($i=1;$i<=$xing2;$i++)
    { echo "<img src=img/star2.jpg width=20  alt='评价'>";} 
   echo "<br><br>";
   echo "单价： ￥  $price"; 
   echo "<br><br>";
 ?>
 <form action="buy.php" method="post"  name="f1">
购买数量：&nbsp;&nbsp;
  <input type="button" name="enter" value='-' onclick='oper(this,<?php echo $price;?>)'>
  <input type="text" name="num" readonly size=3 style='text-align:center' value="1" required> 
  <input type="button" name="enter" value='+' onclick='oper(this,<?php echo $price;?>)'> 件
  <br>小计：<font color=#810213 size=5><b>￥</b></font>
   <input type=text name=sum style='border:0px;color:#810213;font-size:23px;font-weight:bold;width:120px'
    readonly value=<?php echo $price;?>>
   
<br>
<input type="hidden" name="spid" value=<?php echo $spid;?>  readonly required><br> 
<p><input type="submit" value="加入购物车" name="goumai" required/>
 <br/><br/><a href="index.php">继续浏览商品</a> 
 <a href="look.php">查看购物车</a>
</form>

<?php
   }else{  
  header("location:index.php");}
?>
</body>
</html>