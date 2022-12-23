<?php
    session_start();  //启用会话，保存用户身份
    //loginchuli.php,实现用户登录，本质从数据库中读取数据，鉴别用户是否合法
    //思路：把表单上用户名和密码，与usertable表中存储的数据进行比较
    //1.获取表单上的用户名和密码
    $uname=$_POST["username"];
    $upwd=$_POST["passwd"];
    //2.连接到数据库
    $conn=@mysqli_connect("localhost","root","");
    if(!$conn){echo "数据库服务器连接失败！"; exit();}
    //3.打开数据库
    mysqli_select_db($conn,"liliang") or die("数据库打开失败");
    mysqli_query($conn,"set names utf8");
    //4.查询该用户名是否存在
    $sql="select * from usertable where username='$uname' and userpwd='$upwd'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo "登录成功";
        $resultrow=mysqli_fetch_assoc($result);
        $_SESSION["uname"]=$resultrow["username"];
        $_SESSION["flag"]=$resultrow["flag"];
        $_SESSION["userid"]=$resultrow["uid"];
        echo $_SESSION["uname"];
        echo $_SESSION["flag"];
        if($_SESSION["flag"]==1){
            echo "您是管理员";
            // echo "<META HTTP-EQUIV=\"REFRESH" CONTENT="0;URL=muban.php">";
            //重定向到后台商品管理首页
            // header('location:index.php');
            header('location:admin/index.php');
        }
        if($_SESSION["flag"]==0){
            //echo "您是普通会员";
            // echo "<script>alert('您是普通会员')
            // header('location:index.php')
            // </script>";
            // echo "<META HTTP-EQUIV=\"REFRESH" CONTENT="0;URL=muban.php">";
            //重定向到首页
            header('location:index.php');
        }
        
        // else{
        //     echo "<script>alert('您是普通会员')
            
            
        //     </script>";
        //     // echo "您是普通会员";
        //     //重定向到网站首页

        //     // header('location:index.php');
        // }

    }else{ echo "您输入的用户名或密码有误，请重新登陆";}





?>