<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Bootstrap JavaScript 和 jQuery（下拉式選單所需） -->
	<script src="./js/jquery-1.9.1.min.js"></script>
</head>
<br>
<h2>NEWS</h2>
<br>
<?php

$total = $DB->count(['sh' => 1]);
$div = 5;
$pages = ceil($total / $div);
$now = $_GET['p'] ?? 1;
$start = ($now - 1) * $div;

?>
<div class="list-group mt-3">
	<?php
	$news = $News->all(['sh' => 1], " limit $start,$div");
	foreach ($news as $n) {
		echo "<a href='#' class='list-group-item list-group-item-action'>";
		echo "<div class='d-flex w-100 justify-content-between'>";
		echo "<h5 class='mb-1'>";
		echo mb_substr($n['text'], 0, 20);
		echo "</h5>";
		echo "</div>";
		echo "<p class='mb-1'>";
		echo $n['text'];
		echo "</p>";
		echo "</a>";
	}
	?>
</div>
<div class="cent">

	<?php
	if ($now > 1) {
		$prev = $now - 1;
		echo "<a href='?do=$do&p=$prev'> < </a>";
	}

	for ($i = 1; $i <= $pages; $i++) {
		$fontsize = ($now == $i) ? '24px' : '16px';
		echo "<a href='?do=$do&p=$i' style='font-size:$fontsize'> $i </a>";
	}

	if ($now < $pages) {
		$next = $now + 1;
		echo "<a href='?do=$do&p=$next'> > </a>";
	}
	?>
</div>