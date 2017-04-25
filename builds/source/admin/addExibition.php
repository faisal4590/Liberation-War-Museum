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
    <title>Add Exibition</title>
</head>
<body>
<?php
include "header.php";
?>


<div id="page">
    <!-- start content -->
    <div id="contentMine">
        <div class="post">
            <h1 class="title text-center">Add New Exibition</h1>
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
                            <form action="processAddExibition.php" method="post" enctype="multipart/form-data">
                                
								<div class="form-group">
                                    <label for="password">Exibition No : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="exibition no"
                                                   type='text' required name='exibitionNo'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Exibition Name : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="exibition name"
                                                   type='text' required name='exibitionName'>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="password">Exibition Sponsors : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="exibition sponsors"
                                                   type='text' required name='exibitionSponsors'>
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="username">Exibition Date   : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-dollar"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="exibition date" required type='date'
                                                   name='exibitionDate'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Exibition Start Time : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="exibition start time "
                                                   type='datetime-local' required name='exibitionStartTime'>
                                        </div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="password">Exibition Finishing Time : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="exibition finishing time "
                                                   type='datetime-local' required name='exibitionFinishingTime'>
                                        </div>
                                    </div>
                                </div>
								
								
								<div class="form-group">
                                    <label for="password">Exibition Type : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="exibition type"
                                                   type='text' required name='exibitionType'>
                                        </div>
                                    </div>
                                </div>
								
								
								<div class="form-group">
                                    <label for="password">Exibition Price : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="exibition price"
                                                   type='number' required name='exibitionPrice'>
                                        </div>
                                    </div>
                                </div>
								
			

								


                                <div class="form-group">
                                    <label style="font-size: 18px;" for="bookImage">Upload Exibition Image</label><br>
                                    <input type='file' name='ExibitionImage'>
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


