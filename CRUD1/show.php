<?php

  if (isset($_GET['id'])) {

    $id     = $_GET['id'];
    $db     = mysqli_connect("localhost", "root", "", "phpbasiccrud");
    $sql    = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($db, $sql);
    $row    = mysqli_fetch_assoc($result);
      
  }

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
	<div class="row">
		<div class="col-md-3">
			<a class="btn btn-primary" href="index.php">Student List</a>
		</div>
		<div class="card p-3 col-md-6">
			<h2 style="text-align: center; margin-bottom: 10px;">User information</h2>
			<table class="table table-striped">
				<tr>
					<th>Name</th>
					<td><?= $row['fname']." ".$row['lname'] ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?= $row['email'] ?></td>
				</tr>
				<tr>
					<th>Mobile</th>
					<td><?= $row['mobile'] ?></td>
				</tr>
				<tr>
					<th>Address</th>
					<td><?= $row['address'] ?></td>
				</tr>
			</table>
			<form method="post" action="edit.php?id=<?= $row['id'] ?>">
				<h2 style="text-align: left;">
					<input type="submit" name="edit" class="btn btn-primary" value="Edit User">
				</h2>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>