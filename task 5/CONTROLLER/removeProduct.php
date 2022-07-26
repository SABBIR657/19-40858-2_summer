<?php 

require_once '../MODEL/model.php';
if (deleteProduct($_GET['id']))
{
    header('Location: ../VIEW/displayProduct.php');
}

 ?>