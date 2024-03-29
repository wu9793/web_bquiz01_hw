<div class="border member-login">
    <h2 class="fw-bold text-center mt-3">註冊會員</h2>
    <div class="form-group mx-auto">
        <div class="row mt-3">
            <div class="col">
                <label class="label" for="acc">帳號</label><span style="color: red;">&nbsp;*&nbsp;</span>
                <input class="form-control w-100" name="acc" placeholder="輸入您的帳號" type="text" id="acc3">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label class="label" for="pw">密碼</label><span style="color: red;">&nbsp;*&nbsp;</span>
                <input class="form-control  w-100" name="pw" type="password" placeholder="輸入您的密碼" id="pw3">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label class="label" for="pw2">確認密碼</label><span style="color: red;">&nbsp;*&nbsp;</span>
                <input class="form-control  w-100" name="pw2" type="password" placeholder="請再輸入一次密碼" id="pw2">
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
                <button type="submit" class="form-control btn btn-dark btn-block" onclick="reg()">
                    註冊
                </button>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="text-center">
            已經有帳號? <a href="?do=login">登入</a>
        </div>
    </div>
</div>
<script>
    function reg() {
        let user = {
            acc: $("#acc3").val(),
            pw: $("#pw3").val(),
            pw2: $("#pw2").val(),
            email: $("#email").val(),
            name: $("#name").val()
        }
        // 判斷如果帳號密碼及確認密碼、郵件都不是空白
        if (user.acc != '' && user.pw != '' && user.pw2 != '' && user.email != '' && user.name != '') {
            // 判斷密碼等於確認密碼
            if (user.pw == user.pw2) {
                // 發送POST請求給"./api/chk_acc.php"這個URL，傳遞帳號資料
                // 回呼函式 (res)=>{}，當從伺服器收到回應時會執行這個函式
                $.post("../api/chk_acc.php", {
                    acc: user.acc
                }, (res) => {
                    console.log(res);
                    // 將回應轉換為整數，檢查是否為1
                    // "1" 代表已存在此帳號
                    if (parseInt(res) == 1) {
                        alert("帳號重複")
                    } else {
                        $.post('../api/reg.php', user, (res) => {
                            alert("註冊完成，歡迎加入")
                            location.href = 'index.php'
                        })
                    }
                })
            } else {
                alert("密碼錯誤")
            }
        } else {
            alert("不可空白")
        }
    }
</script>