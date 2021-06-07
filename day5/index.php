<?php

// Array

//$_GET;
//$_POST;
//$_SESSION;
//$_SERVER;
//$_COOKIE;
//$_FILES;
//$_ENV;
//$_REQUEST;

//var_dump($_GET);

//var_dump($_POST);

//echo "<pre>";
////print_r($_POST);
//print_r($_SERVER);
//echo "</pre>";

//if (!empty($_POST)) {
//    $name = $_POST['name'];
//    echo $name;
//}
//
//if (!empty($_POST)) {
//    print_r($_POST);
//}

$name = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
} else {
    echo "empty";
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
</head>
<body>
<blockquote>
    <form action="" method="post">
        <input type="text" name="name">
        <input type="password" name="password">
        <button>Add</button>
    </form>

    <hr>

    <h1>My name is: <?= $name; ?></h1>
</blockquote>

</body>
</html>


