<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Vishal Raman
 * Date: 08-Nov-16
 * Time: 1:54 AM
 */

require "connect.php";
$con=returnConnectionName();
    function check_login($email,$password)
    {
        global $con;
        $query= "SELECT * FROM signup WHERE email='$email' AND password='$password'";
        $result= mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_assoc($result);
            $_SESSION['username']=$row['name'];
            header("Location: blog.php"); /* Redirect browser */
            exit();

        }
        else
        {
            echo"<script>alert('Login Unsuccessful');
                window.location='../index.php';
            </script>";

            exit();

        }

    }
function do_signup($email,$username,$password,$phone_no)
{
    global $con;
    $query= "SELECT email,password FROM signup Where email='$email' ";
    $result= mysqli_query($con,$query);



    if(mysqli_num_rows($result)>0)
    {

        echo "<script type='text/javascript'>
						alert('Email already Exists');
						window.location='../index.php';
					</script>";

    }
    else
    {
        $query="INSERT INTO signup (email,`name`,password,phone_no) VALUES ('$email','$username','$password','$phone_no')";
        $result= mysqli_query($con,$query);
        echo "<script type='text/javascript'>
                    alert('signup success');
					window.location='../index.php';
                </script>";
    }


}
    function insertCommentIntoDatabase($username,$comment)
    {
        global $con;
        date_default_timezone_set("Asia/Calcutta");
        $date = date('Y/m/d H:i:sa');
        $query= "INSERT INTO comments_blog(username,comment,Ctime) VALUES('$username','$comment','$date')" ;
        $result= mysqli_query($con,$query);
    }




?>