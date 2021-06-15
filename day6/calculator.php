<?php

session_start();


print_r($_SESSION['users']);


echo "<hr>";
echo $_SESSION['x'];
echo "<hr>";
echo $_SESSION['y'];

//unset($_SESSION['x']);

session_destroy();


