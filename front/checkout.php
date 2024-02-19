<?php
$row = $Admin->find(['acc' => $_SESSION['user']]);
?>
<br>
<div class="container">
    <h2 class="fw-bold">填寫資料</h2>
    <br>
    <form action="./api/order.php" method="post">
        <table class="table table-borderless text-center w-75 mx-auto">
            <tr>
                <td>登入帳號</td>
                <td><?= $row['acc']; ?></td>
            </tr>
            <tr>
                <td>姓名<span style="color: red;">&nbsp;*&nbsp;</span></td>
                <td><input type="text" name="name" value="<?= $row['name']; ?>"></td>
            </tr>
            <tr>
                <td>電子信箱<span style="color: red;">&nbsp;*&nbsp;</span></td>
                <td><input type="text" name="email" value="<?= $row['email']; ?>"></td>
            </tr>
            <tr>
                <td>聯絡電話<span style="color: red;">&nbsp;*&nbsp;</span></td>
                <td><input type="text" name="tel"></td>
            </tr>
            <tr>
                <td>聯絡地址<span style="color: red;">&nbsp;*&nbsp;</span></td>
                <td><input type="text" name="addr"></td>
            </tr>
        </table>
        <table class='table table-bordered text-center'>
            <tr>
                <td>商品圖片</td>
                <td>商品名稱</td>
                <td style="width: 10%;">價格</td>
                <td style="width: 10%;">數量</td>
                <td style="width: 10%;">小計</td>
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
                    <td><?= $qt; ?></td>
                    <td class="myTotal">NT$<?= $row['price'] * $qt; ?></td>
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
                <button type="button" class="btn btn-outline-dark" onclick="location.href='?do=cart'">返回修改訂單</button>
            </div>
            <div class="col">
                <input type="hidden" name="total" value="<?= $sum; ?>">
                <input type="submit" class="btn btn-dark" style="float:right;" value="送出訂單">
            </div>
        </div>
    </form>
</div>