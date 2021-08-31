<?php
$connection = mysqli_connect('127.0.0.1', 'root', 'admin', 'college');
$query = "SELECT * FROM gallery";
$result = mysqli_query($connection, $query);

if (!empty($_FILES)) {
    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $imageName = md5(microtime()) . '.' . $ext;
    $tmpName = $_FILES['image']['tmp_name'];
    if (move_uploaded_file($tmpName, 'images/' . $imageName)) {
        $sql = "INSERT INTO gallery(image_name)VALUES('$imageName')";
        $res = mysqli_query($connection, $sql);
        if ($res == true) {
            header('Location:index.php');
        }

    } else {
        echo "errors";
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
<blockquote>
    <h1>Image Upload</h1>
    <hr>

<!--    <form action="" method="post" enctype="multipart/form-data">-->
<!--        <input type="file" name="image">-->
<!--        <br><br>-->
<!--        <button>Add Image</button>-->
<!--    </form>-->

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image[]" multiple>
        <br><br>
        <button>Add Image</button>
    </form>


    <hr>


    <?php foreach ($result as $item) : ?>

        <img src="images/<?=$item['image_name']?>" width="300" alt="">
    <?php endforeach; ?>
</blockquote>

</body>
</html>
