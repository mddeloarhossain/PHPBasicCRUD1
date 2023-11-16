<?php

	if (isset($_POST['update'])) {
		
		$id 		= $_GET['id'];
		$fname 		= $_POST['fname'];
		$lname 		= $_POST['lname'];
		$email 		= $_POST['email'];
		$mobile 	= $_POST['mobile'];
		$address 	= $_POST['address'];

		$db 	= mysqli_connect("localhost", "root", "", "phpbasiccrud");
		$sql 	= "UPDATE users SET fname='$fname', lname='$lname', email='$email', mobile='$mobile', address='$address' WHERE id=$id";
		$result = mysqli_query($db, $sql);

		if ($result) {
			header('location:index.php');
		}

	}

?>