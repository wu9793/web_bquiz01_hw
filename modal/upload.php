            <?php
            switch ($_GET['table']) {
                case "title":
                    echo "<h3 class='text-center mt-3'>標題區圖片</h3>";
                    break;
                case "mvim":
                    echo "<h3 class='text-center mt-3'>動畫圖片</h3>";
                    break;
                case "image":
                    echo "<h3 class='text-center mt-3'>校園映像圖片</h3>";
                    break;
                case "news":
                    echo "<h3 class='text-center mt-3'>最新消息圖片</h3>";
                    break;
            }
            ?>
            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="col-8 m-auto">
                    <tr class="m-auto">
                        <td><input type="file" name="img" id=""></td>
                    </tr>
                </table>
                <div class="text-center mt-3">
                    <input type="hidden" name="table" value="<?= $_GET['table']; ?>">
                    <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                    <input class="btn btn-success" type="submit" value="更新">
                    <input class="btn btn-danger" type="reset" value="重置">
                </div>

            </form>