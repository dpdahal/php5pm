<?php


if(!empty($_POST)){
    print_r($_POST);
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
            <h1>Student Info</h1>
            <hr>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <label><input type="radio" name="gender" value="male">Male</label>
                    <label><input type="radio" name="gender" value="female">Female</label>
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <label><input type="checkbox" name="lang[]" value="nepali">Nepali</label>
                    <label><input type="checkbox" name="lang[]" value="english">English</label>
                    <label><input type="checkbox" name="lang[]" value="chinese">Chinese</label>
                </div>
                <div class="mb-3">
                    <label for="country">Country</label>
                    <select name="country" id="country" class="form-control">
                        <option disabled selected>---Select country---</option>
                        <option value="nepal">Nepal</option>
                        <option value="china">China</option>
                        <option value="us">US</option>
                    </select>
                </div>
                <div class="mb-3">
                   <button class="btn btn-success">Add Record</button>
                </div>

            </form>

        </div>
        <div class="col-md-8">
            <h1>My name is: ?</h1>

        </div>
    </div>
</div>

</body>
</html>