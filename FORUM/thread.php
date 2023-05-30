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
    <?php
    $id=$_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id = $id";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
        
    }
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname?></h1>
            <p class="lead"><?php echo $catdesc ?></p>
            <hr class="my-4">
            <p>Learn More Whether you're new to programming or an
                experienced developer, it's easy to learn and use Python. Python source code and installers are
                available for download for all versions!.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
    <div class="container">
        <h1>Browse Questions</h1>
        <?php
    $id=$_GET['catid'];
    $sql = "SELECT * FROM `threads` WHERE thread_cat_id = $id";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        echo '
        <div class="media">
        <img class="mr-3" src="https://source.unsplash.com/50x50/?user,human" alt="Generic placeholder image">
        <div class="media-body">
            <h5 class="mt-0 my-3"><a href="threadlist.php">'.$title.'</a></h5>
            '.$desc.'
        </div>
    </div>
        ';
        
    }
    ?>
        
        <
    <?php include 'D:\XAMPP\htdocs\FORUM\partials\_footer.php'; ?>
    <?php include 'D:\XAMPP\htdocs\FORUM\partials\_loginmodal.php'; ?>
    <?php include 'D:\XAMPP\htdocs\FORUM\partials\_signupmodal.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>