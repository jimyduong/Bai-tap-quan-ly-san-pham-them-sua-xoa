<?php
include_once '../class/ProductControler.php';

$idProduct = $_GET['id'];

$deleteProduct = new ProductControler();
$deleteProduct->deleteProduct($idProduct);
header('Location: ../index.php');