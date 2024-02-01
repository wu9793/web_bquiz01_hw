<?php include_once './api/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>W.BURGER</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/js.js"></script>
	<!-- Bootstrap CSS、JS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- swiper CSS -->
	<link rel="stylesheet" href="./css/swiper.css">
	<script src="./js/swiper.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
	<!-- navbar -->
	<div class="container-fluid">
		<nav id="navbar" class="navbar navbar-expand-lg fixed-top p-0">
			<a class="navbar-brand ml-5 logo" href="index.php">
				W&nbsp;<i class="fa-solid fa-burger"></i>&nbsp;BURGER
			</a>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav ml-auto">
					<?php
					if (isset($_SESSION['login'])) {
						to("back.php");
					}
					if (isset($_GET['error'])) {
						echo "<script>alert('{$_GET['error']}')</script>";
					}
					?>
					<!-- 管理登入 -->
					<li class="nav-item px-3">
						<a class="nav-link">
							<button class="btn hover" type="button" data-bs-toggle="offcanvas" data-bs-target="#side-login">
								<i class="fa-solid fa-user"></i>
							</button>
						</a>
					</li>
					<li class="nav-item px-3">
						<!-- 管理登入 -->
						<a class="nav-link">
							<button class="btn hover" type="button" data-bs-toggle="offcanvas" data-bs-target="#side-shop">
								<i class="fa-solid fa-bag-shopping"></i>
							</button>
						</a>
					</li>
					<li class="nav-item px-3">
						<a class="nav-link">
							<button class="btn hover" type="button" data-bs-toggle="offcanvas" data-bs-target="#side-menu">
								<i class="fa-solid fa-list-ul"></i>
							</button>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<!-- navbar -->
	
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
	<br>
	<hr>
</div>
<!-- footer -->
<div class="container-fluid">
	<div class="container footer">
		<div class="row mx-auto">
			<div class="col">
				<p class="footer-header">ABOUT US</p>
				<p><a href="?do=about">Our Story</a></p>
			</div>
			<div class="col">
				<p class="footer-header">CUSTOMER SERVICE</p>
				<p><a href="">Membership</a></p>
				<p><a href="">FAQ</a></p>
				<p><a href="">Privacy Policy</a></p>
			</div>
			<div class="col">
				<p class="footer-header">CONTACT US</p>
				<P>243新北市泰山區貴子里致遠新村55之1號</P>
				<p>EMAIL: 123@gmail.com</p>
				<p>TEL: +886-1-2345-6789</p>
				<!-- icon -->
				<div class="icon">
					<a href="#">
						<svg class="icon" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M24.146 12.073C24.146 5.40365 18.7424 0 12.073 0C5.40365 0 0 5.40365 0 12.073C0 18.0988 4.41493 23.0935 10.1866 24V15.563H7.11968V12.073H10.1866V9.41306C10.1866 6.38751 11.9878 4.71627 14.7466 4.71627C16.0678 4.71627 17.4494 4.95189 17.4494 4.95189V7.92146H15.9267C14.4273 7.92146 13.9594 8.85225 13.9594 9.8069V12.073H17.3077L16.7723 15.563H13.9594V24C19.7311 23.0935 24.146 18.0988 24.146 12.073Z" fill="#333333"></path>
						</svg>
					</a>
					<a href="#">
						<svg class="icon" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.7228 9.225V13.0339C14.7228 13.1304 14.6478 13.2054 14.5514 13.2054H13.9406C13.8817 13.2054 13.8281 13.1732 13.8014 13.1357L12.0549 10.7786V13.0393C12.0549 13.1357 11.9799 13.2107 11.8835 13.2107H11.2728C11.1764 13.2107 11.1014 13.1357 11.1014 13.0393V9.23036C11.1014 9.13393 11.1764 9.05893 11.2728 9.05893H11.8781C11.9317 9.05893 11.9906 9.08572 12.0174 9.13393L13.7639 11.4911V9.23036C13.7639 9.13393 13.8389 9.05893 13.9353 9.05893H14.546C14.6424 9.05357 14.7228 9.13393 14.7228 9.225V9.225ZM10.3299 9.05357H9.71921C9.62278 9.05357 9.54778 9.12857 9.54778 9.225V13.0339C9.54778 13.1304 9.62278 13.2054 9.71921 13.2054H10.3299C10.4264 13.2054 10.5014 13.1304 10.5014 13.0339V9.225C10.5014 9.13393 10.4264 9.05357 10.3299 9.05357V9.05357ZM8.85671 12.2464H7.19064V9.225C7.19064 9.12857 7.11564 9.05357 7.01922 9.05357H6.4085C6.31207 9.05357 6.23707 9.12857 6.23707 9.225V13.0339C6.23707 13.0821 6.25314 13.1196 6.28529 13.1518C6.31743 13.1786 6.35493 13.2 6.40314 13.2H8.85136C8.94778 13.2 9.02278 13.125 9.02278 13.0286V12.4179C9.02278 12.3268 8.94779 12.2464 8.85671 12.2464V12.2464ZM17.9371 9.05357H15.4888C15.3978 9.05357 15.3174 9.12857 15.3174 9.225V13.0339C15.3174 13.125 15.3924 13.2054 15.4888 13.2054H17.9371C18.0335 13.2054 18.1085 13.1304 18.1085 13.0339V12.4232C18.1085 12.3268 18.0335 12.2518 17.9371 12.2518H16.271V11.6089H17.9371C18.0335 11.6089 18.1085 11.5339 18.1085 11.4375V10.8214C18.1085 10.725 18.0335 10.65 17.9371 10.65H16.271V10.0071H17.9371C18.0335 10.0071 18.1085 9.93215 18.1085 9.83572V9.225C18.1031 9.13393 18.0281 9.05357 17.9371 9.05357V9.05357ZM24.146 4.37679V19.6607C24.1406 22.0607 22.1746 24.0053 19.7692 24H4.48529C2.08529 23.9946 0.14065 22.0232 0.146007 19.6232V4.33929C0.151364 1.93929 2.12279 -0.0053461 4.52279 1.10419e-05H19.8067C22.2067 0.00536818 24.1513 1.97144 24.146 4.37679ZM20.846 10.9446C20.846 7.03393 16.9246 3.85179 12.1085 3.85179C7.29243 3.85179 3.371 7.03393 3.371 10.9446C3.371 14.4482 6.47814 17.3839 10.6781 17.9411C11.7014 18.1607 11.5835 18.5357 11.3531 19.9125C11.3156 20.1321 11.1764 20.775 12.1085 20.3839C13.0406 19.9928 17.1388 17.4214 18.9763 15.3107C20.2406 13.9179 20.846 12.5089 20.846 10.9446Z" fill="#333333"></path>
						</svg>
					</a>
					<a href="#">
						<svg class="icon" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_4527_91515)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M5.39661 0.0436591C5.68114 0.0200558 7.14491 0.0148926 12.1499 0.0148926H16.0518C18.8638 0.0197783 19.0238 0.0429532 19.558 0.120312L19.589 0.124795C20.745 0.291493 21.7149 0.752495 22.5079 1.51001C22.9523 1.93764 23.2584 2.35586 23.5341 2.91588C23.87 3.60001 24.0351 4.24725 24.1107 5.20982C24.1269 5.41635 24.1343 8.70311 24.1343 11.9921C24.1343 15.2805 24.1275 18.5733 24.1112 18.7799C24.0366 19.7271 23.8715 20.3799 23.546 21.0511C23.2283 21.709 22.7708 22.2896 22.2055 22.7524C21.6402 23.2152 20.9806 23.549 20.2729 23.7305C19.752 23.8651 19.2809 23.9283 18.4695 23.9665C18.18 23.9812 15.1521 23.9849 12.1243 23.9849C9.09642 23.9849 6.07041 23.9757 5.77353 23.9628C5.07281 23.9296 4.52698 23.8595 4.03279 23.7323C2.60553 23.3635 1.39402 22.3751 0.75968 21.0585C0.427759 20.3707 0.271019 19.7419 0.188038 18.7424C0.164066 18.4584 0.158534 16.9962 0.158534 11.9952C0.158534 11.3825 0.158291 10.8265 0.158069 10.321C0.157681 9.43662 0.157361 8.70711 0.158534 8.09975C0.163248 5.28463 0.186142 5.12668 0.264016 4.58944C0.26535 4.58024 0.266701 4.57092 0.268068 4.56147C0.434951 3.40676 0.895952 2.43533 1.6566 1.64573C2.07427 1.21276 2.49747 0.903888 3.03408 0.637429C3.73037 0.290756 4.3695 0.129037 5.39661 0.0436591ZM8.4946 3.20338C9.43874 3.16041 9.74041 3.1499 12.1443 3.1499H12.1417C14.5463 3.1499 14.8468 3.16041 15.791 3.20338C16.7333 3.24653 17.3768 3.39571 17.9411 3.61459C18.5238 3.84048 19.0161 4.1429 19.5085 4.63525C20.0008 5.12723 20.3032 5.62105 20.5301 6.20321C20.7477 6.766 20.897 7.40918 20.9413 8.35147C20.9837 9.2956 20.9947 9.59728 20.9947 12.0011C20.9947 14.405 20.9837 14.7059 20.9413 15.65C20.897 16.592 20.7477 17.2353 20.5301 17.7983C20.3032 18.3803 20.0008 18.8741 19.5085 19.3661C19.0167 19.8584 18.5236 20.1616 17.9416 20.3877C17.3785 20.6065 16.7345 20.7557 15.7923 20.7989C14.8481 20.8418 14.5474 20.8524 12.1433 20.8524C9.73968 20.8524 9.43818 20.8418 8.49405 20.7989C7.55195 20.7557 6.90858 20.6065 6.34542 20.3877C5.76363 20.1616 5.26981 19.8584 4.77801 19.3661C4.28585 18.8741 3.98343 18.3803 3.75717 17.7981C3.53847 17.2353 3.38929 16.5921 3.34596 15.6499C3.30318 14.7057 3.29248 14.405 3.29248 12.0011C3.29248 9.59728 3.30354 9.29542 3.34559 8.35129C3.388 7.40937 3.53736 6.766 3.7568 6.20302C3.98361 5.62105 4.28603 5.12723 4.77838 4.63525C5.27036 4.14308 5.76419 3.84067 6.34634 3.61459C6.90913 3.39571 7.55232 3.24653 8.4946 3.20338ZM11.8493 4.74488C11.6703 4.7448 11.5044 4.74473 11.3502 4.74497V4.74275C9.70058 4.7446 9.38415 4.75566 8.56763 4.79254C7.70463 4.83219 7.23607 4.97602 6.92407 5.09772C6.51101 5.25852 6.21597 5.4503 5.90617 5.76009C5.59638 6.06988 5.40424 6.36492 5.24381 6.77798C5.12266 7.08999 4.97846 7.55837 4.93899 8.42136C4.89658 9.35443 4.8881 9.63324 4.8881 11.9969C4.8881 14.3605 4.89658 14.6408 4.93899 15.5739C4.97827 16.4369 5.12266 16.9053 5.24381 17.2169C5.4046 17.6301 5.59638 17.9244 5.90617 18.2342C6.21597 18.544 6.51101 18.7358 6.92407 18.8962C7.23626 19.0174 7.70463 19.1616 8.56763 19.2014C9.50069 19.2438 9.7808 19.253 12.1443 19.253C14.5075 19.253 14.7878 19.2438 15.7209 19.2014C16.5839 19.162 17.0526 19.0181 17.3643 18.8964C17.7775 18.736 18.0716 18.5442 18.3814 18.2344C18.6912 17.9248 18.8834 17.6307 19.0438 17.2176C19.1649 16.906 19.3091 16.4376 19.3486 15.5746C19.391 14.6416 19.4002 14.3613 19.4002 11.9991C19.4002 9.63693 19.391 9.35664 19.3486 8.42357C19.3093 7.56058 19.1649 7.0922 19.0438 6.78056C18.883 6.36751 18.6912 6.07247 18.3814 5.76267C18.0718 5.45288 17.7773 5.2611 17.3643 5.10068C17.0523 4.97952 16.5839 4.83532 15.7209 4.79586C14.7876 4.75345 14.5075 4.74497 12.1443 4.74497C12.0421 4.74497 11.9439 4.74492 11.8493 4.74488ZM16.2788 6.39367C16.4535 6.27694 16.6589 6.21464 16.869 6.21464V6.21427C17.4554 6.21427 17.9311 6.69002 17.9311 7.27642C17.9312 7.48651 17.869 7.6919 17.7523 7.86661C17.6356 8.04133 17.4698 8.17753 17.2757 8.25798C17.0816 8.33842 16.868 8.35951 16.662 8.31857C16.4559 8.27763 16.2666 8.1765 16.1181 8.02797C15.9695 7.87944 15.8683 7.69018 15.8273 7.48414C15.7862 7.27809 15.8073 7.06451 15.8876 6.8704C15.968 6.6763 16.1042 6.51039 16.2788 6.39367ZM7.59879 12.0011C7.59879 9.49094 9.63391 7.45575 12.1441 7.45565C14.6543 7.45565 16.6892 9.49088 16.6892 12.0011C16.6892 14.5114 14.6545 16.5457 12.1443 16.5457C9.63402 16.5457 7.59879 14.5114 7.59879 12.0011ZM15.0947 12.0011C15.0947 10.3716 13.7736 9.05072 12.1443 9.05072C10.5147 9.05072 9.19385 10.3716 9.19385 12.0011C9.19385 13.6305 10.5147 14.9515 12.1443 14.9515C13.7736 14.9515 15.0947 13.6305 15.0947 12.0011Z" fill="#333333"></path>
							</g>
							<defs>
								<clipPath id="clip0_4527_91515">
									<rect width="24" height="24" fill="white" transform="translate(0.145996)"></rect>
								</clipPath>
							</defs>
							</svg>
						</a>
					</div>
					<!-- icon -->
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<p class="">
			Copyright&nbsp;<i class="fa-solid fa-copyright mx-2"></i>W&nbsp;<i class="fa-solid fa-burger"></i>&nbsp;BURGER&nbsp;|&nbsp;All Rights Reserved
		</p>
	</div>
	<!-- footer end -->
	
	
	<!-- menu邊選單 -->
	
	<!-- 選單 -->
	<div class="offcanvas offcanvas-end" id="side-menu">
		<div class="offcanvas-header">
			<h2 class="fw-bold mb-5 text-center mt-5"></h2>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
		</div>
		<div class="offcanvas-body">
			<div class="list-group list-group-flush">
				<?php
				$mainmu = $Menu->all(['sh' => 1, 'menu_id' => 0]);
				foreach ($mainmu as $main) {
					?>
					<a href="<?= $main['href']; ?>" class="list-group-item list-group-item-action">
						<?= $main['text']; ?>
					</a>
					<?php
				}
				?>

</div>
</div>
</div>
<!-- 選單 -->

<!-- 登入 -->
<div class="offcanvas offcanvas-end" id="side-login">
	<?php
		if (!isset($_SESSION['user'])) {
			?>
			<div class="offcanvas-header">
				<h2 class="fw-bold mb-5 text-center mt-5">會員登入</h2>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
			</div>
			<div class="offcanvas-body">
				<div class="container">
					<div class="form-group mx-auto">
						<div class="row mt-3">
							<div class="col">
								<label class="label" for="acc">帳號</label>
								<input class="form-control w-100" id="acc" name="acc" placeholder="帳號" type="text">
							</div>
						</div>
						
						<div class="row mt-3">
							<div class="col">
								<label class="label" for="pw">密碼</label>
								<input class="form-control  w-100" id="pw" name="pw" type="password" placeholder="密碼">
							</div>
						</div>
						
						<div class="row mt-3">
							<div class="col-12">
								<button type="submit" class="form-control btn btn-outline-success btn-block" onclick="login()">
									登入
								</button>
							</div>
							<div class="col-12 pt-2">
								<a href="?do=reg">
									<button type="submit" class="form-control btn border btn-outline-warning btn-block mb-4">
										加入會員
									</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else {
			?>
			<div class="offcanvas-header">
				<h3 class="fw-bold mb-5 text-center mt-5">
					歡迎,<?= $_SESSION['user']; ?>
				</h3>
				<button type="button" class="btn btn-close" data-bs-dismiss="offcanvas"></button>
			</div>
			<div class="offcanvas-body">
				<div class="container">
					<div class="row mt-3">
						<div class="col-12">
							<div class="d-grid gap-2">
								<button class="btn btn-lg btn-outline-danger" onclick="location.href='./api/logout.php'">登出</button>
								<?php
								if ($_SESSION['user'] == 'admin') {
									?>
									<button class="btn btn-lg btn-outline-dark" onclick="location.href='back.php'">管理</button>
									<?php
								} else {
									?>
									<button class="btn btn-lg btn-outline-warning" onclick="location.href='?do=member'">修改會員資料</button>
									<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>

</div>
<!-- 登入 -->

<!-- 購物車 -->
<div class="offcanvas offcanvas-end" id="side-shop">
	<div class="offcanvas-header">
		<h2 class="fw-bold mb-5 text-center mt-5">購物車</h2>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
	</div>
	<div class="offcanvas-body row">
		<div class="shop-btn col w-100 position-absolute bottom-0 end-0">
			<a href="?do=cart">前往結帳</a>
		</div>
	</div>
	
	
</div>
<!-- 購物車 -->

<!-- 邊選單 end -->

<!-- swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- skrollr JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js' integrity='sha512-A2+khatRDWHUE2VUtN4xUTkr1nc4YfDBw9Sg3ea6x0aRPfpcYieDZji4D2edDHy/yF5NsYzP7kL8sSM8s5EqCw==' crossorigin='anonymous'></script>
<script>
	var s = skrollr.init({
			// 跟smoothscrolling的功能，主要都是讓scroll事件不要太敏感(去除卡卡)
			smoothScrolling: true,
			smoothScrollingDuration: 200,

			// 可以使用定義一些常數在影格使用
			constants: {
				iniTop: 100
			}
		})

		$(window).scroll(function(scrollvalue) {
			if ($(window).scrollTop() > 0)
				$("nav.navbar.navbar-expand-lg.fixed-top.p-0").addClass("navbar-gb"),
				$("button.hover").css("color", "#6c757d"),
				$("a.logo").css("color", "#6c757d"),
				$(".fa-burger").css("color", "#6c757d");
			else
				$("nav.navbar.navbar-expand-lg.fixed-top.p-0").removeClass("navbar-gb"),
				$("button.hover").css("color", "white"),
				$("a.logo").css("color", "white"),
				$(".fa-burger").css("color", "white");

		});

		function initSwiper() {
			/* 
			id="comment-swiper" 區塊是我想要使用 swiper 套件的範圍
			要抓取 id "#comment-swiper"
			*/
			const swiper = new Swiper("#comment-swiper", {
				/*  預設要顯示幾個卡片 */
				slidesPerView: 1,
				/* 斷點設定 */
				breakpoints: {
					/* 螢幕寬度大於等於 992px 時切換為 3 欄 */
					992: {
						slidesPerView: 3
					},
					/* 螢幕寬度大於等於 768px 時切換為 2 欄 */
					768: {
						slidesPerView: 2
					},
					/* 更小時都顯示 1 欄 */
					0: {
						slidesPerView: 1
					}
				},
				/* 卡片元素的間隔 */
				spaceBetween: 16,
				pagination: {
					/* 我想將分頁圓點綁在哪個 class */
					el: ".swiper-pagination",
					/* 將輪播設定為可以點擊分頁圓點來切換圖片 */
					clickable: true
				}
			});
		}

		/* 觸發自己定義的函式 */
		initSwiper();
	</script>

</body>

</html>