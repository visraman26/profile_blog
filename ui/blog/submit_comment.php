<?php
/**
 * Created by PhpStorm.
 * User: Vishal Raman
 * Date: 08-Nov-16
 * Time: 10:12 AM
 */
require "helper.php";
if(isset($_POST['press_comment']))
{
    $username=$_POST['username'];
    $comment=$_POST['comment_area'];

    echo $username;
    echo $comment;

    insertCommentIntoDatabase($username,$comment);
    header("Location: blog.php"); /* Redirect browser */
    exit();
}
else if(isset($_POST['logout']))
{

    //unset
    session_unset();
    // destroy the session
    session_destroy();

    echo "<script type='text/javascript'>
                            alert('Logout Successfully');
                            window.location='../index.php';
                 </script>";
}

else
{
    header("Location: ../index.php"); /* Redirect browser */
    exit();
}

?>