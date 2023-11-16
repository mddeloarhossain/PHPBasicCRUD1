<?php

	if (isset($_POST['submit'])) {

		$fname 		= $_POST['fname'];
		$lname 		= $_POST['lname'];
		$email 		= $_POST['email'];
		$mobile 	= $_POST['mobile'];
		$address 	= $_POST['address'];

		$db 	= mysqli_connect("localhost", "root", "", "phpbasiccrud");
		$sql 	= "INSERT INTO users (fname, lname, email, mobile, address) 
		          VALUES ('$fname', '$lname', '$email', '$mobile', '$address')";
		$result = mysqli_query($db, $sql);

		if ($result) {
			header('location:index.php');
		}
		
	}

?>