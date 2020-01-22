<?php
	include 'backend.php';	

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

	<div class="container"><!-- all products -->

		<div class="container"><!-- all products on line -->
				<?php 

					$products=product();
					foreach($products as $product)
					{		
					    ?>
					   	<form method="POST"  class="product">
							<figure class="product" >
									<br>
								 <figcaption style="text-align: center;" >

										<span ><?php print_r($product['p_name']) ; ?></span>

										<input type="hidden" name="name" value="<?php print_r($product['p_name']) ; ?>" />
										<br>
										<span  ><?php print_r($product['p_price']) ; ?></span>
										<input type="hidden" name="price" value="<?php print_r($product['p_price']) ; ?>" />
										<br>
										<select class="form-control" name="quantity">
										<?php 
											for ($i=0; $i <= $product['p_quantity'] ; $i++)
											{ 	
												?>
											      <option><?php echo $i; ?></option>

										<?php	    
											}
										 ?>
									    </select>
										<button type="submit" name="cartBtn" class="btn btn-secondary btn-lg btn-block" >Add To Cart</button>
										<br>

								</figcaption> 

							</figure>
					 </form>
	            <?php  
			
					}
					
				 ?>

				

		</div>


	</div>

</body>
</html>