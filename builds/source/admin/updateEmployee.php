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
    <title>Add Arts</title>
</head>
<body>
<?php
include "header.php";
?>


<div id="page">
    <!-- start content -->
    <div id="contentMine">
        <div class="post">
            <h1 class="title text-center">Update Employee</h1>
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
                            <form action="processUpdateEmployee.php" method="post" enctype="multipart/form-data">
                                <?php
                                $conn = oci_connect("system", "faisal4590", "localhost/faisal");
                                $stid = oci_parse($conn, 'SELECT * FROM EMPLOYEE');

                                oci_execute($stid);

                                $var1 = 0;
                                while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS))
                                {
                                    $temp[$var1++] = $row['EMPLOYEE_ID'];
                                }
                                oci_close($conn);
                                ?>
                                <div class="form-group">
                                    <label for="fullname">SELECT EMPLOYEE ID : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                        class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <select name="employeeID" class="form-control" style="height: 30px;">
                                                <?php
                                                for ($p = 0; $p < $var1; $p++)
                                                {
                                                    echo '<option>' . " {$temp[$p]} " . '</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Update Employee Name : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                        class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="Employee Name"
                                                   type='text' size="30" maxlength="30"
                                                   name='employeeName'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Update Employee Religion : </label>
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
                                    <label for="password">Update Employee Date Of Birth : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eye"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="employee date of births"
                                                   type='date' required name='employeeDOB' size="30">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">Update Employee SSC GPA : </label>
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
                                    <label for="repeatPassword">Update Employee HSC GPA : </label>
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
                                    <label for="repeatPassword">Update Employee GRADUATE CGPA : </label>
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
                                    <label for="repeatPassword">Update Employee POST GRADUATE CGPA : </label>
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
                                    <label for="repeatPassword">Update Employee Road no : </label>
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
                                    <label for="repeatPassword">Update Employee House no : </label>
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
                                    <label for="repeatPassword">Update Employee Flat no : </label>
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
                                    <label for="repeatPassword">Update Employee Zip code : </label>
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
                                    <label for="repeatPassword">Update Employee District: </label>
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
                                    <label for="repeatPassword">Update Employee Post Code: </label>
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
                                    <label for="repeatPassword">Update Employee Class: </label>
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
                                    <label for="repeatPassword">Update Employee Fathers Name: </label>
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
                                    <label for="repeatPassword">Update Employee Mothers Name: </label>
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
                                    <label for="repeatPassword">Update Employee Fingerprint ID: </label>
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
                                    <label for="repeatPassword">Update Employee Working Hour starts: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="employee working hour starts"
                                                   type='datetime-local' required name='employeeWorkingHourStarts'
                                                   size="30">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repeatPassword">Update Employee Working Hour ends: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="employee working hour ends"
                                                   type='datetime-local' required name='employeeWorkingHourEnds'
                                                   size="30">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="repeatPassword">Update Blood Group : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-database"></i></span>
                                        <div class="icon-addon">
                                            <select name="bloodGroup" style="height: 30px;">
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                                <option>AB+</option>
                                                <option>O-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="repeatPassword">Update Salary : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="employee salary"
                                                   type='text' required name='salary'>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <input class="btn btn-lg btn-danger" type='submit' value="Update">

                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <h1 class="text-center">Employee Info</h1>
    <?php
    $conn = oci_connect("system", "faisal4590", "localhost/faisal");

    $stid = oci_parse($conn, 'SELECT * FROM EMPLOYEE');
    oci_execute($stid);

    echo "<table border='2' bgcolor='#8a2be2' style='margin-bottom: 50px;'>\n";
    while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS))
    {
        echo "<tr style='color:#8a2be2; padding:15px;'>\n";
        foreach ($row as $item)
        {
            echo "<td style='padding: 10px;'>" . $item . "</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";


    oci_close($conn);
    ?>


</body>
</html>


