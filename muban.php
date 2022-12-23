<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>网站模板</title>
		<style>
			.container{
			width:1000px;
			height:600px;
			border: 2px solid black;
			margin:0 auto;	
			}
			.header{width:980px;
			height:100px;
			border: 2px solid black;
			background: green;	
			}
			.nav{width:980px;
			height:40px;
			border: 2px solid red;
			text-align: center;	
			}
			.nav a{
			text-decoration: none;	
			color:#333;
			/*border:2px solid red;*/
			line-height:40px ;
			margin-left:10px;
			}
			.nav a:hover{
				color:red;
			}
			
			.main{width:980px;
			height:340px;
			border: 2px solid black;
			/*overflow: hidden;	*/
			}
			.footer{width:980px;
			height:100px;
			border: 2px solid black;
			background: green;
			text-align: center;	
			}
			.main_left{
				width:200px;
				height: 330px;
				border:3px solid  red;
				float:left;
			}
			.main_middle{
				width:560px;
				height: 330px;
				border:3px solid  blue;
				float:left;
			}
			.main_right{
				width:200px;
				height: 330px;
				border:3px solid  green;
				float:left;
			}
			.clear{
				clear: both;
			}
			.footer p{
				color:white;
				font-size: 16px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<a href="index.html"><img src="img/logo.png"></a>
				<img src="img/banner.png">
			</div>
			
			<div class="nav">
				<nav>
					<a href="index.html">首页</a>
					<a href="shanshu.html">秦岭山水</a>
					<a href="meishi.html">秦岭美食</a>
					<a href="jingdian.html">旅游景点</a>
					<a href="fupin.html">扶贫故事</a>										
				</nav>
			</div> <!--end of nav -->
			
			<div class="main">
				<div class="main_left">left</div>
				<div class="main_middle">middle</div>
				<div class="main_right">right</div>
				<div class="clear"></div>
			</div> <!-- end of main -->
			
			
			
			
			<div class="footer">
				<p>友情链接：西航</p>
				<p>版权所有：21040051-52</p>
			</div>
		</div>
	</body>
</html>
