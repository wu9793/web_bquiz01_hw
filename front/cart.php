<?php
if (isset($_GET['id'])) {
    $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}
if (!isset($_SESSION['user'])) {
    to("?do=login");
}

?>
<div class="main-bg">
    <br>
    <div class="container vh-100 h-top">
        <h2 class="fw-bold">
            <i class="fa-solid fa-cart-shopping fa-xs"></i>&nbsp;購物車( <span id="amount">
                <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    echo count($_SESSION['cart']);
                } else {
                    echo 0;
                } ?>
            </span>)
        </h2>
        <br>
        <?php
        if (empty($_SESSION['cart'])) {
        ?>
            <div class="no-item align-middle">
                <h4 class='text-center pt-5'>您沒有選擇任何商品</h4>
            </div>
            <div class="row w-100 m-auto mt-3">
                <div class="col">
                    <button type="button" class="btn btn-outline-dark" onclick="location.href='?do=images'">繼續選購</button>
                </div>
                <div class=" col">
                    <button type="button" class="btn btn-outline-dark" style="float: right;" onclick="location.href='index.php'">回首頁</button>
                </div>
            </div>

        <?php
        } else {
        ?>
            <table class='table table-bordered text-center table-light'>
                <tr>
                    <td>商品圖片</td>
                    <td>商品名稱</td>
                    <td style="width: 10%;">價格</td>
                    <td style="width: 10%;">數量</td>
                    <td style="width: 10%;">小計</td>
                    <td style="width: 5%;"></td>
                </tr>
                <?php
                $sum = 0;
                foreach ($_SESSION['cart'] as $id => $qt) {
                    $row = $Image->find($id);
                ?>
                    <tr class="align-middle">
                        <td>
                            <img class="object-fit-cover" src="./img/<?= $row['img']; ?>" style="width:200px;height:200px">
                        </td>
                        <td><?= $row['title']; ?></td>
                        <td>NT$<?= $row['price']; ?></td>
                        <td>
                            <!-- <input type="number" class="quantity form-control" data-id="<?= $id; ?>" max="20" min="1" value="<?= $qt; ?>"> -->
                            <?= $qt; ?>
                        </td>
                        <td class="myTotal">NT$<?= $row['price'] * $qt; ?></td>
                        <td>
                            <span onclick="delCart(<?= $id; ?>)"><i class="fa-solid fa-trash-can"></i></span>
                        </td>
                    </tr>
                <?php
                    $sum += $row['price'] * $qt;
                }
                ?>
            </table>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="text-center pe-3 bg-light w-25" style="float: right;">
                        合計 : NT$ <span class="display-4"><?= $sum; ?></span>
                    </div>
                </div>
            </div>
            <br>
            <div class="row w-100 m-auto">
                <div class="col">
                    <a href="?do=images">
                        <button type="button" class="btn btn-outline-dark">繼續選購</button>
                    </a>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-outline-dark" style="float:right;" onclick="location.href='?do=checkout'">結帳</button>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<script>
    function delCart(id) {
        $.post("./api/del_cart.php", {
            id
        }, () => {
            location.href = "?do=cart";
        })
    }
</script>