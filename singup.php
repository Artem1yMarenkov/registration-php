<?php

require_once "db.php";

interface singup {
   public function registrate($db_connect) : void;
}

class Sing_Up implements singup {
    private $login;   
    private $password;
    private $db_connect;
    private $query;


    public function registrate($db_connect) : void
    {   
        $this->db_connect = $db_connect;
        $this->set_info_user_info();
        $this->save_db();
    }


    private function set_info_user_info() : void
    {
        $this->login    = (string)$_REQUEST['login'];
        $this->password =  md5((string)$_REQUEST['password']);
    }


    private function save_db() : void
    {
        $this->query = "INSERT INTO `users` (`login`, `password`) 
                        VALUES ('" . $this->login . "','" . $this->password . "')";

        $this->db_connect->query($this->query);

    }
}


$registration = new Sing_Up;
$registration->registrate($mysqli);


?>