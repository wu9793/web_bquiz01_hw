<?php include_once "db.php";?>
<div class="border member-login">
    <h2 class="fw-bold text-center mt-3">會員資料</h2>
    <?php
        if(isset($_SESSION['msg'])){
            echo "<div class='alert alert-warning text-center col-6 m-auto'>";
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            echo "</div>";
        }

    ?>
    <div class="form-group mx-auto">
        <form action="../api/update.php" method="post">
            <div class="row mt-3">
                <div class="col">
                    <label class="label" for="acc">帳號</label><span style="color: red;">&nbsp;*&nbsp;</span>
                    <input class="form-control w-100" name="acc"  type="text" id="acc">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label class="label" for="pw">密碼</label><span style="color: red;">&nbsp;*&nbsp;</span>
                    <input class="form-control  w-100" name="pw" type="password" id="pw">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label class="label" for="name">姓名</label><span style="color: red;">&nbsp;*&nbsp;</span>
                    <input class="form-control  w-100" name="name" type="name" id="name">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label class="label" for="email">信箱</label><span style="color: red;">&nbsp;*&nbsp;</span>
                    <input class="form-control  w-100" name="email" type="email" id="email">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <!-- button 透過 onclick 來觸發 reg()事件 -->
                    <button type="submit" class="form-control btn btn-dark btn-block" onclick="">
                        更新
                    </button>
                </div>
            </div>
            <button class="btn btn-lg btn-outline-danger" onclick="location.href='./api/logout.php'">登出</button>
        </form>
    </div>

</div>
<script>

</script>