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
    <link rel="stylesheet" href="../css/style.css">
    <style type="text/css">
        img:hover
        {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    </style>
</head>
<body>
<section id="employees">
    <div class="container">
        <h1>Employees</h1>
        <table class="table">
            <caption>Employee Information</caption>
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
                <th scope="column" style="text-align: center;">Working Shift</th>
                <th scope="column" style="text-align: center;">Image</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <?php
                $conn = oci_connect("system", "faisal4590", "localhost/faisal");
                $stid = oci_parse($conn, 'SELECT EMPLOYEE_NAME,EMPLOYEE_RELIGION,
                EMPLOYEE_DOB, EMPLOYEE_SSC_GPA, EMPLOYEE_ROAD_NO, 
                EMPLOYEE_CLASS, EMPLOYEE_FATHERS_NAME,EMPLOYEE_MOTHERS_NAME,
                EMPLOYEE_WORKING_HOUR_STARTS,EMPLOYEE_IMAGE_NAME  FROM employee');
                oci_execute($stid);
                $i = 0;
                while (($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) != false)
                {
                    // Use the uppercase column names for the associative array indices

                    echo '<tr>';
                    /*foreach ($row as $item)
                    {
                        if($i<oci_num_rows($stid)){
                            echo "<td style='padding: 10px;'>" . $item .
                                "</td>\n";
                        }

                    }*/
                    echo '<th scope="row">' . $row['EMPLOYEE_NAME'] . '</th>';
                    echo '<td scope="row">' . $row['EMPLOYEE_RELIGION'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_DOB'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_SSC_GPA'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_ROAD_NO'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_CLASS'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_FATHERS_NAME'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_MOTHERS_NAME'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_WORKING_HOUR_STARTS'] . '</td>';
                    echo '<td scope="row"> <img  style="float: left; border-radius: 50%;
                     -webkit-transition: -webkit-transform .8s ease-in-out;
                     transition: transform .8s ease-in-out;"
                 height="200" width="200"
                 src="../images/' . $row['EMPLOYEE_IMAGE_NAME'] . ' " alt="Kamla 01"> ' . '</td>';
                    echo '</tr>';

                    /*echo '<th scope="row">' . $row['EMPLOYEE_NAME'] . '</th>';
                    echo '<td scope="row">' . $row['EMPLOYEE_RELIGION'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_DOB'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_SSC_GPA'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_ROAD_NO'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_CLASS'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_FATHERS_NAME'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_MOTHERS_NAME'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_WORKING_HOUR_STARTS'] . '</td>';
                    echo '<td scope="row">' . $row['EMPLOYEE_WORKING_HOUR_ENDS'] . '</td>';*/
                }

                oci_free_statement($stid);
                ?>
            </tr>
            </tbody>
        </table>
    </div>
</section>

</body>
</html>


