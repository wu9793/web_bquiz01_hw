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