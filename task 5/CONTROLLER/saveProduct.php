<?php  
require_once '../MODEL/model.php';


if (isset($_POST['saveProduct'])) 
{
	$data['name'] = $_POST['name'];
	$data['price'] = $_POST['price'];
	$data['quantity'] = $_POST['quantity'];
	if (isset($_POST['display'])) 
	{
		$data['display'] = "YES";
	}
	else
		$data['display'] = "NO";

  if (addProduct($data)) 
  {
  	echo 'Successfully added!!';
  	header('Location: ../VIEW/displayProduct.php');
  }
} 
else 
{
	echo 'You are not allowed to access this page.';
}
?>