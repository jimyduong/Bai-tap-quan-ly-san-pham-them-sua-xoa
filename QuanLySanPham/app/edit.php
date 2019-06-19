<?php
include_once "../class/DatabaseConnect.php";
include_once "../class/ProductControler.php";

$idget = $_GET['id'];
$showProductByID = new ProductControler();
$showProductByID->showProductByID($idget);
$result = $showProductByID->showProductByID($idget);
//print_r($result);

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $id = $idget;
    $name = $_POST['name'];
    $price = $_POST['price'];
    echo $id.$name.$price;
    $productEdit = new ProductControler();
    $productEdit->editProduct($id,$name,$price);
}


?>
<form action="" method="post">
    <br><span>ID:</span><span name="id"><?php echo $result['id']; ?></span>
    <br><span>Product Name</span><input type="text" name="name" value="<?php echo $result['productName']; ?>">
    <br><span>Price</span><input type="text" name="price" value="<?php echo $result['price']; ?>">
<!--    <br><span>Decreption</span><input type="text" name="desc" value="--><?php //echo $result['decreption']; ?><!--">-->
    <br><span></span><input type="submit" value="Edit">

</form>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    th{
        background: #0c5460;
        color: #ffffff;
    }

    th, td{
        border: 1px solid #000;
        text-align: center;
    }
    .tdwidth{
        min-width: 200px;
    }
    span {
        min-width: 120px;
        display: inline-block;
    }
</style>
</body>
</html>