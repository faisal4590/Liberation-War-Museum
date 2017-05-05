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
    <title>Add Artists</title>
</head>
<body>
<?php
include "header.php";
?>


<div id="page">
    <!-- start content -->
    <div id="contentMine">
        <div class="post">
            <h1 class="title text-center">Add New Artists</h1>
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
                            <form action="processAddArtist.php" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="fullname">Artist Name : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                        class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="artist name"
                                                   type='text' name='artistName'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Artist Date Of Birth : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                        class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder=""
                                                   type='date' name='artistDOB'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Artist date of death : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"><i
                                                        class="fa fa-user"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="artist date of death" type='date'
                                                   name='artistDateOfDeath'>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="fullname">Artist Country : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                        class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="artist country"
                                                   type='text' name='artistCountry'>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="fullname">Artist Art Place : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                        class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="artist art place"
                                                   type='text' name='artistArtPlace'>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label style="font-size: 18px;" for="bookImage">Upload Artist Image</label><br>
                                    <input type='file' name='artistImage'>
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


