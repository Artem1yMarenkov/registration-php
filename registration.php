<?php

require_once "db.php";

interface registrate {
   public function registrate($mysqli) : void;
}

class Registration implements registrate {
    private $login;   
    private $password;
    private $mysqli;


    public function registrate($mysqli) : void
    {   
        $this->mysqli = $mysqli;
        $this->set_info_user_info();
        $this->save_db();
    }


    private function set_info_user_info() : void
    {
        $this->login = $_REQUEST['login'];
        $this->password =  md5($_REQUEST['password']);
    }


    private function save_db() : void
    {
        $query = "INSERT INTO `users` (`login`, `password`) VALUES ('" . $this->login . "','" . $this->password . "')";
        echo $query;
        $this->mysqli->query($query);
    }
}

$registration = new Registration;
$registration->registrate($mysqli);

?>