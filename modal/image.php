<h3 class="text-center mt-3">新增商品</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table class="col-8 m-auto">
        <tr>
            <td><input type="file" name="img" id=""></td>
        </tr>
    </table>
    <div class="text-center mt-3">
        <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
        <input type="submit" class="btn btn-success" value="新增">
        <input type="reset" class="btn btn-danger" value="重置">
    </div>
</form>