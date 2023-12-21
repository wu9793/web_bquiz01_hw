<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進佔總人數管理</p>
    <form method="post" action="/api/edit_info.php">
        <table style="width:50%; margin:auto;">
            <tbody>
                <tr class="yel">
                    <td  width="45%">進佔總人數:</td>
                    <td width="55%">
                        <input type="number" name="total" value="<?=$Total->find(1)['total'];?>">
                        <input type="hidden" name="table" value="<?=$do;?>">
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width:70%; margin:auto; margin-top:40px;">
            <tbody>
                <tr>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>