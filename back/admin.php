<main class="container mb-5">
    <h3 class="text-center">帳號管理</h3>
    <hr>
    <form action="../api/edit.php" method="post">
        <table class='table table-bordered text-center'>
            <tr>
                <td>帳號</td>
                <td>密碼</td>
                <td style="width: 5%;">刪除</td>
            </tr>
            <?php
                $rows = $DB->all();
                foreach ($rows as $row) {
            ?>
                <tr class="align-middle">
                    <td class="">
                    <input type="text" name="acc[]" style="width: 90%;" value="<?= $row['acc']; ?>">
                    </td>
                    <td class="">
                    <input type="password" name="pw[]" value="<?= $row['pw']; ?>">
                    </td>
                    <td style="padding-left: 25px;">
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
        <div class="d-flex justify-content-between">
            <input type="hidden" name="table" value="<?= $do; ?>">
            <div><input type="button" class="btn btn-outline-primary" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增管理者帳號"></div>
            <div>
                <input type="submit" class="btn btn-outline-primary" value="修改確定">
                <input type="reset" class="btn btn-outline-danger" value="重置">
            </div>
        </div>
    </form>
</main>