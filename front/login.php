<?php
// if (isset($_SESSION['login'])) {
// 	to("back.php");
// }


// if (isset($_GET['error'])) {
// 	echo "<script>alert('{$_GET['error']}')</script>";
// }
?>
<br>
<br>
<div class="border member-login">
		<h2 class="fw-bold text-center mt-3">會員登入</h2>
		<div class="form-group mx-auto">
			<div class="row mt-3">
				<div class="col">
					<label class="label" for="acc">帳號</label>
					<input class="form-control w-100" id="acc2" name="acc" placeholder="輸入您的帳號" type="text">
				</div>
			</div>

			<div class="row mt-3">
				<div class="col">
					<label class="label" for="pw">密碼</label>
					<input class="form-control  w-100" id="pw2" name="pw" type="password" placeholder="輸入您的密碼">

				</div>
			</div>

			<div class="row mt-3">
				<div class="col-12">
					<button class="form-control btn btn-dark btn-block"  onclick="login()">
						登入
					</button>
				</div>
			</div>
			<br>
			<hr>
			<br>
			<div class="text-center">
				還沒有帳號? <a href="?do=reg">註冊</a>
			</div>
		</div>

</div>
<script>
function login() {
	$.post('./api/chk_acc.php', {
		acc: $("#acc2").val()
	}, (res) => {
		if (parseInt(res) == 0) {
			alert("查無帳號")
		} else {
			$.post('./api/chk_pw.php', {
					acc: $("#acc2").val(),
					pw: $("#pw2").val()
				},
				(res) => {
					if (parseInt(res) == 1) {
						if ($("#acc2").val() == 'admin') {
							location.href = 'back.php'
						} else {
							location.href = 'index.php'
						}
					} else {
						alert("密碼錯誤")
					}
				})
		}
	})
}
</script>