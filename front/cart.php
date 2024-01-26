<?php
if (isset($_GET['id']) && isset($_GET['qt'])) {
    $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}
if (!isset($_SESSION['user'])) {
    to("?do=login");

    exit();
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
        foreach ($_SESSION['cart'] as $id => $qt) {
            $row = $Image->find($id);
        ?>
            <tr class="align-middle">
                <td>
                    <img class="object-fit-cover" src="./img/<?= $row['img']; ?>" style="width:200px;height:200px">
                </td>
                <td><?= $row['title']; ?></td>
                <td>NT$<?= $row['price']; ?></td>
                <td><?= $qt; ?></td>
                <td><?= $row['price'] * $qt; ?></td>
                <td><i class="fa-solid fa-trash-can" onclick="delCart(<?= $id; ?>)"></i></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="row w-100 m-auto">
        <div class="col">
            <a href="?do=images">
                <button type="button" class="btn btn-outline-dark">繼續選購</button>
            </a>
        </div>
        <div class="col">
            <button type="button" class="btn btn-dark" style="float:right;">結帳</button>
        </div>
    </div>
</div>