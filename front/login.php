<?php
if (isset($_SESSION['login'])) {
	to("back.php");
}


if (isset($_GET['error'])) {
	echo "<script>alert('{$_GET['error']}')</script>";
}

?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">管理員登入區</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" action="./api/check.php">
					<label for="exampleFormControlInput1" class="form-label">帳號</label>
					<input class="form-control" name="acc" autofocus="" type="text">
					<label for="exampleFormControlInput1" class="form-label">密碼</label>
					<input class="form-control" name="pw" type="password">
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary mb-3 d-grid">Sign in</button>
			</div>
		</div>
	</div>
</div>