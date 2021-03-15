<?php

require_once "db.php";

interface singin {
   public function login($db_connect) : void;
}

class Login implements singin {
    private $login;   
    private $password;
    private $db_connect;


    public function login($db_connect) : void
    {   
        $this->db_connect = $db_connect;
        $this->set_info_user_info();
        $this->check_user_info();
    }


    private function set_info_user_info() : void
    {
        $this->login    = (string)$_REQUEST['login'];
        $this->password = (string)$_REQUEST['password'];
    }


    private function check_user_info() : void
    {
        session_start();
        $_SESSION['query'] = "SELECT * FROM `users` WHERE `login` = '".$this->login."'";
        
        $result = $this->db_connect->query($_SESSION['query']);
        $_SESSION['user'] = $result->fetch_assoc();

        if ( $_SESSION['user']['login'] == $this->login && $_SESSION['user']['password'] == md5($this->password)) {
            echo 'Вы успешно авторизовались';
        }

    }
}


$login = new Login;
$login->login($mysqli);


?>