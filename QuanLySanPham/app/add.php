<?php
include_once '../class/ProductControler.php';
?>

<form action="" name="FormAdd" method="post">

    <br><span>Product Name</span>
    <input name="name" type="text" required>
    <br><span>Price</span>
    <input name="price" type="number" required>
    <br><span></span>
    <input type="submit" value="Add Product">
</form>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $productAdd = new ProductControler();
    $productAdd->addProduct($name, $price);
}

?>
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