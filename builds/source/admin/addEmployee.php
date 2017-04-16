<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/12/2017
 * Time: 9:45 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Employee</title>
</head>
<body>

<?php
include "header.php";
?>

    <div id="page">
        <!-- start content -->
        <div id="contentMine">
            <div class="post">
                <h1 class="title text-center">Add New Employee</h1>
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
                                <form action="processAddEmployee.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="fullname">Employee Name : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                        class="glyphicon glyphicon-user"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control" placeholder="Employee Name"
                                                       type='text' size="30" maxlength="30" name='employeeName'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Employee Religion : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                        class="fa fa-user"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="Employee Religion" required type='text' size="30"
                                                       maxlength="30"
                                                       name='employeeReligion'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Employee Date Of Birth : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-eye"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control" placeholder="employee date of births"
                                                       type='date' required name='employeeDOB' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee SSC GPA : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee ssc gpa"
                                                       type='text' required name='employeeSSCGPA' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee HSC GPA : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee hsc gpa"
                                                       type='text' required name='employeeHSCGPA' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee GRADUATE CGPA : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee graduate cgpa"
                                                       type='text' required name='employeeGraduateCGPA' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee POST GRADUATE CGPA : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee post graduate cgpa"
                                                       type='text' required name='employeePostGraduateCGPA' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee Road no : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee road no"
                                                       type='text' required name='employeeRoadNo' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee House no : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee house no"
                                                       type='text' required name='employeeHouseNo' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee Flat no : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee flat no"
                                                       type='text' required name='employeeFlatNo' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee Zip code : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="zip code"
                                                       type='text' required name='employeeZipCode' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee District: </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee district"
                                                       type='text' required name='employeeDistrict' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee Post Code: </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee post code"
                                                       type='text' required name='employeePostCode' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee Class: </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee class"
                                                       type='text' required name='employeeClass' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee Fathers Name: </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee father code"
                                                       type='text' required name='employeeFatherName' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee Mothers Name: </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee mother code"
                                                       type='text' required name='employeeMotherName' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee Fingerprint ID: </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee fingerprint id"
                                                       type='text' required name='employeeFingerPrintID' size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee Working Hour starts: </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee working hour starts"
                                                       type='time' required name='employeeWorkingHourStarts'
                                                       size="30">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="repeatPassword">Employee Working Hour ends: </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <div class="icon-addon">
                                                <input class="form-control"
                                                       placeholder="employee working hour ends"
                                                       type='time' required name='employeeWorkingHourEnds'
                                                       size="30">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label style="font-size: 18px;" for="bookImage">Upload Employee Image</label><br>
                                        <input type='file' name='employeeImage'>
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
