<?php

$connection = mysqli_connect('127.0.0.1',
    'root',
    'admin',
    'college');
if (!$connection) {
    echo "errors";
}

$query = "SELECT * FROM students";
$response = mysqli_query($connection, $query);

//print_r(mysqli_fetch_all($response));
//print_r(mysqli_fetch_array($response));
//print_r(mysqli_fetch_assoc($response));

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
    <table width="100%" border="1">
        <thead>
        <tr>
            <th>S.n</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Language</th>
            <th>Country</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($response as $key => $student) : ?>
            <tr>
                <td><?= ++$key; ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['gender'] ?></td>
                <td><?= $student['language'] ?></td>
                <td><?= $student['country'] ?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>

            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
</blockquote>

</body>
</html>




