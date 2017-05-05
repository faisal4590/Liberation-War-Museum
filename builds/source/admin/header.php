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
                        <li><a href="showUsers.php">users</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Insert 1<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="addEmployee.php" target="_blank">Add Employee</a></li>
                                <li class="divider"></li>
                                <li><a href="addArtists.php" target="_blank">Add Artists</a></li>
                                <li class="divider"></li>
                                <li><a href="addWeapon.php">Add Weapons</a></li>
                                <li class="divider"></li>
                                <li><a href="addFreedomFighters.php" target="_blank">Add Freedom Fighters</a></li>
                                <li class="divider"></li>
                                <li><a href="addFreedomFightersChildren.php" target="_blank">Add Freedom Fighters Children</a></li>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Insert 2<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="addForces.php" target="_blank">Add Forces</a></li>
                                <li class="divider"></li>
                                <li><a href="addForcesBase.php" target="_blank">Add Forces Base</a></li>
                                <li class="divider"></li>
                                <li><a href="addForceDivision.php" target="_blank">Add Force Division</a></li>
                                <li class="divider"></li>
                                <li><a href="addForceDivision.php" target="_blank">Add Force Division</a></li>
                                <li class="divider"></li>
                                <li><a href="addBattles.php" target="_blank">Add Battles</a></li>
                                <li class="divider"></li>
                                <li><a href="addGallery.php" target="_blank">Add Gallery</a></li>
                                <li class="divider"></li>
                                <li><a href="addContributors.php" target="_blank">Add Contributors</a></li>
                                <li class="divider"></li>
                                <li><a href="addDocuments.php" target="_blank">Add Documents</a></li>
                                <li class="divider"></li>
                                <li><a href="addExibition.php" target="_blank">Add Exhibition</a></li>
                                <li class="divider"></li>
                                <li><a href="addHumanRemains.php" target="_blank">Add Human Remains</a></li>
                                <li class="divider"></li>

                                <li><a href="addDonors.php" target="_blank">Add Donors</a></li>
                                <li class="divider"></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Insert(Rel)<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="addArt_gallery.php" target="_blank">Add Art And Gallery</a></li>
                                <li class="divider"></li>
                                <li><a href="addArtifact_contributors.php" target="_blank">Add Artifact And Contributors</a></li>
                                <li class="divider"></li>
                                <li><a href="addArtifact_Gallery.php" target="_blank">Add Artifact And Gallery</a></li>
                                <li class="divider"></li>
                                <li><a href="addForceArtifact_images.php" target="_blank">Add Artifact And Images</a></li>
                                <li class="divider"></li>
                                <li><a href="addBattles_artifacts.php" target="_blank">Add Battles And Artifacts</a></li>
                                <li class="divider"></li>
                                <li><a href="addDonors_account.php" target="_blank">Add Donors And Account</a></li>
                                <li class="divider"></li>
                                <li><a href="addDonors_art.php" target="_blank">Add Donors And Art</a></li>
                                <li class="divider"></li>
                                <li><a href="addEmployee_account.php" target="_blank">Add Employee And Account(prb)</a></li>
                                <li class="divider"></li>
                                <li><a href="addEmployee_donor.php" target="_blank">Add Employee And Donor</a></li>
                                <li class="divider"></li>
                                <li><a href="addEmployee_gallery.php" target="_blank">Add Employee And Gallery</a></li>
                                <li class="divider"></li>
                                <li><a href="addEmployee_images.php" target="_blank">Add Employee And Images</a></li>
                                <li class="divider"></li>
                                <li><a href="addEmployee_visitors.php" target="_blank">Add Employee And Visitor</a></li>
                                <li class="divider"></li>
                                <li><a href="addExhibition_contributors.php" target="_blank">Add Exhibition And Contributors</a></li>
                                <li class="divider"></li>
                                <li><a href="addForces_battle.php" target="_blank">Add Forces And Battle</a></li>
                                <li class="divider"></li>
                                <li><a href="addForces_sector.php" target="_blank">Add Forces And Sector</a></li>
                                <li class="divider"></li>
                                <li><a href="addWarCriminalImages.php" target="_blank">Add War Criminal And Images</a></li>
                                <li class="divider"></li>
                                <li><a href="addSectorAreaCovered.php" target="_blank">Add Sector Area Covered</a></li>
                                <li class="divider"></li>
                                <li><a href="addFreedomFighters_art.php" target="_blank">Add Freedom Fighters And Art</a></li>
                                <li class="divider"></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Insert(Rel2)<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="addArt_gallery.php" target="_blank">Add Art And Gallery</a></li>
                                <li class="divider"></li>
                                <li><a href="addArtifact_contributors.php" target="_blank">Add Artifact And Contributors</a></li>
                                <li class="divider"></li>
                                <li><a href="addArtifact_Gallery.php" target="_blank">Add Artifact And Gallery</a></li>
                                <li class="divider"></li>
                                <li><a href="addForceArtifact_images.php" target="_blank">Add Artifact And Images</a></li>
                                <li class="divider"></li>
                                <li><a href="addBattles_artifacts.php" target="_blank">Add Battles And Artifacts</a></li>
                                <li class="divider"></li>
                                <li><a href="addDonors_account.php" target="_blank">Add Donors And Account</a></li>
                                <li class="divider"></li>
                                <li><a href="addDonors_art.php" target="_blank">Add Donors And Art</a></li>
                                <li class="divider"></li>
                                <li><a href="addEmployee_account.php" target="_blank">Add Employee And Account(prb)</a></li>
                                <li class="divider"></li>
                                <li><a href="addEmployee_donor.php" target="_blank">Add Employee And Donor</a></li>
                                <li class="divider"></li>
                                <li><a href="addEmployee_gallery.php" target="_blank">Add Employee And Gallery</a></li>
                                <li class="divider"></li>
                                <li><a href="addEmployee_images.php" target="_blank">Add Employee And Images</a></li>
                                <li class="divider"></li>
                                <li><a href="addEmployee_visitors.php" target="_blank">Add Employee And Visitor</a></li>
                                <li class="divider"></li>
                                <li><a href="addExhibition_contributors.php" target="_blank">Add Exhibition And Contributors</a></li>
                                <li class="divider"></li>
                                <li><a href="addForces_battle.php" target="_blank">Add Forces And Battle</a></li>
                                <li class="divider"></li>
                                <li><a href="addForces_sector.php" target="_blank">Add Forces And Sector</a></li>
                                <li class="divider"></li>
                                <li><a href="addWarCriminalImages.php" target="_blank">Add War Criminal And Images</a></li>
                                <li class="divider"></li>
                                <li><a href="addWar_Criminal_Sector.php" target="_blank">Add War Criminal And Sector</a></li>
                                <li class="divider"></li>
                                <li><a href="addFreedomFighters_art.php" target="_blank">Add Freedom Fighters And Art</a></li>
                                <li class="divider"></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Insert(Rel3)<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="addMartyrs_Artifacts.php" target="_blank">Add Martyrs And Artifacts</a></li>
                                <li class="divider"></li>
                                <li><a href="addMartyrs_Art.php" target="_blank">Add Martyrs And Art</a></li>
                                <li class="divider"></li>
                                <li><a href="addGallery_Location.php" target="_blank">Add Gallery And Location</a></li>
                                <li class="divider"></li>
                                <li><a href="addFreedom_Fighters_Sector.php" target="_blank">Add Freedom Fighter And Sectors</a></li>
                                <li class="divider"></li>
                                <li><a href="addFreedom_Fighters_Images.php" target="_blank">Add Freedom Fighters And Images</a></li>
                                <li class="divider"></li>
                                <li><a href="addFreedom_Fighters_Forces.php" target="_blank">Add Freedom Fighter And Force</a></li>
                                <li class="divider"></li>
                                <li><a href="addFreedom_Fighters_Battles.php" target="_blank">Add Freedom Fighter And Battle</a></li>
                                <li class="divider"></li>
                                <li><a href="addmartyrs_war_criminal.php" target="_blank">Add Martyrs And War Criminal</a></li>
                                <li class="divider"></li>
                                <li><a href="addmartyrs_sector.php" target="_blank">Add Martyrs And Sectors</a></li>
                                <li class="divider"></li>
                                <li><a href="addmartyrs_battles.php" target="_blank">Add Martyrs And Battles</a></li>
                                <li class="divider"></li>
                                <li><a href="addsector_battles.php" target="_blank">Add Sectors And Battles</a></li>
                                <li class="divider"></li>
                                <li><a href="addpolitical_leaders_images.php" target="_blank">Add Political Leaders And Images</a></li>
                                <li class="divider"></li>
                                <li><a href="addpolitical_leaders_artifacts.php" target="_blank">Add political Leaders And Artifact</a></li>
                                <li class="divider"></li>
                                <li><a href="addpolitical_leaders_martyrs.php" target="_blank">Add Political Leader And Martyrs</a></li>
                                <li class="divider"></li>
                                <li><a href="addpolitical_leaders_art.php" target="_blank">Add Political Leaders And Arts</a></li>
                                <li class="divider"></li>

                                <li><a href="addvisitors_donors.php" target="_blank">Add Visitors And Donors</a></li>
                                <li class="divider"></li>

                                <li><a href="addvisitors_exhibition.php" target="_blank">Add Visitor And Exitbition</a></li>
                                <li class="divider"></li>

                                <li><a href="addwar_criminal_forces.php" target="_blank">Add War Criminal And Forces</a></li>
                                <li class="divider"></li>

                                <li><a href="addArtAndArtist.php" target="_blank">Add Art And Artist</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Update<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="updateEmployee.php" target="_blank">Update Employee</a></li>
                                <li class="divider"></li>
                                <li><a href="updateArtists.php" target="_blank">Update Artists</a></li>
                                <li class="divider"></li>
                                <li><a href="updateWeapon.php">Update Weapons</a></li>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Delete Data<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="deleteEmployee.php">Delete Employee Data</a></li>
                                <li class="divider"></li>
                                <li><a href="deleteDocuments.php">Delete Documents Data</a></li>
                                <li class="divider"></li>
                                <li><a href="deleteUsersData.php">Delete Users Data</a></li>
                                <li class="divider"></li>
                                <li><a href="deleteMartyrs.php">Delete Martyrs Data</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Delete Freedom Fighters</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Delete bla bla bla</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search" action="processSearch.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by employee name"
                                   name="searchEmployee">
                        </div>
                        <input type="submit" class="btn btn-info" value="Submit" />
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
