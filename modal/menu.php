<h3 class="text-center mt-3">新增主選單</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="col-8 m-auto">
    <tr>
        <td>主選單名稱:</td>
        <td><input type="text" name="text" id=""></td>
    </tr>
    <tr>
        <td>選單連結網址:</td>
        <td><input type="text" name="href" id=""></td>
    </tr>
    </table>
    <div class="text-center mt-3">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" class="btn btn-success" value="新增">
        <input type="reset" class="btn btn-danger" value="重置">
    </div>
</form>