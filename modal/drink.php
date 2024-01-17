<h3 class="text-center mt-3">新增商品</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="col-8 m-auto">
        <tr>
            <td>商品圖片</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>商品名稱</td>
            <td><input type="text" name="title" value=""></td>
        </tr>
        <tr>
            <td>價格</td>
            <td><input type="price" name="price" value=""></td>
        </tr>
    </table>
    <div class="text-center mt-3">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" class="btn btn-success" value="新增">
        <input type="reset" class="btn btn-danger" value="重置">
    </div>
</form>