<?php

require '../MODEL/model.php';

if (isset($_POST['search'])) 
{
    $products = searchProduct($_POST['name']);
    require '../VIEW/SearchDisplayProduct.php';
}
?>