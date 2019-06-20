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

    public function addProduct($obj)
    {
        $arr=(array)$obj;
//        var_dump($arr);
        $sql = "INSERT INTO Product (productName, Price) VALUES (?,?)";
        $arr=[$obj->getName(),$obj->getPrice()];
        $pdo=$this->connect->connect()->prepare($sql);
        $pdo->execute($arr);

        header('Location: ../index.php');
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM `Product` WHERE `id`= $id";
        $delete=$this->connect->Connect()->prepare($sql);
        $delete->execute();

    }
    public function editProduct($id,$obj){
        $arr=(array)$obj;
        $sql = "UPDATE Product SET productName=:productName, Price=:Price WHERE id=$id";
//        $sql = "UPDATE `Product` SET `productName` = '".$obj->getName()."', `Price`='".$obj->getPrice()."' WHERE `id` = $id";
        $pdo=$this->connect->connect()->prepare($sql);
        $pdo->execute($arr);

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