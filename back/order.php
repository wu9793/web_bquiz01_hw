<main class="container mb-5">
    <h3 class="text-center">訂單管理</h3>
    <hr>
    <table class='table table-bordered text-center'>
        <tr>
            <td>訂單編號</td>
            <td>金額</td>
            <td>會員帳號</td>
            <td>姓名</td>
            <td>下單時間</td>
            <td style="width: 5%;">刪除</td>
        </tr>
        <?php
        $rows = $Order->all();
        foreach ($rows as $row) {
        ?>
            <tr class="align-middle">
                <td>
                    <a href="?do=detail&id=<?= $row['id']; ?>">
                        <?= $row['no']; ?>
                    </a>
                </td>
                <td><?= $row['total']; ?></td>
                <td><?= $row['acc']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= date("Y/m/d", strtotime($row['orderdate'])); ?></td>
                <td>
                    <?php
                    echo "<button type='button' class='btn btn-outline-danger' onclick='del(&#39;orders&#39;,{$row['id']})'>刪除</button>";
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</main>