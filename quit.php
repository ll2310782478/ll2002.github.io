<?php
//功能是退出账号，本质是释放保存的session变量
session_start();
unset($_SESSION["uname"]);
unset($_SESSION["flag"]);    //销毁
//重定向到首页
header('location:index.php');




?>