
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
                                <p class="card-text mt-2 price">NT$<?= $img['price']; ?></p>
                                <input class="form-control w-100 mb-2" type="number" name="qt_<?=$img['id']?>" id="qt_<?=$img['id']?>" value="1">
                                <button class="btn btn-outline-dark w-100"  onclick="addToCart(<?=$img['id']?>)">加入購物車</button>
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
                                <p class="card-text mt-2 price">NT$<?= $fried['price']; ?></p>
                                <button class="btn btn-outline-dark w-100">加入購物車</button>
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
                                <p class="card-text mt-2 price">NT$<?= $drink['price']; ?></p>
                                <button class="btn btn-outline-dark w-100">加入購物車</button>
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
<script>

    function addToCart(id) {
        let qt=$("#qt_" + id).val()
        location.href=`?do=cart&id=${id}&qt=${qt}`
    }



</script>