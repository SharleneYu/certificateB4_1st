<?php
session_start();
date_default_timezone_set("Asia/Taipei");

include_once __DIR__ . "/controller/Bottom.php";
include_once __DIR__ . "/controller/User.php";
include_once __DIR__ . "/controller/Admin.php";

$Bottom=new Bottom;
$User=new User;
$Admin=new Admin;

function to($url){
    header("location:".$url);
}