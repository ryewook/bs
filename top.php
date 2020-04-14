<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			.bx{
				height: 60px;
				width: 100%;
				background: #177ec1;
			}
			.bx .container{
				margin: 0 60px;
				overflow: hidden;
			}
			
			.bx .container .right{
				overflow: hidden;
				width: 250px;
				padding-top: 19px;
				float: right;
			}
			.bx .container .right span{
				font-size: 16px;
				color: #fff;
			}
			.bx .container .right .l{
				float: left;
			}
			.bx .container .right .l a{
				text-decoration: none;
				color: #fff;
			}
			.bx .container .right .r{
				float: right;
			}
			.bx .container .right .r a{
				color: #333;
				text-decoration: none;
			}
			.bx .container .right .r a:hover{
				color: #fff;
			}
		</style>
	</head>
	<?php
if(! isset($_SESSION['username']))
{
	header("Location:../login.php");
	exit();
	}
?>
	<body>
		<div class="bx">
			<div class="container">
				<div class="right">
					<span class="l">当前用户：<a><?php echo $_SESSION['username']?></a></span>
					<span class="r"><a href="../logout.php" >退出系统</a></span>
				</div>
			</div>
		</div>
	</body>
</html>
