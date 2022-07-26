<?php 

require_once '../MODEL/model.php';
if(isset($_GET['id']))
{
  $product = showProduct($_GET['id']);  
}
else
{
  header('Location: displayProduct.php');
}
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>Delete Product</title>
</head>

<body>
    <?php 
        include "head.php";
  ?>
    <form method="POST">
        <fieldset style="width: 15%;">
            <legend>DELETE PRODUCT</legend>

            Name : <?php echo $product['Name'] ?><br>

            Buying Price : <?php echo $product['Price'] ?><br>

            Selling Price : <?php echo $product['Quantity'] ?><br>

            Displayable :<?php echo $product['Display'] ?><br>

            <hr>
            <a href="../CONTROLLER/removeProduct.php?id=<?php echo $product['ID'] ?>">Delete</a>

        </fieldset>
    </form>
</body>

</html>