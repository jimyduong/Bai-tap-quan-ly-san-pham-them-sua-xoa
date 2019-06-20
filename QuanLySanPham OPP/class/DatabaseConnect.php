<?php
class DatabaseConnect{
private $servername='mysql:host=localhost;dbname=QuanLySanPham';
private $username='root';
private $password='123456@Abc';


    public function Connect(){
        $conn = null;
        try {
            $conn = new PDO($this->servername, $this->username, $this->password);
        } catch (PDOException $exception) {
            return $exception->getMessage();
        }
        return $conn;
    }

}