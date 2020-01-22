<?php 


function connectDB()
	{
		$connect=mysqli_connect("localhost", "root", "", "LnkSyncTask");
		// Check connection

		if (!$connect) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		//echo "Connected successfully";

		return $connect;
	}


 ?>