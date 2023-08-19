<?php
if(isset($_POST['bottom'])){
    //因為檢定不會有id被刪再增，id編號改變的狀況，可以簡化直接指定id=1。但正常的話，要在form裡藏id，帶給這裡指定使用
    $_POST['id']=1;
    $Bottom->save($_POST);
}
?>


<h2 class="ct">編輯頁尾版權區</h2>

<form action="?do=bot" method="post">
    <table class="all">
        <tr>
            <td class="ct tt">頁尾宣告內容</td>
            <td class="pp">
                <input type="text" name="bottom" value="<?=$Bottom->bot();?>" >
            </td>
        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>