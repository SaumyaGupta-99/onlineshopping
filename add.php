<?php
session_start();
include_once("config.php");


		$code = ($_POST['product_code']);
		$name = ($_POST['product_name']);
		$cat = ($_POST['category']);
		$fan = ($_POST['fandom']);
		$fees = ($_POST['price']);
        $quant = ($_POST['product_qty']);
        $img = ($_POST['PRODUCT_IMAGE']);
        


$sql = "INSERT INTO products(product_code,product_name,category,fandom,price,product_qty, product_img_name) VALUES ('$code','$name','$cat','$fan','$fees','$quant','$img')";

if (mysqli_query($mysqli,$sql)){
	echo '<script type="text/javascript">alert("New product added. Add more!");</script>';
	header("Location:http://localhost/JIU/add_product.php");
} 
else 
{
	echo '<script type="text/javascript">alert("Error Occured");</script>';
	header("Location:http://localhost/JIU/add_product.php");

}



?>