<?php
$admin=$Admin->find('user' == $_SESSION['user']);
?>
<div class="border member-login">
    <h2 class="fw-bold text-center mt-3">會員資料</h2>
    <div class="form-group mx-auto">
        <div class="row mt-3">
            <div class="col">
                <label class="label" for="acc">帳號</label><span style="color: red;">&nbsp;*&nbsp;</span>
                <input class="form-control w-100" name="acc" type="text" id="acc" value="<?=$admin['acc'];?>">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label class="label" for="pw">密碼</label><span style="color: red;">&nbsp;*&nbsp;</span>
                <input class="form-control  w-100" name="pw" type="password" id="pw" value="<?=$admin['pw'];?>">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label class="label" for="name">姓名</label><span style="color: red;">&nbsp;*&nbsp;</span>
                <input class="form-control  w-100" name="name" type="name" id="name" value="<?=$admin['name'];?>">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label class="label" for="email">信箱</label><span style="color: red;">&nbsp;*&nbsp;</span>
                <input class="form-control  w-100" name="email" type="email" id="email" value="<?=$admin['email'];?>">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="d-grid gap-2">
                    <!-- button 透過 onclick 來觸發 reg()事件 -->
                    <button type="submit" class="form-control btn btn-dark" onclick="reg()">更新</button>
                    <input type="hidden" id="id">
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    function reg() {
        let user = {
            id: $("#id").val(),
            acc: $("#acc").val(),
            pw: $("#pw").val(),
            pw2: $("#pw2").val(),
            email: $("#email").val(),
            name: $("#name").val()
        }
        if (user.acc != '' && user.pw != '' && user.pw2 != '' && user.email != '' && user.name != '') {
            if (user.pw == user.pw2) {
                $.post("../api/chk_acc.php", {
                    acc: user.acc
                }, (res) => {
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