<?php
$row = $Order->find($_GET['id']);
?>
<main class="container mb-5 bg-light">
    <br>
    <h4 class="text-center">訂單標號<span style="color: red;"><?= $row['no']; ?></span>的詳細資料</h4>
    <br>
    <table class="table table-borderless text-center">
        <tr>
            <th class="bg-light">登入帳號</th>
            <th class="bg-light">姓名</th>
            <th class="bg-light">聯絡電話</th>
            <th class="bg-light">電子信箱</th>
            <th class="bg-light">聯絡住址</th>
        </tr>
        <tr>
            <td><?= $row['acc']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['tel']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['addr']; ?></td>
        </tr>
    </table>
    <table class='table table-borderless text-center'>
        <tr>
            <th class="bg-light">商品圖片</th>
            <th class="bg-light">商品名稱</th>
            <th class="bg-light" style="width: 10%;">價格</th>
            <th class="bg-light" style="width: 10%;">數量</th>
            <th class="bg-light" style="width: 10%;">小計</th>
            <th class="bg-light" style="width: 5%;"></th>
        </tr>
        <?php
        $cart = unserialize($row['cart']);
        foreach ($cart as $id => $qt) {
            $img = $Image->find($id);
        ?>
            <tr class="align-middle">
                <td>
                    <img class="object-fit-cover" src="./img/<?= $img['img']; ?>" style="width:100px;height:100px">
                </td>
                <td><?= $img['title']; ?></td>
                <td>NT$<?= $img['price']; ?></td>
                <td><?= $qt; ?></td>
                <td class="myTotal">NT$<?= $img['price'] * $qt; ?></td>
                <td>
                    <span onclick="delCart(<?= $id; ?>)"><i class="fa-solid fa-trash-can"></i></span>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <hr>
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-outline-dark mt-2" onclick="location.href='?do=order'">返回</button>
        </div>
        <div class="col">
            <div class="text-end pe-3">
                合計 : NT$ <span class="display-4"><?= $row['total']; ?></span>
            </div>
        </div>
    </div>
</main>