<?php

$conn = mysqli_connect('127.0.0.1', 'root', '', 'college');

$id = $_GET['sid'];

$sql = "SELECT * FROM students WHERE id=" . $id;

$res = mysqli_query($conn, $sql);

$student = mysqli_fetch_assoc($res);


if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "UPDATE students SET name='$name',email='$email',phone='$phone' WHERE id='$id'";
    $response = mysqli_query($conn, $query);
    if ($response == true) {
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
<blockquote>
    <h1>Update Record</h1>
    <hr>

    <form action="" method="post">
        <label for="name">Name</label> <br>
        <input type="text" name="name" value="<?= $student['name'] ?>"> <br>

        <label for="email">Email</label> <br>
        <input type="text" name="email" value="<?= $student['email'] ?>"><br>

        <label for="phone">Phone</label> <br>
        <input type="text" name="phone" value="<?= $student['phone'] ?>">
        <br><br>
        <button>Update Record</button>

    </form>
</blockquote>

</body>
</html>
