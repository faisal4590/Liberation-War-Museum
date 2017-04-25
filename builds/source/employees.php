<?php

/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/21/2017
 * Time: 11:10 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style type="text/css">
        img:hover
        {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    </style>
</head>
<body>
<?php
include "headerAdmin.php";
?>

<section id="employees" style="font-family: comic sans ms, Merriweather, Helvetica, sans-serif">
    <div class="container">
        <h1 class="text-center">Employees</h1>
        <table class="table">
            <caption class="text-center" style="text-align: center;">Employee Information</caption>
            <thead>
            <tr>
                <th scope="column" style="text-align: center;">Name</th>
                <th scope="column" style="text-align: center;">Religion</th>
                <th scope="column" style="text-align: center;">Date Of Birth</th>
                <th scope="column" style="text-align: center;">Education Background</th>
                <th scope="column" style="text-align: center;">Address</th>
                <th scope="column" style="text-align: center;">Class</th>
                <th scope="column" style="text-align: center;">Father's Name</th>
                <th scope="column" style="text-align: center;">Mother's Name</th>
                <th scope="column" style="text-align: center;">Age</th>
                <th scope="column" style="text-align: center;">Working Hour </th>
                <th scope="column" style="text-align: center;">Blood Group</th>
                <th scope="column" style="text-align: center;">Salary</th>
                <th scope="column" style="text-align: center;">Image</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <?php
                $conn = oci_connect("system", "faisal4590", "localhost/faisal");
/*                $stid = oci_parse($conn, 'SELECT EMPLOYEE_NAME,EMPLOYEE_RELIGION,
                EMPLOYEE_DOB, EMPLOYEE_SSC_GPA, EMPLOYEE_ROAD_NO, 
                EMPLOYEE_CLASS, EMPLOYEE_FATHERS_NAME,EMPLOYEE_MOTHERS_NAME,
                EMPLOYEE_WORKING_HOUR_STARTS  FROM employee');*/

                $stid = oci_parse($conn,"select * from EMPLOYEE");
                oci_execute($stid);
                $i = 0;
                while (($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) != false)
                {
                    //Calculating Employee Age
                    $date = new DateTime($row['EMPLOYEE_DOB']);
                    $now = new DateTime();
                    $interval = $now->diff($date)->y;
                    /*echo "<pre>";n
                    print_r($row);
                    echo "</pre>";*/

                    $workingHourStarts = date('H:i A', strtotime($row['EMPLOYEE_WORKING_HOUR_STARTS']));
                    $workingHourEnds = date('H:i A', strtotime($row['EMPLOYEE_WORKING_HOUR_ENDS']));

                    var_dump($workingHourStarts);
                    var_dump($workingHourEnds);
                    var_dump($row['EMPLOYEE_WORKING_HOUR_STARTS']);
                    var_dump($row['EMPLOYEE_WORKING_HOUR_ENDS']);

                    echo '<tr>';

                    echo '<th scope="row">' . $row['EMPLOYEE_NAME'] . '</th>';
                    echo '<td scope="row">' . $row['EMPLOYEE_RELIGION'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_DOB'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_SSC_GPA'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_ROAD_NO'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_CLASS'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_FATHERS_NAME'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_MOTHERS_NAME'] . '</td>';
                    echo '<td scope="row">' . $interval . '</td>';///employee age

                    echo '<td scope="row">'. $workingHourStarts . ' - '. $workingHourEnds. '</td>';
                    echo '<td scope="row">'. $row['BLOOD_GROUP'] . '</td>';
                    echo '<td scope="row">'. $row['SALARY'] . '</td>';




                    /*echo '<td scope="row"> <img  style="float: left; border-radius: 50%;
                     -webkit-transition: -webkit-transform .8s ease-in-out;
                     transition: transform .8s ease-in-out;"
                 height="200" width="200"
                 src="admin/images/employee_images/' . $row['EMPLOYEE_IMAGE_NAME'] . ' " alt="Kamla 01"> ' . '</td>';
                */    echo '</tr>';
                }

                oci_free_statement($stid);
                ?>
            </tr>
            </tbody>
        </table>
    </div>
</section>

<?php
include "includes/footer.php";
?>

<!--WOW js activator-->

<script src="js/wow.js"></script>
<script>
    new WOW().init();
</script>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/moveToTop.js"></script>
</body>
</html>


