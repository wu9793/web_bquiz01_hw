
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
                                <button class="btn btn-outline-dark w-100"  onclick="addToCart('<?= $img['img']; ?>', '<?= $img['title']; ?>', <?= $img['price']; ?>)">加入購物車</button>
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
                                <p class="card-text mt-2 price">$<?= $drink['price']; ?></p>
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

    function addToCart(productImg, productName, productPrice) {
        // 使用AJAX將商品添加到購物車
        $.ajax({
            type: 'POST',
            url: 'cart.php', // 指向處理購物車的PHP文件
            data: {
                productId: productImg,
                productName: productName,
                productPrice: productPrice
            },
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    // 更新購物車內容表格
                    updateCartTable(productImg, productName, productPrice);
                } else {
                    alert('添加到購物車失敗');
                }
            },
            error: function() {
                alert('發生錯誤');
            }
        });
    }

    function updateCartTable(productImg, productName, productPrice) {
        // 使用JavaScript動態更新購物車內容表格
        var cartTableBody = document.getElementById('cartTableBody');
        var newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td><img src="./img/${productImg}" alt="${productName}" style="width: 50px; height: 50px;"></td>
            <td>${productName}</td>
            <td>$${productPrice}</td>
            <td><input type="number" value="1" min="1" class="form-control"></td>
            <td>$${productPrice}</td>
            <td><button class="btn btn-outline-danger" onclick="removeFromCart(${productImg})">移除</button></td>
        `;
        cartTableBody.appendChild(newRow);
    }

    function removeFromCart(productImg) {
        // 實現移除商品的邏輯，可以使用AJAX向服務器發送請求，並在成功後更新購物車內容表格
        // 類似於addToCart，但是將商品從購物車中移除
    }



</script>