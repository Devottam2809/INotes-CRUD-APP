<?php
$showalert = false;
$showerror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'D:\XAMPP\htdocs\Login System\partial\_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists = false; // Fixed variable name from $existe to $exists

  // Check if the username already exists in the database
  $sql = "SELECT * FROM `users` WHERE `username`='$username'";
  $result = mysqli_query($conn, $sql);
  $numRows = mysqli_num_rows($result);
  if ($numRows > 0) {
    $showerror = "username already exists";
  } else {
    if ($password == $cpassword){
      $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $showalert = true;
      }
    }
    else{
      $showerror = "passwords do not match";
    }
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SignUP Php</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <?php require 'D:\XAMPP\htdocs\Login System\partial\_nav.php'; ?>
  <?php
  if ($showalert) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Success</strong> Sign Up done. You can now log in.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if ($showerror) {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Success</strong>'.$showerror.'
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  ?>
  <div class="container">
    <h1 class="text-center">Welcome to our website</h1>
    <form action="signup.php" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3">
        <label for="cpassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword">
        <div id="emailHelp" class="form-text">Make sure you enter the same password.</div>
      </div>

      <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
