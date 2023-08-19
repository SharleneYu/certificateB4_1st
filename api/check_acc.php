<?php

include_once "../base.php";

//以AJAX以get送acc資料過來，以count方法計數是否為0
echo $User->count($_GET);

?>