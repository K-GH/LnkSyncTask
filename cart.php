<?php
	include 'backend.php';	
/*
		@$cartBtn=$_POST['cartBtn'];
		if(isset($cartBtn))
		{
			echo "btn";
		}*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>LnkSyncTask</title>
    		<!--bootstrap -->
		    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="css/css.style">

</head>
<body>
	<p>Cart</p>
	<div>
		<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Product Name</th>
			      <th scope="col">Price</th>
			      <th scope="col">Quantity</th>
			    </tr>
			  </thead>

			  <tbody>

			  	<?php 
			  		$i=1;
					$products=cart();
					foreach($products as $product)
					{		
					    ?>
					    <tr>
					      <th scope="row"><?php echo $i ; ?></th>
					      <td><?php print_r($product['c_name']) ; ?></td>
					      <td><?php print_r($product['c_price']) ; ?></td>
					      <td><?php print_r($product['c_quantity']) ; ?></td>
					    </tr>
    		    <?php 
					$i++;
					}
					
				 ?>

			  </tbody>


		</table>
	</div>

</body>
</html>