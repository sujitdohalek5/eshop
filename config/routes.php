<?php



if($_SERVER['REQUEST_URI'] == '/login')
{
    include 'login.php';
    die();
}
else
{
    include 'mvc/controller/user.php';
    die();
}