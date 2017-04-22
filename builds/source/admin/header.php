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

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Insert<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="addEmployee.php" target="_blank">Add Employee</a></li>
                                <li class="divider"></li>
                                <li><a href="addArtists.php" target="_blank">Add Artists</a></li>
                                <li class="divider"></li>
                                <li><a href="addWeapon.php">Add Weapons</a></li>
                                <li class="divider"></li>
                                <li><a href="addFreedomFighters.php" target="_blank">Add Freedom Fighters</a></li>
                                <li class="divider"></li>
                                <li><a href="addArts.php" target="_blank">Add Arts</a></li>
                                <li class="divider"></li>
                                <li><a href="addPaintings.php" target="_blank">Add Paintings</a></li>
                                <li class="divider"></li>
                                <li><a href="addSculpture.php" target="_blank">Add Sculpture</a></li>
                                <li class="divider"></li>
                                <li><a href="addArtifacts.php" target="_blank">Add Artifacts</a></li>
                                <li class="divider"></li>
                                <li><a href="addWarCriminals.php" target="_blank">Add War Criminals</a></li>
                                <li class="divider"></li>
                                <li><a href="addVisitors.php" target="_blank">Add Visitors</a></li>
                                <li class="divider"></li>
                                <li><a href="addLocation.php" target="_blank">Add Location</a></li>
                                <li class="divider"></li>
                                <li><a href="addAccount.php" target="_blank">Add Account</a></li>
                                <li class="divider"></li>
                                <li><a href="addPoliticalLeaders.php" target="_blank">Add Political Leaders</a></li>
                                <li class="divider"></li>
                                <li><a href="addMartyrs.php" target="_blank">Add Martyrs</a></li>
                                <li class="divider"></li>
                                <li><a href="addSectors.php" target="_blank">Add Sectors</a></li>
                                <li class="divider"></li>
                                <li><a href="addSubsectorCommander.php" target="_blank">Add Sub Sector Commander</a></li>
                                <li class="divider"></li>
                                <li><a href="addSectorAreaCovered.php" target="_blank">Add Sector Area Covered</a></li>
                                <li class="divider"></li>
                                <li><a href="addSculpture.php" target="_blank">Add Sculpture</a></li>
                                <li class="divider"></li>
                                <li><a href="addArtifacts.php" target="_blank">Add Artifacts</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Update<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="addEmployee.php" target="_blank">Update Employee</a></li>
                                <li class="divider"></li>
                                <li><a href="updateArtists.php" target="_blank">Update Artists</a></li>
                                <li class="divider"></li>
                                <li><a href="addWeapon.php">Add Weapons</a></li>
                                <li class="divider"></li>
                                <li><a href="addFreedomFighters.php" target="_blank">Add Freedom Fighters</a></li>
                                <li class="divider"></li>
                                <li><a href="addArts.php" target="_blank">Add Arts</a></li>
                                <li class="divider"></li>
                                <li><a href="addPaintings.php" target="_blank">Add Paintings</a></li>
                                <li class="divider"></li>
                                <li><a href="addSculpture.php" target="_blank">Add Sculpture</a></li>
                                <li class="divider"></li>
                                <li><a href="addArtifacts.php" target="_blank">Add Artifacts</a></li>
                                <li class="divider"></li>
                                <li><a href="addWarCriminals.php" target="_blank">Add War Criminals</a></li>
                                <li class="divider"></li>
                                <li><a href="addVisitors.php" target="_blank">Add Visitors</a></li>
                                <li class="divider"></li>
                                <li><a href="addLocation.php" target="_blank">Add Location</a></li>
                                <li class="divider"></li>
                                <li><a href="addAccount.php" target="_blank">Add Account</a></li>
                                <li class="divider"></li>
                                <li><a href="addPoliticalLeaders.php" target="_blank">Add Political Leaders</a></li>
                                <li class="divider"></li>
                                <li><a href="addMartyrs.php" target="_blank">Add Martyrs</a></li>
                                <li class="divider"></li>
                                <li><a href="addSectors.php" target="_blank">Add Sectors</a></li>
                                <li class="divider"></li>
                                <li><a href="addSubsectorCommander.php" target="_blank">Add Sub Sector Commander</a></li>
                                <li class="divider"></li>
                                <li><a href="addSectorAreaCovered.php" target="_blank">Add Sector Area Covered</a></li>
                                <li class="divider"></li>
                                <li><a href="addSculpture.php" target="_blank">Add Sculpture</a></li>
                                <li class="divider"></li>
                                <li><a href="addArtifacts.php" target="_blank">Add Artifacts</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Delete<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="addEmployee.php">Delete Employee</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Delete Documents</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Delete Freedom Fighters</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Delete bla bla bla</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
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
