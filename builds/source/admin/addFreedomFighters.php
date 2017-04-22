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
    <title>Add Freedom Fighters</title>
</head>
<body>
<?php
include "header.php";
?>


<div id="page">
    <!-- start content -->
    <div id="contentMine">
        <div class="post">
            <h1 class="title text-center">Add New Freedom Fighters</h1>
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
                            <form action="processAddFreedomFighters.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="fullname">Freedom Fighter Name : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                    class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="freedom fighter name"
                                                   type='text' name='freedomFighterName'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Freedom Fighter gender : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-dollar"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="gender" required type='text'
                                                   name='gender'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Date Of Birth : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="date of birth"
                                                   type='date' required name='dateOfBirth'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">Date Of Martyrdom : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-weixin"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="date of martyrdom"
                                                   type='date' name='dateOfMartyrdom'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">Country : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-compress"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="country"
                                                   type='text' name='country'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Fathers Name : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="father name"
                                                   type='text' required name='fatherName'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">Mother Name : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-weixin"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="mother name"
                                                   type='text' name='motherName'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">Freedom Fighter Type : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-compress"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="freedom fighter type"
                                                   type='text' name='freedomFighterType'>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="username">Gallantry award type : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"><i
                                                        class="fa fa-dollar"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="gallantry award type"
                                                   required type='text'
                                                   name='gallantryAwardType'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Gallantry Received date :: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="gallantry received date"
                                                   type='date' required name='gallantryReceivedDate'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">Road no : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-weixin"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="road no"
                                                   type='text' name='roadNo'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">House no : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-compress"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="house no"
                                                   type='text' name='houseNo'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">house name : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="house name"
                                                   type='text' required name='houseName'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">flat no : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-weixin"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="flat no"
                                                   type='text' name='flatNo'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">Zip code : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-compress"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="zip code"
                                                   type='text' name='zipCode'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">district : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-weixin"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="district"
                                                   type='text' name='district'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">Post code : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-compress"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="post code"
                                                   type='text' name='postCode'>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label style="font-size: 18px;" for="bookImage">Upload Freedom Fighter Image</label><br>
                                    <input type='file' name='freedomFighterImage'>
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


