<?php

$requestUri = isset($_GET['uri']) ? $_GET['uri'] : 'home';
$requestUri = str_replace('.php', '', $requestUri);
$title = $requestUri;
$requestUri .= '.php';
$pagePath = 'pages/' . $requestUri;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP5PM : : <?= ucfirst($title); ?></title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php
            require_once "menu.php";
            if (file_exists($pagePath) && is_file($pagePath)) {
                require_once $pagePath;
            } else {
                require_once "404.php";
            }
            ?>
        </div>
        <div class="col-md-12" style="margin-top: 50px;">
            <h1>Footer Section</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ducimus eius facilis quod. Aut dolor ex, facere, illo itaque iusto numquam officiis
                perferendis praesentium quia quibusdam ratione rerum sed veniam!
            </p>
        </div>
    </div>
</div>

</body>
</html>







