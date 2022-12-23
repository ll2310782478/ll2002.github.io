<?php
	session_start();
	if(!isset($_SESSION["flag"]) || ($_SESSION["flag"]==0)){ 
		header("location:../index.php");
		
	}
?>

<?php
$id=$_GET["id"];
$name=$_GET["name"];
$price=$_GET["price"];
$jianjie=$_GET["jianjie"];
$tp=$_GET["tp"];
?>

<form action="updatetable.php" method="post">
  商品修改页 <p>
  商品编号：<input name="pid" type="text" value="<?php echo $id ?>" readonly/><p>
  商品名称：<input name="pname" type="text" size="80" value="<?php echo $name ?>" /><p>
  商品价格：<input name="pprice" type="text"  value="<?php echo $price ?>" /><p>
  商品介绍：<input name="pjianjie" type="text" size="100"  value="<?php echo $jianjie ?>" /><p>
  商品图片：<input name="ptp" type="text" size="80"  value="<?php echo  $tp?>" readonly/><p> 
  <input name="xiugai" type="submit" value="提交"/>
</form>

