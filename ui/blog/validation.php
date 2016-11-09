<?php
require "helper.php";
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    check_login($email,$password);
}
else if(isset($_POST['signup']))
{
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['confirmpassword'];
    $phone_no=$_POST['phone_no'];
    do_signup($email,$username,$password,$phone_no);




}

else
{
    header("Location: ../index.php"); /* Redirect browser */
    exit();
}

?>