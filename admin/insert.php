<?php
/* 向MYSQL数据库sp_info表中写入数据*/
 $pname=$_POST["pname"];
 $pprice=$_POST["pprice"];
 $pjianjie=$_POST["pjianjie"];
 //商品图片放入制定的目录
 $tp=$_FILES["sptp"];
 $sptpname=$tp["name"];  //图片名
 $source=$tp["tmp_name"];  
 $dest="../img/".$sptpname;
 move_uploaded_file($source,$dest)or die("图片移动出错了");
 
 
 $conn=mysqli_connect("localhost","root","");
 if(!$conn){ echo "连接数据库服务器出错了！"; exit;}
// 打开指定的数据库
mysqli_select_db($conn,"liliang") or die("打开数据库出错了！"); 
mysqli_query($conn,"set names utf8");  //防止汉字乱码

  
 $sql="insert into sp(spname,spprice,spjianjie,sptp) values('$pname',$pprice,'$pjianjie','$sptpname')";
 if(mysqli_query($conn,$sql)){
	 echo "商品添加成功！";
}
header("location:index.php");
?>
