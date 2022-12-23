
<?php
	session_start();
	if(!isset($_SESSION["flag"]) || ($_SESSION["flag"]==0)){ 
		header("location:../index.php");
		
	}
?>
<h1>后台管理首页</h1>
<a href="../quit.php">安全退出</a>
<hr>
<a href="../index.php">返回网站首页</a>
<hr>
<a href="insertform.php">添加商品</a>
<hr>

<?php	
//连接到数据库
	$conn=mysqli_connect("localhost","root","");
	if(!$conn){ echo "连接数据库服务器出错了！"; exit;}
// 打开指定的数据库
	mysqli_select_db($conn,"db215152") or die("打开数据库出错了！"); 
	mysqli_query($conn,"set names utf8");  //防止汉字乱码
	
    $sql="select * from sp";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       echo "商品信息表如下：";
       //输出sp表中的数据
        echo "<table border='1' width='960'>";
		 echo "<tr>";
		 echo "<td>商品编号</td>";
		 echo "<td>商品名称</td>";
		 echo "<td>商品价格</td>";
		 echo "<td>商品简介</td>";
		 echo "<td>商品图片描述</td>";
		 echo "<td> </td>";
		 echo "<td> </td>";
		 echo "</tr>";

        while($cur_sp=mysqli_fetch_row($result))
		 { 
		 echo "<tr>";
		 echo "<td>$cur_sp[0]</td>";
		 echo "<td>$cur_sp[1]</td>";
		 echo "<td>$cur_sp[2]</td>";
		 echo "<td>$cur_sp[3]</td>";
		 //echo "<td>$cur_sp[4]</td>";
		 echo "<td><img width=60 src=../img/".$cur_sp[4]."></td>";
		 echo "<td> <a href=update.php?id=$cur_sp[0]&name=$cur_sp[1]&price=$cur_sp[2]&jianjie=$cur_sp[3]&tp=$cur_sp[4]>修改</a></td>";
		 
		 
		 echo "<td> <a href=delete.php?id=$cur_sp[0]>删除</a></td>";
		 
		 
		 echo "</tr>";	 
			}
       echo "</table>";
    }else{
    	echo "没有商品";
    }

?>