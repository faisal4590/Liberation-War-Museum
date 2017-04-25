<?php session_start();
/*if(isset($_SESSION['status']))
{
    header('location: index.php');
}*/
/*
 * user logged in obosthay thakle register page e jete parbena..
 * tai redirect kore index page e nie aslam..
 * */
?>

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div id="wholeContainer">
    <?php
    include 'headerAdmin.php';
    ?>
    <!-- start header -->
    <div>
        <div>
            <?php
            //include("includes/menu.inc.php");
            ?>
        </div>
    </div>


    <!-- start page -->
    <div id="sidebar">
        <?php
       // include("includes/search.inc.php");
        ?>
    </div>
    <div id="page">
        <!-- start content -->


        <div id="contentMine">

            <div class="post">
                <h1 class="title text-center">Welcome to Registration.</h1>

                <div class="entry">
                    <br><br>
                    <?php
                    //error message for registration
                    if (isset($_GET['error'])) {
                        echo '<font color="red">' . $_GET['error'] . '</font>';
                        echo '<br><br>';
                    }

                    //error message for invalid user
                    if (isset($_GET['errorinvaliduser'])) {
                        echo '<font color="red">' . $_GET['errorinvaliduser'] . '</font>';
                        echo '<br><br>';
                    }

                    //success message for registration
                    if (isset($_GET['ok'])) {
                        echo '<p style="font-size: 18px;
                        font-weight: bold; text-align: center;
                        color: limegreen;
                        ">You are successfully Registered.</p>';
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
                                <form action="test.php" method="post">
                                    <div class="form-group">
                                        <label for="fullname">Full name : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                    class="glyphicon glyphicon-user"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control" placeholder="your full name"
                                                       type='text' size="30" maxlength="30" name='fnm'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-user"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="your username" required type='text' size="30"
                                                       maxlength="30"
                                                       name='unm'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-eye"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control" placeholder="********"
                                                       type='password' required name='pwd' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Confirm Password : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="********"
                                                       type='password' required name='cpwd' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gender">Your gender : </label>
                                        <div class="radio">
                                            <label>
                                                <!--<input type="radio" value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
                                                <input type="radio" value="Female" name="gender" id='f'><label> Female</label>-->

                                                <input type="radio" value="Male" name="gender" id='m' checked
                                                       title="male">
                                                <span class="cr"><i class="cr-icon fa fa-male"></i></span>
                                                <i></i>
                                                Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="Female" name="gender" id='f'>
                                                <span class="cr"><i class="cr-icon fa fa-female"></i></span>
                                                Female
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       type='email' placeholder="your email" name='mail' size="30"
                                                       required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mobile">Your mobile number : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-phone"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="number must start with 88(8801*********)"
                                                       type='text' maxlength="13" minlength="13" name='contact' size="30" required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="yourCity">Your city : </label>
                                            <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                    class="glyphicon glyphicon-globe"></i></span>
                                                <div class="icon-addon">
                                                    <select class="form-control" name="city">

                                                        <option class="text-info">Dhaka</option>
                                                        <option class="text-info">Chittagong</option>
                                                        <option class="text-info">Rajshahi</option>
                                                        <option class="text-info">Khulna</option>
                                                        <option class="text-info">Barishal</option>
                                                        <option class="text-info">Sylhet</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <p>Already have an account? <a href="login.php">Sign in</a> here</p>
                                        </div>

                                        <input class="btn btn-lg btn-success" type='submit' value="  Sign up ">


                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


        </div>

        <!-- end content -->

        <!-- start sidebar -->

        <!-- end sidebar -->
        <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end page -->

    <!-- start footer -->
    <div id="footer" style="clear:both">
        <?php
        include("includes/footer.php");
        ?>
    </div>
    <!-- end footer -->


</div>



<!--wow js script file-->
<script src="js/wow.js"></script>
<script>
    new WOW().init();
</script>


<!--Move to top code starts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/moveToTop.js"></script>

<!--Move to top code ends-->

</body>
</html>
