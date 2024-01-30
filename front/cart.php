<?php
if (isset($_GET['id'])) {
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
        <button id="sumBtn" type="button" class="btn btn-danger d-none ">
            合計
        </button>
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
                <td>
                    <input type="number" class="quantity form-control" data-id="<?= $id; ?>" max="20" min="1" value="<?= $qt; ?>">
                </td>
                <td class="myTotal">NT$<?= (int)$row['price'] * (int)$qt; ?></td>
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
            <div class="text-end bg-light">
                合計 : NT$ <span id="mySum" class="display-4">0</span>
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
            <button type="button" class="btn btn-dark" style="float:right;">結帳</button>
        </div>
    </div>
</div>
<script>
    function delCart(id) {
        $.post("./api/del_cart.php", {
            id
        }, () => {
            location.href = 'index.php?do=cart';
        })
    }

    $(document).ready(function() {
        function sumFun() {
            console.log('sumBtn ok');
            let myTotal = $('.myTotal');
            let getMyTotalCount = myTotal.length;
            console.log('myTotal', myTotal);
            let sum = 0;
            myTotal.each(function(index, value) {
                console.log('index', index);
                console.log('value', value);
                sum = sum + Number($(value).text());
            });
            console.log('final sum', sum);
            mySum.text(sum);
        }

        const mySum = $('#mySum');
        const sumBtn = $('#sumBtn');

        //sumBtn click
        sumBtn.click(function(e) {
            sumFun();
        });

        addQuantity = $('.quantity').last();

        sumFun();

        // addQuantity
        addQuantity.change(function(e) {
            let getQuantity = Number($(this).val());
            let closestQuantityTr = $(this).parent().parent().parent();
            let findTotal = closestQuantityTr.find('.myTotal');
            let price = parseFloat(closestQuantityTr.find('.price').text().replace('NT$', ''));
            let total = getQuantity * price;
            findTotal.text('NT$' + total);

            sumFun();
        });

    });
</script>