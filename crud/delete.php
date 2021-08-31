<?php

$connection = mysqli_connect('127.0.0.1', 'root', 'admin', 'college');


$id = $_GET['sid'];

$delQuery = "DELETE FROM students WHERE id=" . $id;

$res = mysqli_query($connection, $delQuery);

if ($res) {
    header('Location:index.php');
} else {
    header('Location:index.php');
}

