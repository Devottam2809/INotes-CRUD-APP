<?php include 'D:\XAMPP\htdocs\FORUM\partials\_dbconnect.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDiscuss - A Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php include 'D:\XAMPP\htdocs\FORUM\partials\_header.php'; ?>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner my-4">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/2400x500/?javascript,coding" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x500/?web,android" class="d-block w-100" alt="java,coding">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x500/?javascript,python" class="d-block w-100"
                    alt="python,coding">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container my-3">
        <h2 class="text-center">Welcome to iDiscuss</h2>
        <div class="row">

            <?php
    $sql = "SELECT * FROM `categories`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        // echo $row['category_name'];
        $cat = $row['category_name'];
        $id = $row['category_id'];
        $desc = $row['category_description'];
        echo '<div class="col-md-4 my-2">
            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/2400x500/?code,python" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="listthread.php?catid='.$id.'">'. $cat.'</a> </h5>
                    <p class="card-text">'.$desc.'</p>
                    <a href="listthread.php" class="btn btn-primary">View Threads</a>
                </div>
            </div>
        </div>
        ';

    }
    ?>
        </div>
        <?php include 'D:\XAMPP\htdocs\FORUM\partials\_footer.php'; ?>
        <?php include 'D:\XAMPP\htdocs\FORUM\partials\_loginmodal.php'; ?>
        <?php include 'D:\XAMPP\htdocs\FORUM\partials\_signupmodal.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>