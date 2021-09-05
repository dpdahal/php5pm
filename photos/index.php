<?php

$connection = mysqli_connect('127.0.0.1', 'root', '', 'php5pm');
if (!$connection) {
    echo "Database connection errors";
    die();
}

$query = "SELECT * FROM photos";

$photoResponse = mysqli_query($connection, $query);

if (!empty($_FILES)) {
    $totalImage = count($_FILES['images']['name']);
    $totalSuccess = 0;
    for ($x = 0; $x < $totalImage; $x++) {
        $ext = pathinfo($_FILES['images']['name'][$x], PATHINFO_EXTENSION);
        $tmpName = $_FILES['images']['tmp_name'][$x];
        $imageName = md5(microtime()) . '.' . $ext;
        $uploadPath = 'images';
        if (move_uploaded_file($tmpName, $uploadPath . '/' . $imageName)) {
            $sql = "INSERT INTO photos(name)VALUES('$imageName')";
            $res = mysqli_query($connection, $sql);
            if ($res == true) {
                $totalSuccess += 1;
            }
        }

    }

    if ($totalImage == $totalSuccess) {
        header('Location:index.php');
        exit();
    }

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
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="images[]" multiple><br><br>
    <button>Add Images</button>
</form>

<hr>

<?php foreach ($photoResponse as $photo) : ?>

    <img src="images/<?= $photo['name'] ?>" width="300" alt="">

<?php endforeach; ?>
</body>
</html>
