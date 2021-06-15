<?php

$name = $email = $gender = $language = $country = '';

$errors = [
    'name' => '',
    'email' => '',
    'gender' => '',
    'language' => '',
    'country' => ''
];


$oldValue = [
    'name' => '',
    'email' => '',
    'gender' => '',
    'language' => '',
    'country' => ''
];


if (!empty($_POST)) {


    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            $errors[$key] = "{$key} filed is required";
        } else {
            $oldValue[$key] = $value;
        }
    }

    if (empty($_POST['gender'])) {
        $errors['gender'] = "Gender filed is required";
    } else {
        $oldValue['gender'] = $_POST['gender'];
    }

    if (empty($_POST['lang'])) {
        $errors['language'] = "Language filed is required";
    }


    if (!array_filter($errors)) {
        echo "no error";

    }

//    if (empty($_POST['name'])) {
//        $errors['name'] = 'Enter name';
//    }
//    if (empty($_POST['email'])) {
//        $errors['email'] = 'Enter email';
//    }

//
//    $name = $_POST['name'];
//    $email = $_POST['email'];
////    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
//    $gender = isset($_POST['gender']) ?? '';
//    $language = isset($_POST['lang']) ? implode(',', $_POST['lang']) : '';
//    $country = isset($_POST['country']) ? $_POST['country'] : '';
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
                    <label for="name">Name:
                        <a style="color: red;"><?= $errors['name'] ?></a></label>
                    <input type="text" name="name"
                           value="<?= $oldValue['name'] ?>" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email
                        <a style="color: red;"><?= $errors['email'] ?></a>
                    </label>
                    <input type="text" name="email"
                           value="<?= $oldValue['email'] ?>"
                           class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="gender">Gender:
                        <a style="color: red;"><?= $errors['gender'] ?></a>
                    </label>
                    <br>
                    <label><input type="radio" name="gender" value="male"
                            <?= $oldValue['gender'] == 'male' ? 'checked' : '' ?>>Male</label>
                    <label><input type="radio" name="gender" value="female"
                            <?= $oldValue['gender'] == 'female' ? 'checked' : '' ?>
                        >Female</label>
                </div>
                <div class="form-group">
                    <label for="language">Language:
                        <a style="color: red;"><?= $errors['language'] ?></a>
                    </label>
                    <label><input type="checkbox" name="lang[]" value="nepali">Nepali</label>
                    <label><input type="checkbox" name="lang[]" value="english">English</label>
                    <label><input type="checkbox" name="lang[]" value="chinese">Chinese</label>
                </div>
                <div class="mb-3">
                    <label for="country">Country:
                        <a style="color: red;"><?= $errors['country'] ?></a>
                    </label>
                    <select name="country" id="country" class="form-control">
                        <option value="" selected>---Select country---</option>
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
            <h1>My name is: <?= $name; ?>
                <h1>Email: <?= $email; ?>
                    <h1>Gender: <?= $gender; ?>
                        <h1>Language: <?= $language; ?>
                            <h1>Country: <?= $country; ?>

        </div>
    </div>
</div>

</body>
</html>