<?php 

require_once '../MODEL/model.php';
require_once '../CONTROLLER/updateProduct.php';
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
    <title>Edit Product</title>
</head>

<body>
    <?php 
        include "head.php";

     ?>
    <form method="POST">
        <fieldset style="width: 15%;">
            <legend>EDIT PRODUCT</legend>

            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" value="<?php echo $product['Name'] ?>"><br>

            <label for="price">Price</label><br>
            <input type="text" id="price" name="price" value="<?php echo $product['Price'] ?>">
            <br>
            <label for="quantity">Quantity</label><br>
            <input type="text" id="quantity" name="quantity" value="<?php echo $product['Quantity'] ?>"><br>

            <hr>

            <input type="checkbox" id="display" name="display"
                <?php if($product['Display']== "YES"){echo "checked";} ?>>
            <label for="display">Display</label><br>

            <hr>

            <input type="submit" name="updateProduct" value="Save">

        </fieldset>
    </form>
</body>

</html>