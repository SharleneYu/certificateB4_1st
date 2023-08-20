<?php

include_once "DB.php";

class User extends DB{

    function __construct()
    {
        parent::__construct('users');
    }
    
    function login($user){
        //若登入成功，建立一個SESSION記錄user id
        if($this->count($user)){
            $_SESSION['user']=$user['acc'];
            return 1;
        }else{
            return 0;
        }    
    }
}
