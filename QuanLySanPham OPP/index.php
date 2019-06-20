<?php
include_once "class/DatabaseConnect.php";
include_once 'class/ProductControler.php';
include_once 'class/product.php';

$display=new ProductControler();
$arrProduct=[];
$products=$display->displayProduct();
//print_r($products);
foreach ($products as $value){
    $product=new product($value['productName'],$value['Price'],$value['id']);
//    echo $product->getIdProduct();
    array_push($arrProduct,$product);
}
//print_r($product);
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
<table>
    <a href="app/add.php"><input type="submit" value="Add Product"></a>
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Price</td>
        <td>action</td>
    </tr>

<?php foreach ($arrProduct as $key=> $value){?>

    <tr>
        <td class="tdwidth"><?php echo $key+1?></td>
        <td class="tdwidth"><?php echo $value->getName()?></td>
        <td class="tdwidth"><?php echo $value->getPrice()?></td>
        <td>
            <a href="app/edit.php?page=edit&id=<?php echo $value->getIdProduct()?>">
                <button type="submit">Edit</button>
            </a>
            <a href="app/delete.php?page=delete&id=<?php echo $value->getIdProduct()?>">
                <button type="submit">Delete</button>
            </a>
        </td>
     </td>
    </tr>
    <?php }?>
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
</table>
</body>
</html>
