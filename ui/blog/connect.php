<?php



function returnConnectionName()
{
    $dbhost="localhost";
    $dbuser="root";
    $dbpassword="vishraman";
    $dbname="blog";

    $con= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
    if(mysqli_connect_errno())
    {
        die("datbase coonection failed" . mysqli_connect_error() );
    }
    else
    {
        return $con;
    }

}

?>