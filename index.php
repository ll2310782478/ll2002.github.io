<?php session_start();   //启用session  ?>
<!DOCTYPE html>


<html>
    <hand>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />

        <meta charest="UTP-8">
        <title></title>
        <style>

            .container{width:1500px;
                height:1900px;
                border:0px solid black;
                margin: 0 auto;
            }


            .container1{width:300px;
                height:550px;
                background-color: #e0e0e0;
                border:0px solid black;
                margin: 0 auto;
                /* color:; */
                
                /* position: relative; */
                float: left;
                /* margin-left:10px; */
                /* margin-top: 5px; */
            
            }
            /*首先准备一个放图片的容器*/
            .container2{
                width: 1200px;
                height: 550px;
                position: relative;
                border:0px solid black;
                /* margin: 0 auto; */
                /* top: 0px; */
                /* right: 10px; */
                left: 300px;
                /* margin-left:10px; */
            /* border: 1px solid #ccc; */
                /* float: left;
                    margin-left:30px; */
            }
        /*图片样式*/
            .container2 img{
                width: 1200px;
                height: 550px;
                position: absolute;
                left: 0%;
                border:0px solid black;
                /* margin-left:10px; */
                /* margin: 0 auto; */
                /* position: relative; */
                /* 把所有图片放在同一个位置 */
                width: 100%;
                transition-duration: 0.3s;    /*设置过渡时间*/
                opacity: 0;

                /* left: auto; */
                /* float: left;
                margin-left:10px; */
            }
            .wenzi0{
                width:1500px;
                height:150px;
                border:0px solid black;
                /* border:1px solid black; */
                margin: 0 auto;
                margin-top: 10px;

            }
            .wenzi0 img{
                width: 1500px;
                height: 150px;
            }
            .wenzishang0{
                width:1500px;
                height:80px;
                border:0px solid black;
                /* border:1px solid black; */
                /* margin: 0 auto; */
                /* margin-top: 10px; */
                float: left;
                margin-left:5px;

            }
            .wenzishang{
                width:150px;
                height:60px;
                border:0px solid black;
                /* border:1px solid black; */
                /* margin: 0 auto; */
                margin-top: 10px;
                float: left;
                margin-left:5px;

            }
            .wenzishang a{
                font-size: 30px;
	            display: block;
	                /* padding: 120px 60px; */
	            font-family: "微软雅黑", "宋体";
	            /* background: #CD1F25; */
                margin-top: 10px;
    
    
	            color: black;
	            text-decoration: none;

            }
            .wenzishang1{
                width:150px;
                height:60px;
                border:0px solid black;
                /* border:1px solid black; */
                /* margin: 0 auto; */
                margin-top: 10px;
                float: right;
                margin-right:5px;

            }
            .wenzishang1 a{
                font-size: 20px;
                
	            display: block;
	                /* padding: 120px 60px; */
	            font-family: "微软雅黑", "宋体";
	            /* background: #CD1F25; */
                /* margin-bottom: 10%; */
                margin-top: 30px;
                float: right;
                margin-right:10%;
    
    
	            color: black;
	            text-decoration: none;

            }



            .wenzi{
                width:1510px;
                height:680px;
                border:0px solid black;
                /* border:1px solid black; */
                /* margin: 0 auto; */
                margin-top: 5%;
            }
           

            .wenzi1{
                border:0px solid black;
                
                /* border:1px solid black; */
                width: 280px;
                height: 650px;
                position: relative;
                float: left;
                margin-left:5px;
                margin-top: 10px;
                /* background: #f47c7c; */
            }
            .wenzi1 img{
                width: 280px;
                height: 650px;
            }
            .wenzi2{
                border:0px solid black;
                
                /* border:1px solid black; */
                width: 1200px;
                height: 650px;
                /* position: relative; */
                float: left;
                margin-left:10px;
                margin-top: 10px;
            }
            /* .wenzi2 img{
                width: 490px;
                height: 500px;
            } */
            
            
            .rcolumn_nav ul {
                border:0px solid;
                background-color: #e0e0e0;
	list-style: none;
	margin: 0px;
	padding: 0px;
}/*设置ul标签列表项为无，外边距和内边距为0*/
.rcolumn_nav li {
    border:0px solid;
	padding-bottom: 4px;
}/*设置li标签下内边距为4像素*/
/*设置超链接样式*/
/*设置a标签为块级元素，高度为当前字体的1倍， 内边距为8像素， 文字下划线为无， 左边框大小为44像素 实线  橙色*/
.rcolumn_nav li a {
    border:0px solid;
	display: block;
	height: 1em;
	padding: 8px;
	text-decoration: none;
	border-left: 10px solid #222222;
}
/*设置激活时的链接样式为： 字体为白色，背景色为黑色*/
.rcolumn_nav li a:link, .rcolumn_nav li a:visited {
    border:0px solid;
	/* color: #FFF; */
    color:#434242 ;
	background-color: #e0e0e0;
}
/*设置鼠标经过时的样式为：背景色为红色*/
.rcolumn_nav li a:hover {
    border:0px solid;
	background-color: #ff6700;
	color: #FFF;
}


.add-cart {
    border:0px solid;
	float: right;
	display: inline-block;
}
.add-cart h4 a {
	font-size: 12px;
	display: block;
	padding: 10px 15px;
	font-family: "微软雅黑", "宋体";
	background: #CD1F25;
    
	color: #FFF;
	text-decoration: none;
}
.add-cart h4 a:hover {
    border:0px solid;
	
	background: #292929;
}


            
            div,ul,li{
                border:1px solid;
            
                margin: 0;
                padding: 0;
            }
        
        /*图片显示开关*/
            .container2 img.on{
                opacity: 1;                /*用于显示图片*/
            }
        /*左右按钮 按钮用图片更好点,这里为了简便就用大于小于号*/
        .left, .right{
            border:0px solid black;
            position: absolute;
            top: 50%;
            width: 60px;
            height: 100px;
            line-height: 100px;
            background-color: #666;
            opacity: 0.5;
            text-align: center;
            font-size: 60px;
            color: #ccc;
            /* display: none;    先隐藏按钮 */
            cursor: pointer;    /*设置鼠标悬停时的样式*/
        }
        .left{
            border:0px solid black;
            left: 0;
        }
        .right{
            border:0px solid black;
            right: 0;
        }
        .container2:hover .left, .container2:hover .right{
            border:0px solid black;
            display: block;  /*鼠标悬停才容器范围内时显示按钮*/
        }
        .left:hover, .right:hover{
            border:0px solid black;
            color: #fff;
        }
        /*焦点*/
        .container2 ul{
            border:0px solid black;
            position: absolute;
            top: 92%;
            left: 465px;
            padding: 5px 100px;
        }
        /* 图片下三点位置 */
        .container2 ul li{
            border:0px solid black;
            list-style: none;
            float: left;
            background-color: #ccc;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-left: 10px;
            cursor: pointer;
        }
        .container2 ul li.active{
            background-color: #282923;        /*焦点激活时的样式*/
        }
            .hesder{width:1500px;
                border:0px solid black;
                height:25px;
                text-decoration: none;
                /* border:1px solid black; */
                /* position: relative; */
                /* z-index: 1; */
                margin:0 auto;
                background: #434242;        /*背景颜色*/
                /* color: #CD1F25; */
                
                
            }
            
            .hesder_1{
                border:0px solid black;
                width:500px;
                height:23px;
                text-decoration: none;
                /* border:1px solid black; */
                /* position: absolute; */
                /* z-index: 10; */
                float: right;
                margin-right:50px;
                /* margin-top: 20px; */



            }
            .hesder_1 a{
                
                text-decoration: none;
                float: right;
                font-display: black;
                margin-right:1px;
                margin-bottom: 0px;
                color: #fff;
                /* background: #f47c7c; */



            }
            /* .hesder_2{
                width:400px;
                height:150px;
                text-decoration: none;
                /* border:1px solid black; */
                /* position: absolute; */
                /* z-index: 10; 
                float: left;
                margin-left:0px;
                margin-top: 15px;
            } */
            .hesder_3{
                border:0px solid black;
                width:350px;
                height:24px;
                text-decoration: none;
                /* border:1px solid black; */
                /* position: absolute; */
                /* z-index: 10; */
                float: left;
                margin-left:1px;
                margin-top: 0px;



            }
            .hesder_3 a{
                
                text-decoration: none;
                float: left;
                font-display: black;
                margin-left:1px;
                margin-top: 0px;
                color: #fff;
                background:black;



            }



         
            /*.man{width:1000px;
                height:100px;
                border:1px solid black;
                margin:0 auto;
                
            }*/

            
            /* .menuNav a{
                text-decoration: none;去掉下划线
                color: #333;
                float: left;
                margin-left:0px ;间距
                line-height:20px;行高



            } */
            .menuNav{width:1500px;
                border:0px solid black;
                height:65px;
                /* border:1px solid black; */
                margin:0 auto;
                /*字居中*/
                

                /* background: #e8f9fd; */
                
            }
            .menuNav1{width:140px;
                border:0px solid black;
                height:65px;
                /* border:1px solid black; */
                margin:0 auto;
                /*字居中*/
                float: left;
                margin-left:100px;
                margin-top: 0px;
                

                /* background: #f47c7c;背景颜色 */
            }
            .menuNav1 a{
                text-decoration: none;/*去掉下划线*/
                color: #333;
                float: left;
                margin-left:40px ;/*间距*/
                line-height:20px;/*行高*/



            }

            .menuNav2{width:140px;
                border:0px solid black;
                height:65px;
                /* border:1px solid black; */
                margin:0 auto;
                /*字居中*/
                float: left;
                margin-left:1px;
                margin-top: 0px;
                

                /* background: #f47c7c;背景颜色 */
            }
            .menuNav2 a{
                text-decoration: none;/*去掉下划线*/
                color: #333;
                float: left;
                margin-left:40px ;/*间距*/
                line-height:20px;/*行高*/



            }

            .menuNav3{width:140px;
                border:0px solid black;
                height:65px;
                /* border:1px solid black; */
                margin:0 auto;
                /*字居中*/
                float: left;
                margin-left:1px;
                margin-top: 0px;
                

                /* background: #f47c7c; */
            }
            .menuNav3 a{
                text-decoration: none;/*去掉下划线*/
                color: #333;
                float: left;
                margin-left:40px ;/*间距*/
                line-height:20px;/*行高*/



            }

            .menuNav4{width:140px;
                border:0px solid black;
                height:65px;
                /* border:1px solid black; */
                margin:0 auto;
                /*字居中*/
                float: left;
                margin-left:1px;
                margin-top: 0px;
                

                /* background: #ffe69a;背景颜色 */
            }
            .menuNav4 a{
                text-decoration: none;/*去掉下划线*/
                color: #333;
                float: left;
                margin-left:40px ;/*间距*/
                line-height:20px;/*行高*/



            }

            .menuNav5{width:140px;
                border:0px solid black;
                height:65px;
                /* border:1px solid black; */
                margin:0 auto;
                /*字居中*/
                float: left;
                margin-left:1px;
                margin-top: 0px;
                

                /* background: #ffe69a;背景颜色 */
            }
            .menuNav5 a{
                text-decoration: none;/*去掉下划线*/
                color: #333;
                float: left;
                margin-left:40px ;/*间距*/
                line-height:20px;/*行高*/



            }

            .menuNav6{width:140px;
                border:0px solid black;
                height:65px;
                /* border:1px solid black; */
                margin:0 auto;
                /*字居中*/
                float: left;
                margin-left:1px;
                margin-top: 0px;
                

                /* background: #ffe69a;背景颜色 */
            }
            .menuNav6 a{
                text-decoration: none;/*去掉下划线*/
                color: #333;
                float: left;
                margin-left:40px ;/*间距*/
                line-height:20px;/*行高*/



            }

            .menuNav7{width:140px;
                border:0px solid black;
                height:65px;
                /* border:1px solid black; */
                margin:0 auto;
                /*字居中*/
                float: left;
                margin-left:1px;
                margin-top: 0px;
                

                /* background: #ffe69a;背景颜色 */
            }
            .menuNav7 a{
                text-decoration: none;/*去掉下划线*/
                color: #333;
                float: left;
                margin-left:40px ;/*间距*/
                line-height:20px;/*行高*/



            }
            .menuNav8{width:300px;
                border:0px solid black;
                height:65px;
                /* /* border:1px solid black;  */
                margin:0 auto;
                /* /*字居中 */
                float: right;
                margin-right:90px;
                margin-top: 0px;
                

                /* /* background: #ffe69a;背景颜色  */
            }
            
            .menuNav9{width:290px;
                border:0px solid black;
                height:25px;
                /* border:1px solid black; */
                margin:0 auto;
                /*字居中*/
                float: left;
                margin-left:1px;
                margin-top: 15px;
                

                /* background: #ffe69a;背景颜色 */
            }
            .menuNav9 a{
                text-decoration: none;/*去掉下划线*/
                color: #333;
                float: left;
                margin:0 auto;
                /*字居中*/
                margin-left:40px ;/*间距*/
                line-height:20px;/*行高*/
                /* margin-top: 50%; */



            }








            /* .menuNav_bg{
                color: aqua;
            } */
            /* 导航栏变色 */
            .menuNav1:hover{
                background-color: #ff6700;
            }
            .menuNav2:hover{
                background-color: #ff6700;
            }
            .menuNav3:hover{
                background-color: #ff6700;
            }
            .menuNav4:hover{
                background-color: #ff6700;
            }
            .menuNav5:hover{
                background-color: #ff6700;
            }
            .menuNav6:hover{
                background-color: #ff6700;
            }
            .menuNav7:hover{
                background-color: #ff6700;
            }
            
            
            .main{width:1500px;
                border:0px solid black;
                height:550px;
                /* border:1px solid black; */
                margin:0 auto;
                /* background: #e8f9fd; */
                /*背景颜色*/
                
                
            }
            .di{width:1500px;
                border:0px solid black;
                height:90px;
                /* top: 10%; */
                margin-top: 10px;
                
                /* margin:0 auto; */
                /* background: #e8f9fd; */
                /*背景颜色*/
                

            }
            .di img{
                width: 1500px;
                height: 90px;
            }
            .di1{width:1500px;
                border:0px solid black;
                height:200px;
                /* top: 10%; */
                margin-top: 10px;
                
                /* margin:0 auto; */
                /* background: #e8f9fd; */
                /*背景颜色*/
                

            }
            .di1 img{
                width: 1500px;
                height: 200px;
            }
            .t1{
                text-align: center;
            }
            
            /* .main_left
            {
            width:350px;
            height:520px;
            border:1px solid black;
            float: left;
            margin-left:10px;
            margin-top: 15px;

            }
            .main_left img{
                width: 350px;
                height: 520px;
            }
            .main_center
            {
            width:800px;
            height:520px;
            border:1px solid black;
            float: left;
            margin-left:13px;
            margin-top:15px;
            }
            .main_center img{
                width: 800px;
                height: 520px;
            }
            .main_right
            {
            width:300px;
            height:520px;
            border:1px solid black;
            float: left;
            margin-left:13px;
            margin-top:15px;
            }
            .main_right img{
                width: 300px;
                height: 520px;
            } */
            /* .footer{width:1500px;
                height:180px;
                /* border:1px solid black; 
                margin:0 auto;
                top: 99%;
                
                
            }
            .footer_1{
                width:1500px;
                height:22px;
                /* border:1px solid black; */
                /* margin:0 auto; 
             
            


            .footer_2{
                width:250px;
                height:50px;
                text-decoration: none;
                /* border:1px solid black; */
                /* position: absolute; */
                /* z-index: 10; 
                float: right;
                margin-right:650px;
                margin-top: -100px;



            }
            .footer_2 a{
                
                text-decoration: none;
                float: left;
                font-display: black;
                margin-left:1px;
                margin-top: 0px;
            } 

            /* .rcolumn img{
                width: 1500px;
                height: 550px;
                /* position: absolute;        /*把所有图片放在同一个位置*/
                /* width: 100%;
                transition-duration: 0.5s;    /*设置过渡时间*/
                

        </style> 
    </hand>
    <body>
        
        
        <div class="container">
            
            <div class="hesder">
                <div class="hesder_3">
                    <label id="time" style="color:#fff ;"></label>
                    <script type="text/javascript">
                    window.onload=function(){
                        
                        setInterval(function(){
                        fnDate();},1000);
                        }
                        function fnDate(){
                        var t=new Date();
                        var year=t.getFullYear();
                        var month=t.getMonth();
                        var date=t.getDate();
                        var day=t.getDay();
                        var weekday=new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
                        var curHour=t.getHours();
                        var curMinute=t.getMinutes();
                        var curSec=t.getSeconds();
                        function fnw(str){
                        var num;
                        str>10?num=str:num="0"+str;
                        return num;
                        }
                        var box=document.getElementById("time");
                        box.innerText=""+fnw(year)+"年"+fnw(month+1)+"月"+fnw(date)+"日"+
                        fnw(curHour)+"时"+fnw(curMinute)+"分"+fnw(curSec)+"秒";
                        }
                    
                    </script>
                           
                    
                    </div>
                    <div>
                            
                     
                    
                            <span class="hesder_1">
                                <a href="index.php"  >首页</a>
                                <a>|</a>
                                <?php
                          if(!isset($_SESSION["uname"])){  //若用户没有登陆
                            echo "<a href=register.html>,注册]</a>";
                            echo "<a href=login.html>[请登录</a>";
                            
                            }else{   //用户已经登录了
                                echo "<a href=quit.php>,安全退出 ]</a>";
                            echo "<a href=#>[".$_SESSION["uname"]."</a>" ;
                            if($_SESSION["flag"]==1){
                             echo "<a href=admin/index.php>,后台商品管理</a>";	
                            }
                            
                            echo "<a href=user.php>,用户中心 ";
                            echo "<a href=look.php>购物车 ";
                            
                            }
                            ?>	
                                <!-- <a href="del.html" style="color:black">登录</a> -->
                                <!-- <a>|</a> -->
                                <!-- <a href="denglu.html" style="color: black;">个人中心</a> -->
                            </span>
                            </div>
                    
        
                
                    
                <!-- <div class="hesder_2">
                    <a href="index.html"><img src="img/logo.png" alt="handsome" style="width: 100%;" height="100%"></a>

                </div> -->
            
                <!-- <div style="background: url('img/logo背景.png') no-repeat;width:1500px;height:200px"> -->
                
            
                
                
                
            
                
            </div>
            <div class="menuNav" id="menu">
                <div class="menuNav1">
                    <a href="index.html"><h4>Xiaomi手机</h4></a>
                </div>
                <div class="menuNav2">
                    <a href="erji1.html"><h4>Redmi手机</h4></a>
                </div>
                <div class="menuNav3">
                    <a href="erji2.html"><h4>电视</h4></a>
                </div>
                <div class="menuNav4">
                    <a href="erji3.html"><h4>笔记本</h4></a>
                </div>
                <div class="menuNav5">
                    <a href="css.html"><h4>平板</h4></a>
                </div>
                <div class="menuNav6">
                    <a href="css.html"><h4>家电</h4></a>
                </div>
                <div class="menuNav7">
                    <a href="css.html"><h4>服务中心</h4></a>
                </div>
                <div class="menuNav8">
                <div class="menuNav9">
                <form method="get" action="">
					关键字：<input type="text" name="keyword">
					<input type="submit" name="search" value="查找">
				</form>	
                    <!-- <a href="css.html"><h4>社区</h4></a> -->
                </div>
                </div>
                

                
            </div>


            


            
            <div class="main">
                <div class="container1">
                <div class="rcolumn_nav" style="border:0px solid;">
                      <!-- <h4 class="flx font12 zhongse mainrtitle" >商品分类</h4> -->
                      <ul class="flx font12 fstong" >
                        <li><a href="#">手机</a></li>
                        <li><a href="#">电视</a></li>
                        <li><a href="#">家电</a></li>
                        <li><a href="#">笔记本</a></li>
                        <li><a href="#">平板</a></li>
                        <li><a href="#">出行 穿戴</a></li>
                        <li><a href="#">耳机 音响</a></li>
                        <li><a href="#">健康 儿童</a></li>
                        <li><a href="#">生活 箱包</a></li>
                        <li><a href="#">智能 路由器</a></li>
                        <li><a href="#">电源</a></li>
                        <li><a href="#">配件</a></li>
                        <li><a href="#">产品售后</a></li>
                        <li><a href="#">产品说明</a></li>
                        <li><a href="#">优惠卷</a></li>
                        <!-- <li><a href="#">数码科技</a></li>
                        <li><a href="#">亲子套装</a></li>
                        <li><a href="#">商超食品</a></li>
                        <li><a href="#">海外直购</a></li> -->
                      </ul>
                    </div>



            <!-- <img src="img/飞臭.jpg"> -->


            </div>




                
                
                <!-- <div class="main_left"> -->
                    <!-- <img src="img/飞臭.jpg"> -->
                <!-- <img src="img/眼镜小男孩.jpg"> -->
                <!-- </div> -->
                <!-- <div class="main_center"> -->
                    <div class="container2">
                        <!-- 先把第一张图片显示出来 -->
                        
                        <img class="on" src="img/lun3.png"/>
                        <img src="img/con3.png"/>
                        <img src="img/lun2.png"/>
                        <!-- 左右切换 -->
                        <div class="left"><</div>
                        <div class="right">></div>
                        <!-- 焦点 -->
                        <ul>
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                        </ul>
                    <!-- </div> -->
                    
                    
                </div>
                <script type="text/javascript">
               
                //1、找到container下的所有img标签,li标签,左右按钮
                var aImgs = document.querySelectorAll('.container2 img');
                var aLis = document.querySelectorAll('.container2 li');
                var btnLeft = document.querySelector('.container2 .left');
                var btnRight = document.querySelector('.container2 .right');
                //点击事件
                //点击按钮图片切换
                var index = 0;        //当前图片下标
                var lastIndex = 0;
                btnRight.onclick = function(){
                    //记录上一张图片的下标
                    lastIndex = index;
                    //清除上一张图片的样式
                    aImgs[lastIndex].className = '';
                    aLis[lastIndex].className = '';
                    index++;
                    index %= aImgs.length;    //实现周期性变化
                    //设置当前图片的样式
                    aImgs[index].className = 'on';
                    aLis[index].className = 'active';
                }
                //左边按钮类似
                btnLeft.onclick = function(){
                    //记录上一张图片的下标
                    lastIndex = index;
                    //清除上一张图片的样式
                    aImgs[lastIndex].className = '';
                    aLis[lastIndex].className = '';
                    index--;
                    if (index < 0) {
                        index = aImgs.length - 1;
                    }
                    //设置当前图片的样式
                    aImgs[index].className = 'on';
                    aLis[index].className = 'active';
                }
            </script>
                <!-- <div class="main_right"> -->
                    <!-- <img src="img/飞娇.jpg"> -->
                <!-- </div> -->
                
            </div>
            <div class="wenzi0">
            <!-- <div style="background: url('img/shoujishang.webg') no-repeat;width:1500px;height:150px"></div> -->
            <img src="img/shoujishang.webp">

            </div>
            <div class="wenzishang0">
            <!-- <div style="background: url('img/shoujishang.webg') no-repeat;width:1500px;height:150px"></div> -->
            <!-- <img src="img/shoujishang.webp"> -->
            <div class="wenzishang">
                <a>手机</a>
            </div>
            <div class="wenzishang1">
                <a>查看更多</a>
            </div>

            </div>
            
            <div class="wenzi">
                <!-- <div class="wenzi1"><img src="img/img/首页1.png"></div> -->
                <div class="wenzi1">
                <img src="img/wenzi1.webp">
                  </div>
                <div class="wenzi2">

                <?php
				   //思路： 从sp数据表中读取商品数据，并显示
				 	
//连接到数据库
	$conn=mysqli_connect("localhost","root","");
	if(!$conn){ echo "连接数据库服务器出错了！"; exit;}
// 打开指定的数据库
	mysqli_select_db($conn,"liliang") or die("打开数据库出错了！"); 
	mysqli_query($conn,"set names utf8");  //防止汉字乱码
	
	//构造动态查询
	if(isset($_GET["search"]) && !empty($_GET["keyword"]))
	{
		$keyword=$_GET["keyword"];
	    $sql="select * from sp where spname like '%$keyword%'";
	}else{
    $sql="select * from sp";
    }
    
    
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       //echo "商品信息表如下：";
       //输出sp表中的数据
        echo "<table border='0' width='100%' class=t1>";	
        	$i=0;  //控制换行，每行输出4个商品图片
        	echo "<tr>";  	
        while($cur_sp=mysqli_fetch_row($result))
		 { 
		 echo "<td>";
		// echo "<img width=180 height=180 src=img/".$cur_sp[4].">.<br>";
		 echo "<a href='detail.php?spid=$cur_sp[0]&spname=$cur_sp[1]&price=$cur_sp[2]&jianjie=$cur_sp[3]&shuliang=9&picture=$cur_sp[4]&haoping=$cur_sp[5]&buyflag=1'>
	<img src='./img/$cur_sp[4]' width='250' height='280'></a> 
    <br>";		
		 	
		 	
		 	
		 echo "￥". $cur_sp[2]."元 <br>	";	
		 echo $cur_sp[1];
		 echo "</td>";

		 $i++;
		 if($i%4==0)  {echo "</tr>";   echo "<tr>";}  //每行4个商品
			}
		echo "</tr>";		
       echo "</table>";
    }else{
    	echo "没有商品";
    }		   
				 ?>
                    <!-- <img src="img/img/首页2.png"> -->
                
                </div>
                
            </div>

            <!-- <div class="footer">
                <div style="background: url('img/背景2.png') no-repeat;width:1500px;height:180px"></div>
                <div>
                    
                    <span class="footer_2">
                        <h4><a>联系人：李亮</a></h4>
                        <h4><a>联系方式：2310782478@qq.com</a></h4>
                    </span>
                </div>
                
            </div> -->
            
            
            <div class="di">
            <img src="img/ditu.jpg">
            <!-- <a>联系人：李亮</a> -->
            </div>
            <div class="di1">
            <img src="img/di1.jpg">

            </div>
            
            
        </div>
        
        
    
            
    </body>

</html>




