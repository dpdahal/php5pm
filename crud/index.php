<?php
require_once "connection.php";

$sQuery = "SELECT * FROM students ORDER BY id DESC";
$sResponse = mysqli_query($connection, $sQuery);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../exercise/bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-md-12">
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <h1>Student Record </h1>
        </div>

        <div class="col-md-4">

            <form action="insert.php" method="post">
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" required class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <label> <input type="radio" name="gender" value="male">Male</label>
                    <label> <input type="radio" name="gender" value="female">Female</label>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" name="phone" id="phone">
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Add Record</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <input type="text" name="search">
            <button>Search</button>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>S.n</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($sResponse as $key => $student) : ?>
                    <tr>
                        <td><?= ++$key; ?></td>
                        <td><?= $student['name'] ?></td>
                        <td><?= $student['email'] ?></td>
                        <td><?= $student['gender'] ?></td>
                        <td><?= $student['phone'] ?></td>
                        <td><?= $student['address'] ?></td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>


