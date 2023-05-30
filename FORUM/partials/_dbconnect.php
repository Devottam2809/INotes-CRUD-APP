<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "idiscuss";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
        die("Unable to connect" . mysqli_error($conn));
    else
        echo "connection done";
?>