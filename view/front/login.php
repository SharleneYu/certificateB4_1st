



<h2>第一次購物</h2>
<a href="javascript:location.href='?do=reg'"><img src="./icon/0413.jpg" alt=""></a>

<h2>會員登入</h2>
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
<div class="ct">
    <button onclick="login('User')">確認</button>
</div>