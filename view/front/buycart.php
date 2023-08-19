<?php

//如果未登入，先讓user進行登入
if(!isset($_SESSION['user'])){
    to("?do=login");
}