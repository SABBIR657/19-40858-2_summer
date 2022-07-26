<?php
if (isset($_POST['updateProduct'])) 
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

  if (updateProduct($_GET['id'], $data)) 
  {
  	echo 'Successfully updated!!';
  	header('Location: ../VIEW/displayProduct.php');
  }
}
?>