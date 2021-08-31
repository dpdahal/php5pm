<?php

$connection = mysqli_connect('127.0.0.1', 'root', 'admin', 'college');

$sql = "SELECT * FROM students";
$res = mysqli_query($connection, $sql);


if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $query = "INSERT INTO students(name,email,phone)VALUES('$name','$email','$phone')";
    $response = mysqli_query($connection, $query);
    if ($response == true) {
        header('Location:index.php');
        exit();

    } else {
        echo "error";
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
    <form action="" method="post">
        <label for="name">Name</label> <br>
        <input type="text" name="name"> <br>

        <label for="email">Email</label> <br>
        <input type="text" name="email"><br>

        <label for="phone">Phone</label> <br>
        <input type="text" name="phone">
        <br><br>
        <button>Add Record</button>

    </form>
    <hr>

    <table width="100%" border="1">
        <thead>
        <tr>
            <th>S.n</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($res as $key => $student) : ?>
            <tr>
                <td><?= ++$key ?></td>
                <td><?php echo $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td>
                    <a href="edit.php?sid=<?=$student['id']?>">Edit</a>
                    <a href="delete.php?sid=<?= $student['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</blockquote>


</body>
</html>