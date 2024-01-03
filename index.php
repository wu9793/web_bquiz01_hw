<?php include_once './api/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>卓越科技大學校園資訊系統</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

	<!-- Bootstrap JavaScript 和 jQuery（下拉式選單所需） -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
	<!-- navbar -->
	<div class="container-fliud">
		<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
			<a class="navbar-brand" href="#">卓越科技大學</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<?php
					$mainmu = $Menu->all(['sh' => 1, 'menu_id' => 0]);
					foreach ($mainmu as $main) {
					?>
						<li class="nav-item dropdown">
							<a href="<?= $main['href']; ?>" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<?= $main['text']; ?>
							</a>

							<?php
							if ($Menu->count(['menu_id' => $main['id']]) > 0) {
								$subs = $Menu->all(['menu_id' => $main['id']]);
								echo "<ul class='dropdown-menu' aria-labelledby='navbarDropdown' style=' padding-left: 0;'>";
								foreach ($subs as $sub) {
									echo "<li>";
									echo "<a class='dropdown-item' href='{$sub['href']}'>";
									echo $sub['text'];
									echo "</a>";
									echo "</li>";
								}
							}
							echo "</ul>";
							?>
						</li>

					<?php
					}
					?>
				</ul>
			</div>
			<!-- 管理登入 -->
				<?php
				if (isset($_SESSION['login'])) {
					to("back.php");
				}
	
	
				if (isset($_GET['error'])) {
					echo "<script>alert('{$_GET['error']}')</script>";
				}
	
				?>
			<div class="d-flex">
				<?php
				if (isset($_SESSION['login'])) {
				?>
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="lo('back.php')">返回管理</button>
				<?php
				} else {
				?>
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">管理登入</button>
				<?php
				}
				?>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">管理員登入區</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body mt-3">
							<form method="post" class="signin-form" action="./api/check.php">
								<div class="form-group  col-6 mx-auto">
									<!-- <label class="label" for="acc">帳號</label> -->
									<input class="form-control rounded-5 w-100" name="acc" placeholder="帳號" type="text">
								</div>
								<div class="form-group col-6 mx-auto">
									<!-- <label class="label" for="pw">密碼</label> -->
									<input class="form-control rounded-5  w-100" name="pw" type="password" placeholder="密碼">
								</div>
								<div class="form-group col-6 mx-auto">									
									<button type="submit" value="送出" class="form-control btn btn-primary rounded-5 mb-3">Sign in</button>
								</div>
							</form>
						</div>
						<div class="modal-footer row text-center">

								<div class="col">
									<label class="check-wrap check-primary">
										<input type="checkbox" checked>
										<span class="checkmark"></span>
										Remember Me
									</label>
								</div>
								<div class="col">
									<a href="#">Forget Password</a>
								</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- 管理登入 -->

		</nav>
	</div>
	<!-- navbar -->

	<!--標題-->
	<div class="container" style="height: 12vh;">
		<?php
		$title = $Title->find(['sh' => 1]);
		?>
		<a class="" title="<?= $title['text']; ?>" href="index.php">
			<div class="bg-img" style="background-image:url(&#39;./img/<?= $title['img']; ?>&#39;);"></div>
		</a>
	</div>
	<!--標題-->


	<div class="container">


		<!-- main -->
		<?php
		$do = $_GET['do'] ?? 'main';
		$file = "./front/{$do}.php";
		if (file_exists($file)) {
			include $file;
		} else {
			include "./front/main.php";
		}
		?>

		<!-- main -->


		<!-- 校園映象區 -->
		<div class="">
			<h3 class="">校園映象區</h3>
			<div class="row">
				<div class="col" onclick="pp(1)"><img src="./icon/up.jpg" alt=""></div>
				<div class="col">
					<?php
					$imgs = $Image->all(['sh' => 1]);

					foreach ($imgs as $idx => $img) {
					?>
						<div id="ssaa<?= $idx; ?>">
							<img src="./img/<?= $img['img']; ?>" style="width:150px;height:103px;border:3px solid orange;margin:3px">
						</div>
					<?php
					}
					?>
				</div>
				<div class="col" onclick="pp(2)"><img src="./icon/dn.jpg" alt=""></div>
				<script>
					var nowpage = 1,
						num = <?= $Image->count(['sh' => 1]); ?>;

					function pp(x) {
						var s, t;
						if (x == 1 && nowpage - 1 >= 0) {
							nowpage--;
						}
						if (x == 2 && (nowpage + 1) <= num * 1 - 3) {
							nowpage++;
						}

						$(".im").hide()
						for (s = 0; s <= 2; s++) {
							t = s * 1 + nowpage * 1;
							$("#ssaa" + t).show()

						}
					}


					pp(2)
				</script>
			</div>
		</div>
		<!-- 校園映象區 -->

		<!-- 進站總人數 -->
		<div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
			<span class="t">進站總人數 : <?= $Total->find(1)['total']; ?></span>
		</div>
		<!-- 進站總人數 -->

	</div>
	<!-- footer -->
	<div class="footer">
		<p class="">
			<i class="fa-solid fa-copyright"></i><?= $Bottom->find(1)['bottom']; ?>
		</p>
	</div>
	<!-- footer end -->
</body>

</html>