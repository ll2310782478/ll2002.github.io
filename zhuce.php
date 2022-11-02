<?php
    //会员用户注册
    //1.连接数据库服务器
    $conn=@mysqli_connect("localhost","root","");
    if(!$conn){echo "数据库服务器连接失败！"; exit();}
    //2.打开数据库
    mysqli_select_db($conn,"li") or die("数据库打开失败");
    mysqli_query($conn,"set names utf8");  //设置字符编写，解决汉字乱码
    //3.获取用户填写的用户名和密码
    $uname=$_POST["username"];  //获取表单中的用户名
    $upass=$_POST["userpwd"];  //获取表单中的密码
    echo "您填写的用户名是{$uname}，密码是{$upass}";
    //4.写入用户名和密码到数据库的user table表中
    //先判断用户名是否占用，查询数据表中的数据
    $sql="select username from usertable where username='$uname'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo "用户名已经被占用，请重新<a href=register.html>注册</a>！";
    }else{
    $sql="insert into usertable(username,userpwd,flag) values('$uname','$upass',0)";
    mysqli_query($conn,$sql) or die("用户注册写入数据时出错了!");
    echo "用户注册成功!";
    }
    //5.关闭数据库连接
    mysqli_close($conn);
?>