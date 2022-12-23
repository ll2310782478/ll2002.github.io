<?php
 if(isset($_GET["id"])){
 $id=$_GET["id"];
 include "conn.php";
 $sql="update sp set haoping=haoping+1 where id='$id'";
 mysqli_query($con,$sql);
  }
 header("location:detail.php");

 
?>