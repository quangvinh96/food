
<!DOCTYPE html>
<?php
	$url = 'http://localhost/food/';
	// include('database.php');
	session_start();
?>
<html lang="vn">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="format-detection" content="telephone=no">
		<title>HEALTHY EATING</title>
		<link rel="stylesheet" href="<?=$url?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=$url?>css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?=$url?>js/bootstrap.min.js"></script>

		
		
	</head>
	<body>
		<header >
			<div class="headertop" style="position: unset;">
				<div class="container">
					<a href="#" class="headertop_logo"><img src="<?=$url?>imgs/logo.png"></a>
					<div class="headertop_nav">
						<ul class="headertop_nav_menu">
							<li><a href="./index.php">Món Ăn</a></li>
							<li><a href="./nguyenlieu.php">Nguyên Liệu Thô</a></li>
							<li><a href="./loai.php">Loại</a></li>
							<li><a href="./dinhduong.php">GT Dinh Dương</a></li>
							<li><a href="./vitamin.php">Vitamin</a></li>
							<li><a href="./nhomchat.php">Nhóm Chất</a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</header>