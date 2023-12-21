<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <?php include_once "marquee.php"; ?>
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            //<?php
                //$lins = $Mvim->all(['sh' => 1]);
                //foreach ($lins as $index => $lin) {
                //    $active = ($index === 0) ? 'active' : ''; // 判斷是否為第一張圖片，設定 active class
                //    echo "<div class='carousel-item $active' data-bs-interval='3000'>";
                //    echo "<img class='d-block w-100 rounded-4' src='./img/{$lin['img']}' alt=''>";
                //    echo "</div>";
                //}
                //
                ?>
        </div>
        <button class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div> -->


    <!--正中央-->
    <div style="width:100%; padding:2px; height:40vh;">
        <div id="mwww" loop="true" style="width:100%; height:100%;">
            <div style="width:99%; height:100%; position:relative;" class="cent">
                沒有資料
            </div>
        </div>
    </div>
    <script>
        var lin = new Array();
        <?php
        $lins = $Mvim->all(['sh' => 1]);
        foreach ($lins as $lin) {
            echo "lin.push('{$lin['img']}');";
        }
        ?>

        var now = 0;
        ww();
        if (lin.length > 1) {
            setInterval("ww()", 4000);
            now = 1;
        }

        function ww() {
            $("#mwww").html("<embed loop=true src='./img/" + lin[now] + "' style='width:99%; height:100%;'></embed>")
            //$("#mwww").attr("src",lin[now])
            now++;
            if (now >= lin.length)
                now = 0;
        }
    </script>


    <div style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;">
        <span class="t botli">
            最新消息區
            <?php
            if ($News->count(['sh' => 1]) > 5) {
                echo '<a href="?do=news" style="float:right;">More...</a>';
            }
            ?>

        </span>
        <ul class="ssaa" style="list-style-type:decimal;">
            <?php
            $news = $News->all(['sh' => 1], ' limit 5');
            foreach ($news as $n) {
                echo "<li>";
                echo mb_substr($n['text'], 0, 20);
                echo "<div class='all' style='display: none;'>";
                echo $n['text'];
                echo "</div>";
                echo "...</li>";
            }


            ?>
        </ul>

        <div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
        <script>
            $(".ssaa li").hover(
                function() {
                    $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                    $("#altt").show()
                }
            )
            $(".ssaa li").mouseout(
                function() {
                    $("#altt").hide()
                }
            )
        </script>
    </div>
</body>

</html>