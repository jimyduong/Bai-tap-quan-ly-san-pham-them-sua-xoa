<?php
include_once 'DatabaseConnect.php';

class ProductControler
{
    private $connect;

    public function __construct()
    {
        $this->connect = new DatabaseConnect();
        $this->connect->Connect();
    }

    public function addProduct($name, $price)
    {
        $sql = 'INSERT INTO `Product` (`name`, `Price`) VALUES (?, ?)';
        $statement = $this->connect->connect()->prepare($sql);
        var_dump($statement);
        $statement->bindParam(1, $name);
        $statement->bindParam(2, $price);
        $statement->execute();
        header('Location: ../index.php');
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM `Product` WHERE `id`= $id";
        $delete=$this->connect->Connect()->prepare($sql);
        $delete->execute();

    }
    public function editProduct($id,$name,$price){
        $sql = "UPDATE `Product` SET `name` = '".$name."', `Price`=$price"." WHERE `id` = $id";
        $edit = $this->connect->connect()->prepare($sql);
        $edit->execute();
        echo $sql;
        header('Location: ../index.php');
    }
    public function showProductByID($id)
    {
        $sql = "SELECT * FROM `Product` where `id`=$id";
        $showProduct = $this->connect->connect()->prepare($sql);
        $showProduct->execute();
        $result = $showProduct->fetch();
        return $result;
    }
    public function displayProduct(){
        $connect=new DatabaseConnect();
        $sql = "SELECT * FROM Product";
        $datas = $connect->Connect()->query($sql)->fetchAll();
        return $datas;
    }
}