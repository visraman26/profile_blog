<?php
require "helper.php";
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    check_login($email,$password);
}
else
{
    header("Location: ../index.php"); /* Redirect browser */
    exit();
}

?>