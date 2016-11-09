<?php
session_start();
require "connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php
if(is_null($_SESSION['username']))
{
    header("Location: blogwithoutlogin.php");
}


?>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>Vishal Raman's Blog</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#section1">Home</a></li>
                <li><form action="submit_comment.php" method="post">
                        <input type="submit" name="logout" value="logout"/>
                    </form></li>

            </ul><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
            </div>
        </div>

        <div class="col-sm-9">
            <h4><small>RECENT POSTS</small></h4>
            <hr>
            <h2>I Love Food</h2>
            <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
            <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
            <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <br><br>

            <h4><small>RECENT POSTS</small></h4>
            <hr>
            <h2>Officially Blogging</h2>
            <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
            <h5><span class="label label-success">Lorem</span></h5><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <hr>

            <h4>Leave a Comment:</h4>
            <form role="form" action="submit_comment.php" method="post">
                <div class="form-group">
                    <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
                    <textarea name="comment_area" value="" class="form-control" rows="3" required></textarea>
                </div>
                <input type="submit" value="Comment" name="press_comment" class="btn btn-success"/>
            </form>
            <br><br>

            <p><span class="badge">
                    <?php
                    $con=returnConnectionName();
                    $query= "SELECT COUNT(*) FROM comments_blog";
                    $result= mysqli_query($con,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row['COUNT(*)']

                    ?>
                </span> Comments:</p><br>

            <div class="row">
                <?php

                $con=returnConnectionName();
                $query= "SELECT * FROM comments_blog ORDER BY Ctime DESC;";
                $result= mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0)
                {
                    while ( $row=mysqli_fetch_assoc($result))
                    {
                        $username=$row['username'];
                        $comment=$row['comment'];
                        $time=$row['Ctime'];

                ?>
                <div class="col-sm-2 text-center">
                    <img src="../images/user.png" class="img-circle" height="65" width="65" alt="">
                </div>
                <div class="col-sm-10">
                    <h4><?php echo $username ;?> <small><?php echo $time ;?></small></h4>
                    <p><?php echo $comment ;?></p>
                    <br>
                </div>
                <?php
                    }

                }

                ?>

            </div>
        </div>
    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>
