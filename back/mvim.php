<main class="container mb-5">
    <h3 class="text-center">動畫圖片</h3>
    <hr>
    <div><input type="button" class="btn btn-outline-primary" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動畫"></div>
    <form action="../api/edit.php" method="post">
        <table class='table table-bordered text-center mt-3'>
            <tr>
                <td>動畫圖片</td>
                <td style="width: 5%;">顯示</td>
                <td style="width: 5%;">刪除</td>
                <td style="width: 10%;"></td>
            </tr>
            <?php
                $rows = $DB->all();
                foreach ($rows as $row) {
            ?>
                <tr class="align-middle">
                    <td>
                        <img class="object-fit-cover" src="./img/<?= $row['img']; ?>" style="width:300px;height:300px">
                    </td>
                    <td style="padding-left: 20px;">
                        <!-- <input type="radio" name="sh" id="" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>> -->
                        <div class="form-check form-switch" >
                            <input class="form-check-input " type="checkbox" name="sh[]" id="" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </div>
                    </td>
                    <td style="padding-left: 25px;">
                        <!-- <input type="checkbox" name="del[]" id="" value="<?= $row['id']; ?>"> -->
                        <div class="form-check" >
                            <input class="form-check-input" type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </div>
                    </td>
                    <td>
                        <input class='btn btn-primary' type="button" value="更新圖片" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')">
                    </td>
                    <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                </tr>
            <?php
            }
            ?>
        </table>
        <div class="d-flex justify-content-end">
            <input type="hidden" name="table" value="<?= $do; ?>">
            <div>
                <input type="submit" class="btn btn-outline-primary" value="修改確定">
                <input type="reset" class="btn btn-outline-danger" value="重置">
            </div>
        </div>
    </form>
</main>