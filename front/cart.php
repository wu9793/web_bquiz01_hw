<?php
if (isset($_GET['id'])) {
    $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}
if (!isset($_SESSION['user'])) {
    to("?do=login");
}

?>

<br>
<div class="container">
    <h2 class="fw-bold">購物車</h2>
    <br>
    <table class='table table-bordered text-center'>
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
            <div class="text-end bg-light pe-3">
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
            <button type="button" class="btn btn-dark" style="float:right;" onclick="location.href='?do=checkout'">結帳</button>
        </div>
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