<?php
include_once "./api/db.php";

unset($_SESSION['cart'][$_POST['id']]);
?>