<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['error'] = "Please login first";
    header('Location:index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome: <?= $_SESSION['username'] ?></h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                A aperiam, aut consectetur cumque eaque, error impedit maxime omnis possimus quos sapiente ullam.
                Accusantium earum obcaecati officia quia recusandae, repudiandae totam?
            </p>
            <hr>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</div>

</body>
</html>
