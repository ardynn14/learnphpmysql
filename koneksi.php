<?php
class Koneksi{
    private $server = "localhost:3306";
    private $username = "root";
    private $password = "";
    private $db = "test";

    function getKoneksi(){
        return new mysqli($this->server,$this->username,$this->password,$this->db);
    }
}
?>
