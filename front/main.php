<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    	<!-- Bootstrap JavaScript 和 jQuery（下拉式選單所需） -->
        <script src="./js/jquery-1.9.1.min.js"></script>
    <style>
        .more-new {
            width: 300px;
            height: 50px;
            background-color: #000;
            text-align: center;
            margin: auto;
            padding-top: 10px;
        }

        .more-new>a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <?php //include_once "marquee.php"; 
    ?>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php
            $lins = $Mvim->all(['sh' => 1]);
            foreach ($lins as $index => $lin) {
                $active = ($index === 0) ? 'active' : ''; // 判斷是否為第一張圖片，設定 active class
                echo "<div class='carousel-item $active' data-bs-interval='3000'>";
                echo "<img class='d-block w-100 rounded-4' style='height:60vh;' src='./img/{$lin['img']}' alt=''>";
                echo "</div>";
            }

            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <hr>
    <br>

    <!-- list group -->
    <h2>NEWS</h2>
    <div class="list-group mt-3">
        <?php
        $news = $News->all(['sh' => 1], ' limit 3');
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
    <br>
    <div class="row">
        <div class="col mx-auto" style="margin: auto;">
            <div class="more-new">
                <?php
                if ($News->count(['sh' => 1]) > 5) {
                    echo '<a href="?do=news">查看更多</a>';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- list group -->
    <br>
    <hr>
    <br>
    <!-- 校園映象區 -->
    <h3 class="">校園映象區</h3>
    <div class="card-group row">

        <?php
        $imgs = $Image->all(['sh' => 1]);

        foreach ($imgs as $idx => $img) {
        ?>
            <div class="col-4">
                <div id="ssaa<?= $idx; ?>" class="card d-flex p-2 pb-0 rounded-4 border-0">
                    <img src="./img/<?= $img['img']; ?>" class="card-img-top rounded-4 card-img">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <br>
    <div class="row">
        <div class="col mx-auto" style="margin: auto;">
            <div class="more-new">
                <?php
                if ($Image->count(['sh' => 1]) > 5) {
                    echo '<a href="?do=images">查看更多</a>';
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>