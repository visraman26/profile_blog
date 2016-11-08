<!DOCTYPE html>
<html lang="en">
<head>

    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>




</head>
<body>


<!-- Navbar -->

<div id="up">
</div>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="blog/blog.php">BLOG</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#who">WHO</a></li>
                <li><a href="#what">WHAT</a></li>
                <li><a href="#where">WHERE</a></li>
                <li><a  data-toggle="modal" href="#login" data-dismiss="modal">LOGIN</a> </li>
            </ul>
        </div>
    </div>
</nav>
<!---modal-->
<div class="container remove">
    <!-- Trigger the modal with a button -->


    <!-- Modal -->
    <div class="modal fade" id="login" role="dialog">

        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Login</h4>
                </div>
                <div class="modal-body">
                    <form action= "../ui/blog/validation.php" method="post">
                        EMAIL ID <center><input   type="email" name="email" value=""  size="25" ></center></br>
                        PASSWORD <center><input   type="password" name="password" value=""  size="25" ></center></br>
                        <input  type="submit" name="login" value="login" /></br></br>
                    </form>

                </div>

            </div>
        </div>
    </div>

</div>

<!-- First Container -->
<div id="who" class="container-fluid bg-1 text-center">
    <h3 class="margin">Who Am I?</h3>
    <img src="images/my1.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
    <h3>I'm am Vishal Kumar Raman</h3>
</div>

<!-- Second Container -->
<div id="what" class="container-fluid bg-2 text-center">
    <h3 class="margin">What Am I?</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <a href="#" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-search"></span> Search
    </a>
</div>

<!-- Third Container (Grid) -->
<div id="where" class="container-fluid bg-3 text-center">
    <h3 class="margin">Where To Find Me?</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            <div id="map1" style="width:400px;height:300px"></div>


        </div>
        <div class="col-sm-4">
            <p>Hometown : Kanpur <br>
                State : Uttar pradesh<br>
                Pincode :208017

            </p>

            <div id="map2" style="width:400px;height:300px"></div>

        </div>
        <div class="col-sm-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            <div id="map3" style="width:400px;height:300px"></div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <p>Bootstrap Theme Made By <a href="http://www.w3schools.com">www.w3schools.com</a></p>
</footer>
<div class="fixed_at_bottom">
    <a href="#up">
        <span class="glyphicon glyphicon-arrow-up"></span>
    </a>

</div><br>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap1">
</script>
<!--<script src="https://maps.googleapis.com/maps/api/js?callback=myMap1">-->
<!--//</script>-->



</body>
</html>
