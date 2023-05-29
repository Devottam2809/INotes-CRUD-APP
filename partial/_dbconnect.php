<?php
    $serveranme = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    $conn = mysqli_connect($serveranme,$username,$password,$database);
    if(!$conn)
        die("Connection failed" . mysqli_error($conn) );
    else
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>"

?>