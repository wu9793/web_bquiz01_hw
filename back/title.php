<div class="container-fluid">
    <p class="back-title">網站標題管理</p>
    <form method="post" action="./api/edit.php">
        <table class="text-center w-100">
            <tbody>
                <tr class="bg-gray">
                    <td style="width:50%; height:40px"><h4>網站標題</h4></td>
                    <td style="width:10%; height:40px"><h4>顯示</h4></td>
                    <td style="width:10%; height:40px"><h4>刪除</h4></td>
                    <td></td>
                </tr>
                <?php
                $rows = $DB->all();
                foreach ($rows as $row) {
                ?>
                    <tr class="">
                        <td style="width:50%; padding-top: 20px;">
                            <img src="./img/<?= $row['img']; ?>" style="width:200px; height:200px;">
                        </td>
                        <!-- <td width="23%">
                            <input type="text" name="text[]" style="width: 90%;" value="<?= $row['text']; ?>">
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">

                        </td> -->
                        <td style="width:10%; padding-top: 20px;">
                            <input type="radio" name="sh" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </td>
                        <td style="width:10%; padding-top: 20px;">
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <td style="width:20%; padding-top: 20px;">
                            <input type="button" class="btn btn-success" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')" value="更新圖片">
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?= $do; ?>">

                    <td width="200px">
                        <input type="button" class="btn btn-secondary" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增網站標題圖片">
                    </td>
                    <td class="cent">
                        <input type="submit" class="btn btn-secondary" value="修改確定">
                        <input type="reset" class="btn btn-secondary" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>