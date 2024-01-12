<?php include_once "./api/db.php";
if (!isset($_SESSION['user'])) {
	to("index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Back</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="./css/back.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<style>
		/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
		.row.content {
			height: 550px
		}

		/* Set gray background color and 100% height */
		.sidenav {
			background-color: #f1f1f1;
			height: 100%;
		}

		/* On small screens, set height to 'auto' for the grid */
		@media screen and (max-width: 767px) {
			.row.content {
				height: auto;
			}
		}
	</style>
</head>

<body>
	<!-- navbar -->
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light px-4 d-flex">
			<a class="navbar-brand" href="index.php">
				W&nbsp;<i class="fa-solid fa-burger"></i>&nbsp;BURGER
			</a>
			<!-- 管理登入 -->
			<div class="d-flex" style="float:right">
				<button class="btn btn-dark" onclick="document.cookie='user=';location.href='./api/logout.php'">登出</button>
			</div>
			<!-- 管理登入 -->
		</nav>
	</div>
	<!-- navbar -->

	<div class="container-fluid h-100">
		<div class="row h-100">
			<div class="col-sm-2 hidden-xs h-100 text-center">
				<h2>後台管理選單</h2>
				<hr class="" style="color: black;">
				<div class="row h-100 flex-column">
					<div class="col-12 nav-item">
						<a class="back-menu" href="?do=title">
							網站標題管理
						</a>
					</div>
					<div class="col-12 nav-item">
						<a class="back-menu" href="?do=ad">
							動態文字廣告管理
						</a>
					</div>
					<div class="col-12 nav-item">
						<a class="back-menu" href="?do=mvim">
							動畫圖片管理
						</a>
					</div>
					<div class="col-12 nav-item">
						<a class="back-menu" href="?do=image">
							校園映象資料管理
						</a>
					</div>
					<div class="col-12 nav-item">
						<a class="back-menu" href="?do=total">
							進站總人數管理
						</a>
					</div>
					<div class="col-12 nav-item">
						<a class="back-menu" href="?do=bottom">
							頁尾版權資料管理
						</a>
					</div>
					<div class="col-12 nav-item">
						<a class="back-menu" href="?do=news">
							最新消息資料管理
						</a>
					</div>
					<div class="col-12 nav-item">
						<a class="back-menu" href="?do=admin">
							管理者帳號管理
						</a>
					</div>
					<div class="col-12 nav-item">
						<a class="back-menu" href="?do=menu">
							選單管理
						</a>
					</div>
				</div>
			</div>

			<div class="col-sm-10 h-100 bg-danger">
				<!-- <div id="cover" style="display:none; ">
					<div id="coverr">
						<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
						<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
					</div>
				</div> -->
					<!--正中央-->

					<?php
					$do = $_GET['do'] ?? 'title';
					$file = "./back/{$do}.php";
					if (file_exists($file)) {
						include $file;
					} else {
						include "./back/title.php";
					}
					?>

			</div>
		</div>
	</div>

</body>

</html>