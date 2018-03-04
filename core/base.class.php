<?php
class Db {
    private $server     = "localhost";
    private $username   = "root";
    private $password   = "";
    private $db         = "siak";
    
    public function get($var){
    switch ($var){
      case 'server':
        return $this->server;
        break;
      case 'username':
        return $this->username;
        break;
      case 'password':
        return $this->password;
        break;
      case 'db':
        return $this->db;
        break;
      default:
        return null;
        break;
    }
  }
}