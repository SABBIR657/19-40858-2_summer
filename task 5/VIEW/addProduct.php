<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="product.css">

</head>

<body>
    <?php
        session_start();
        include 'head.php';
    ?>




    <form action="../CONTROLLER/saveProduct.php" method="POST" enctype="multipart/form-data">
        <fieldset style="width: 15%;">
            <legend>ADD PRODUCT</legend>

            <label for="name">Name</label><br>
            <input type="text" id="name" name="name"><br>

            <label for="price">Price</label><br>
            <input type="text" id="price" name="price"><br>

            <label for="quantity">Quantity</label><br>
            <input type="text" id="quantity" name="quantity"><br>

            <hr>

            <input type="checkbox" id="display" name="display">
            <label for="display">Display</label><br>

            <hr>

            <input type="submit" name="saveProduct" value="Save">

        </fieldset>
    </form>


</body>

</html>