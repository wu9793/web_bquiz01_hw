<main class="container mb-5">
    <h3 class="text-center">選單管理</h3>
    <hr>
    <div><input type="button" class="btn btn-outline-primary" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增主選單"></div>
    <form action="./api/edit.php" method="post">
        <table class='table table-bordered text-center mt-3'>
            <tr>
                <td>主選單名稱</td>
                <td>選單連結網址</td>
                <td style="width:5%">顯示</td>
                <td style="width:5%">刪除</td>
            </tr>
            <?php
            $rows = $DB->all(['menu_id' => 0]);
            foreach ($rows as $row) {
            ?>
                <tr class="align-middle">
                    <td>
                        <input type="text" name="text[]" value="<?= $row['text']; ?>">
                    </td>
                    <td>
                        <input type="text" name="href[]" value="<?= $row['href']; ?>">
                    </td>
                    <td style="padding-left: 18px;">
                        <!-- <input type="radio" name="sh" id="" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>> -->
                        <div class="form-check form-switch">
                            <input class="form-check-input " type="checkbox" name="sh[]" id="" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </div>
                    </td>
                    <td style="padding-left: 25px;">
                        <!-- <input type="checkbox" name="del[]" id="" value="<?= $row['id']; ?>"> -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </div>
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