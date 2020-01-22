<?php 

include "DBconn.php";

	//connectDB();


function product()
	{	
		$products = array();
		$conn=connectDB();
		$query='SELECT * FROM product';
		$result=$conn->query($query);

		//insert all products from DB in array
		 while ($row = $result->fetch_assoc()) {
				 
				 $products[]=$row;
				}
		//echo all product		
		//print_r($products);	
		return $products ;
	}

function addCart()
	{
		@$name=$_POST['name'];
		@$price=$_POST['price'];
		@$quantity=$_POST['quantity'];
		@$cartBtn=$_POST['cartBtn'];
	
		if(isset($cartBtn))
		{
			
			$conn=connectDB();
			$query="INSERT INTO `cart` (`c_name`, `c_price`, `c_quantity`)  VALUES ('$name','$price','$quantity')";

			
			//$result = mysqli_query($conn, $query);
			$result=$conn->query($query);
			if ($result) {
				
				header("location: cart.php");

					}

		}
	}
addCart();

function cart()
	{	
		$products = array();
		$conn=connectDB();
		$query='SELECT * FROM cart';
		$result=$conn->query($query);

		//insert all products of cart from DB in array
		 while ($row = $result->fetch_assoc()) {
				 
				 $products[]=$row;
				}
		//echo all product		
		//print_r($products);	
		return $products ;
	}


		
 ?>