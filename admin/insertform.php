<?php
	session_start();
	if(!isset($_SESSION["flag"]) || ($_SESSION["flag"]==0)){ 
		header("location:../index.php");
		
	}
?>

<form action="insert.php" method="post" enctype="multipart/form-data">
  商品添加页 <p>
  商品名称：<input name="pname" type="text" /><p>
    商品价格：<input name="pprice" type="text" /><p>
    商品介绍：<input name="pjianjie" type="text" /><p>
     商品图片：<input name="sptp" type="file" /><p>	
  	
  <input name="tijiao" type='submit' value="添加"/>
</form>
