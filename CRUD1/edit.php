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
<div class="container">
  <div class="row mt-3">
    <div class="col-md-3">
      <a class="btn btn-primary" href="index.php">User List</a>
    </div>
    <div class="col-md-6">
      <div class="card p-2">
        <h2 style="text-align: center;">Update User</h2>
        <form action="update.php?id=<?= $row['id']; ?>" method="post">
          <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" name="fname" id="fname" class="form-control" value="<?= $row['fname']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control" value="<?= $row['lname']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= $row['email']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="number" name="mobile" id="mobile" class="form-control" value="<?= $row['mobile']; ?>" 2required>
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control" required><?= $row['address']; ?></textarea>
          </div>
          <div class="mb-3">
            <input type="submit" name="update" value="Update User" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>