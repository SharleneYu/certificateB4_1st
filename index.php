<?php include_once "base.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>┌精品電子商務網站」</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>

<body>
    <div id="main">
        <div id="top">
            <a href="index.php">
                <img src="./icon/0416.jpg" style="width:50%">
            </a>
            <div style="padding:10px; display:inline-block;">
                <a href="?">回首頁</a> |
                <a href="?do=news">最新消息</a> |
                <a href="?do=look">購物流程</a> |
                <a href="?do=buycart">購物車</a> |
                <a href="?do=login">會員登入</a> |
                <a href="?do=admin_login">管理登入</a>
            </div>

            <marquee>年終特賣會開跑了   情人節特惠活動</marquee>

        </div>
        <div id="left" class="ct">
            <div style="min-height:400px;">
            </div>
            <span>
                <div>進站總人數</div>
                <div style="color:#f00; font-size:28px;">
                    00005 </div>
            </span>
        </div>
        <div id="right">

        <?php
            $do=$_GET['do']??'main';
            // [?SYU?]為什麼要將頁面的第一個字母轉大寫交給$table?
            $table=ucfirst($do);
            $file="./view/front/{$do}.php";

            //$table的變數如存在，就把這個物件中front功能的頁面show出來
            if(isset($$table)){
                $$table->front();            
            //若帶入的頁面$file是存在的，就include $file；若找不到就載入main.php
            }else if(file_exists($file)){
                include $file;
            }else{
                include "./view/front/main.php";
            }
        ?>



        </div>
        <div id="bottom" style="line-height:70px;background:url(./icon/bot.png); color:#FFF;" class="ct">
            <?=$Bottom->bot();?>
        </div>
    </div>

</body>

</html>