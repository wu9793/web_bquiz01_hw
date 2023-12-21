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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
	<!--標題-->
	<div class="container-fliud sticky-top" style="height: 10vh;">
		<?php
		$title = $Title->find(['sh' => 1]);
		?>
		<a class="" title="<?= $title['text']; ?>" href="index.php">
			<div class="title" style="background:url(&#39;./img/<?= $title['img']; ?>&#39;);"></div>
		</a>
	</div>
	<!--標題-->

	<!-- navbar -->
	<div class="container-fliud">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<a class="navbar-brand" href="#">Navbar</a>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<!-- <li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li> -->

					<?php
					$mainmu = $Menu->all(['sh' => 1, 'menu_id' => 0]);
					foreach ($mainmu as $main) {
					?>
						<li class="nav-item dropdown">
							<a href="<?= $main['href']; ?>" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<?= $main['text']; ?>
							</a>

							<?php
							if ($Menu->count(['menu_id' => $main['id']]) > 0) {
								$subs = $Menu->all(['menu_id' => $main['id']]);
								echo "<ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink' style='list-style-type: none; padding-left: 0;'>";
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
			<div class="d-flex">
				<?php
				if (isset($_SESSION['login'])) {
				?>
					<button class="btn btn-outline-success" type="submit" onclick="lo('back.php')">返回管理</button>
				<?php
				} else {
				?>
					<button class="btn btn-outline-success" type="submit" onclick="lo('?do=login')">管理登入</button>
				<?php
				}
				?>
			</div>
			<!-- 管理登入 -->

		</nav>
	</div>
	<!-- navbar -->

	<div class="container">


		<!-- main -->
		<div class="main">
			<?php
			$do = $_GET['do'] ?? 'main';
			$file = "./front/{$do}.php";
			if (file_exists($file)) {
				include $file;
			} else {
				include "./front/main.php";
			}
			?>
		</div>
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


		<div class="container">
			<div class="row">
				<?php
				$imgs = $Image->all(['sh' => 1]);

				for ($i = 0; $i < count($imgs); $i++) {
					// 显示每4张图片为一组，创建一个card列
					if ($i % 4 == 0) {
						echo '<div class="col-3 mb-3">';
						echo '<div class="card-deck">';
					}
				?>
					<div class="card">
						<img src="./img/<?= $imgs[$i]['img']; ?>" class="card-img-top" alt="">
						<!-- 如果有需要可以添加其他卡片内容 -->
					</div>
				<?php
					// 每组显示4张图片，闭合card列
					if ($i % 4 == 3 || $i == count($imgs) - 1) {
						echo '</div>';
						echo '</div>';
					}
				}
				?>
			</div>
			<div class="row mt-3">
				<div class="col">
					<button class="btn btn-primary" onclick="move('left')">上移</button>
				</div>
				<div class="col text-end">
					<button class="btn btn-primary" onclick="move('right')">下移</button>
				</div>
			</div>
		</div>

		<script>
			var currentPosition = 0; // 当前显示的照片位置

			function move(direction) {
				var cards = document.querySelectorAll('.card-deck');
				var numCards = cards.length;

				if (direction === 'left' && currentPosition > 0) {
					cards[currentPosition].classList.add('d-none');
					currentPosition--;
					cards[currentPosition].classList.remove('d-none');
				} else if (direction === 'right' && currentPosition < numCards - 1) {
					cards[currentPosition].classList.add('d-none');
					currentPosition++;
					cards[currentPosition].classList.remove('d-none');
				}
			}
		</script>


	</div>
	<!-- footer -->
	<div class="bg-secondary">
		<p class="text-center mt-2 bg-light">
			<i class="fa-solid fa-copyright"></i><?= $Bottom->find(1)['bottom']; ?>
		</p>
	</div>
	<!-- footer end -->

</body>

</html>