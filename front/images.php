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
<div class="container">
    <h2 class="fw-bold">全部商品</h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="true" role="tab">漢堡</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#menu1" aria-selected="false" role="tab" tabindex="-1">炸物</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#menu2" aria-selected="false" role="tab" tabindex="-1">飲品</a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="container tab-pane active show" role="tabpanel"><br>
            <div class="card-group row">
                <?php
                $imgs = $Image->all(['sh' => 1]);

                foreach ($imgs as $idx => $img) {
                ?>
                    <div class="col-4">
                        <div id="ssaa<?= $idx; ?>" class="card d-flex p-2 pb-0 rounded-4 border-0">
                            <img src="./img/<?= $img['img']; ?>" class="card-img-top rounded-4 card-img">
                            <div class="card-body">
                                <h5 class="card-title mt-2 fw-bold"><?= $img['title']; ?></h5>
                                <p class="card-text mt-2 price">$<?= $img['price']; ?></p>
                                <button class="btn btn-outline-dark" style="width: 100%;">加入購物車</button>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div id="menu1" class="container tab-pane fade" role="tabpanel"><br>
            <div class="card-group row">
                <?php
                $frieds = $Fried->all(['sh' => 1]);

                foreach ($frieds as $idx => $fried) {
                ?>
                    <div class="col-4">
                        <div id="ssaa<?= $idx; ?>" class="card d-flex p-2 pb-0 rounded-4 border-0">
                            <img src="./img/<?= $fried['img']; ?>" class="card-img-top rounded-4 card-img">
                            <div class="card-body">
                                <h5 class="card-title mt-2 fw-bold"><?= $fried['title']; ?></h5>
                                <p class="card-text mt-2 price">$<?= $fried['price']; ?></p>
                                <button class="btn btn-outline-dark" style="width: 100%;">加入購物車</button>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div id="menu2" class="container tab-pane fade" role="tabpanel"><br>
            <div class="card-group row">
                <?php
                $drinks = $Drink->all(['sh' => 1]);
    
                foreach ($drinks as $idx => $drink) {
                ?>
                    <div class="col-4">
                        <div id="ssaa<?= $idx; ?>" class="card d-flex p-2 pb-0 rounded-4 border-0">
                            <img src="./img/<?= $drink['img']; ?>" class="card-img-top rounded-4 card-img">
                            <div class="card-body">
                                <h5 class="card-title mt-2 fw-bold"><?= $drink['title']; ?></h5>
                                <p class="card-text mt-2 price">$<?= $drink['price']; ?></p>
                                <button class="btn btn-outline-dark" style="width: 100%;">加入購物車</button>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

    </div>
</div>
</div>