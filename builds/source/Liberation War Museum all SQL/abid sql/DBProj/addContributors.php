<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/16/2017
 * Time: 9:34 PM
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Contributors</title>
</head>
<body>
<?php
include "header.php";
?>


<div id="page">
    <!-- start content -->
    <div id="contentMine">
        <div class="post">
            <h1 class="title text-center">Add New Contributors</h1>
            <div class="entry">
                <br><br>
                <?php
                //error message for registration
                if (isset($_GET['error']))
                {
                    echo '<font color="red">' . $_GET['error'] . '</font>';
                    echo '<br><br>';
                }

                //error message for invalid user
                if (isset($_GET['errorinvaliduser']))
                {
                    echo '<font color="red">' . $_GET['errorinvaliduser'] . '</font>';
                    echo '<br><br>';
                }

                //success message for registration
                if (isset($_GET['ok']))
                {
                    echo '<p style="font-size: 18px;
                        font-weight: bold; text-align: center;
                        color: limegreen;
                        ">Data Successfully Inserted.</p>';
                    echo '<br><br>';
                }

                ?>

                <!--
                     This is bootstrap form template created by Optimized faisal.
                     To use this form template, bootstrap and font-awesome must be include in the project and the custom
                     css for form field must be loaded....
                -->
                <div class="container wow rotateInDownLeft" data-wow-delay="0.35s" style="max-width: 500px;visibility: visible;
                            animation-delay: 0.35s; animation-name: rotateInDownLeft; ">
                    <div class="row">
                        <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8">
                            <form action="processAddArt.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="fullname">Contributor's Name : </label> 
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                    class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="contributor name " 
                                                   type='text' name='contributorName'>   
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Contrubitor's Date of Birth : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-dollar"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="contrubitor DOB " required type='date'
                                                   name='contrubitorDOB '>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Organization Name : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="organization name "
                                                   type='text' required name='organizationName'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Profession  : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="profession"
                                                   type='text' required name='profession'>
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="password">Contribution Type   : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="contribution type"
                                                   type='text' required name='contributionType'>
                                        </div>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label for="password">Contributor House No   : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="contributor house no"
                                                   type='text' required name='contributorHouseNo'>
                                        </div>
                                    </div>
                                </div>
																
								<div class="form-group">
                                    <label for="password">Contributor House Name   : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="contributor house name"
                                                   type='text' required name='contributorHouseName'>
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="password">Contributor Flat No   : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="contributor flat no"
                                                   type='text' required name='contributorFlatNo'>
                                        </div>
                                    </div>
                                </div>
																
								<div class="form-group">
                                    <label for="password">Contributor Road No   : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="contributor road no"
                                                   type='text' required name='contributorRoadNo'>
                                        </div>
                                    </div>
                                </div>
								
								
																
								<div class="form-group">
                                    <label for="password">Contributor district name   : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="contributor district name"
                                                   type='text' required name='contributorDistrictName'>
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="password">Contributor Zip Code   : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="contributor zip code"
                                                   type='text' required name='contributorZipCode'>
                                        </div>
                                    </div>
                                </div>
								



                                <div class="form-group">
                                    <label style="font-size: 18px;" for="bookImage">Upload Contributors Image</label><br>
                                    <input type='file' name='ContributorsImage'>
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-lg btn-success" type='submit' value="Insert">

                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


</body>
</html>


