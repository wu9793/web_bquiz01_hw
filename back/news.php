<main class="container mb-5">
    <h3 class="text-center">最新消息資料管理</h3>
    <hr>
    <div><input type="button" class="btn btn-outline-primary" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增最新消息"></div>
    <?php
    $total = $DB->count();
    $div = 3;
    $pages = ceil($total / $div);
    $now = $_GET['p'] ?? 1;
    $start = ($now - 1) * $div;
    $rows = $DB->all(" limit $start,$div");
    ?>
    <!-- 分頁 -->
    <div class="d-flex mleft-80 mb-3 mt-3">
        <?php
        if ($now > 1) {
            $prev = $now - 1;
            echo "<a class='mx-2 text-decoration-none pt-3' href='?do=$do&p=$prev'><i class='fa-solid fa-angle-left'></i></a>";
        }

        for ($i = 1; $i <= $pages; $i++) {
            $Bgcolor = ($now == $i) ? '#ccc' : '';
            echo "<a class='mx-2 text-decoration-none' href='?do=$do&p=$i' style='background-color:$Bgcolor'>
                <div class='pages'> $i </div>
                </a>";
        }

        if ($now < $pages) {
            $next = $now + 1;
            echo "<a class='mx-2 text-decoration-none pt-3' href='?do=$do&p=$next'><i class='fa-solid fa-angle-right'></i></a>";
        }

        ?>
    </div>
    <form action="./api/edit.php" method="post">
        <table class='table table-bordered text-center mt-3'>
            <tr>
                <td>消息圖片</td>
                <td>消息資料標題</td>
                <td>活動日期</td>
                <td>消息資料內容</td>
                <td style="width:5%">顯示</td>
                <td style="width:5%">刪除</td>
                <td style="width: 10%;"></td>
            </tr>
            <?php
            foreach ($rows as $row) {
            ?>
                <tr class="align-middle">
                    <td>
                        <img class="object-fit-cover" src="./img/<?= $row['img']; ?>" style="width:300px;height:300px">
                    </td>
                    <td>                        
                        <textarea class="form-control" name="title[]" rows="4"><?= $row['title']; ?></textarea>
                    </td>
                    <td>
                        <input type="text" name="date[]" value="<?= $row['date']; ?>">
                    </td>
                    <td>
                        <textarea class="form-control" name="text[]" rows="10"><?= $row['text']; ?></textarea>
                    </td>
                    <td style="padding-left: 18px;">
                        <div class="form-check form-switch">
                            <input class="form-check-input " type="checkbox" name="sh[]" id="" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
                        </div>
                    </td>
                    <td style="padding-left: 25px;">
                        <div class="form-check">
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