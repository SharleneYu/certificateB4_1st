<!-- 由login.php複製過來修改，因頁面不同，所產生的變數、SESSION計算結果也會不同 -->

<h2 class="ct">管理者登入</h2>
<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp">
        
        <?php
        //驗證功能不要寫在前端
        $a=rand(10,99);
        $b=rand(10,99);
        $_SESSION['ans']=$a+$b; 
        echo "{$a}+{$b}=";      

        ?>
        
        <input type="text" name="ans" id="ans"></td>
    </tr>

</table>
<div class="ct"><button>確認</button></div>