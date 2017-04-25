<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/9/2017
 * Time: 3:25 PM
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liberation War Museum</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.css">

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
<body>

<header>
    <div class="container" style="width: 100%;">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header header_title">
                    <a class="navbar-brand" href="index.php"><span style="color:#5aff4d">Liberation</span>
                        <span style="color: #ff2e46;">War Museum</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div  class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" >
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="login.php" target="_blank">Login</a></li>
                        <li><a href="developedBy.php" target="_blank">About us</a></li>
                        <li><a href="#jumbotron">Others</a></li>
                        <li><a href="#typography">Bibliography</a></li>
                        <li><a href="#buttons">Martyrs</a></li>
                        <li><a href="#lists">Historical Battles</a></li>
                        <li><a href="#media">Gallery</a></li>
                        <li><a href="employees.php" target="_blank">Employees</a></li>


                    </ul>
                    <form class="navbar-form navbar-right" role="search" action="processSearch.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by employee name"
                                   name="searchEmployee">
                        </div>
                        <input type="submit"  class="btn btn-info" value="Submit" />
                    </form>

                </div><!-- /.navbar-collapse -->

            </nav>

        </div>
    </div>
</header>



<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/hoverMenu.js"></script>

</body>
</html>
