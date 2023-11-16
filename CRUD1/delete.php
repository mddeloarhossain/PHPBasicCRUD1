<?php

	if (isset($_GET['id'])) {

		$id = $_GET['id'];
		$db 	= mysqli_connect("localhost", "root", "", "phpbasiccrud");
		$sql 	= "DELETE FROM users WHERE id=$id";
		$result = mysqli_query($db, $sql);
		
		if ($result) {
			header('location:index.php');
		}
		
	}

?>