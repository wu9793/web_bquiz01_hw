<h3 class="text-center mt-3">新增帳號</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="col-8 m-auto">
        <tr>
            <td>帳號:</td>
            <td><input type="text" name="acc" id=""></td>
        </tr>
        <tr>
            <td>密碼:</td>
            <td><input type="password" name="pw" id=""></td>
        </tr>
        <tr>
            <td>確認密碼:</td>
            <td><input type="password" name="pw2" id=""></td>
        </tr>
    </table>
    <div class="text-center mt-3">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" class="btn btn-success" value="新增">
        <input type="reset" class="btn btn-danger" value="重置">
    </div>
</form>