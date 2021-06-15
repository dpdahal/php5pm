<?php
session_start();


$data = [
    "name" => 'ram',
    "age" => 20,
    "phone" => 98798
];


$_SESSION['users'] = $data;

$x=10;
$y=20;

$_SESSION['x']=$x;
$_SESSION['y']=$y;

