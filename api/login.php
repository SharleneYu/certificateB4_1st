<?php
include_once "../base.php";

//$_POST['table']中的值，可能是User或Admin，直接代入可以變成$User或$Admin
echo ${$_POST['table']}->login($_POST['user']);

?>