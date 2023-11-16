<?php

		$db 	= mysqli_connect("localhost", "root", "", "phpbasiccrud");
		$sql 	= "SELECT * FROM users";
		$result = mysqli_query($db, $sql);	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>

<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">PhPBasicCRUD</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-3">
	<h2 style="text-align: right;">
		<a class="btn btn-primary" href="create.php">Create User</a>
	</h2>
	<div class="row">
		<h2 style="text-align: center;">Student List</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td><?= $row['id'] ?></td>
					<td><?= $row['fname']." ".$row['lname'] ?></td>
					<td><?= $row['email'] ?></td>
					<td><?= $row['mobile'] ?></td>
					<td><?= $row['address'] ?></td>
					<td>
						<a href="show.php?id=<?= $row['id'] ?>" class="btn btn-info">Show</a>
						<a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
						<a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>