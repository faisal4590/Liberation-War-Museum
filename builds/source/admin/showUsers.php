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
    <link rel="stylesheet" href="../css/animate.css">
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
include "header.php";
?>

<section id="employees" style="font-family: comic sans ms, Merriweather, Helvetica, sans-serif">
    <div class="container">
        <h1 class="text-center">Users</h1>
        <table class="table">
            <caption class="text-center" style="text-align: center;">User Information</caption>
            <thead>
            <tr>
                <th scope="column">Full Name</th>
                <th scope="column" >Username</th>
                <th scope="column" >Gender</th>
                <th scope="column" >House No</th>
                <th scope="column" >Road No</th>
                <th scope="column">District</th>
                <th scope="column">Mobile No</th>
                <th scope="column">Email</th>
                <th scope="column">Facebook ID</th>
                <th scope="column">Personal Website</th>
                <th scope="column" >Image</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <?php
                $conn = oci_connect("system", "faisal4590", "localhost/faisal");

                $test1 = oci_parse($conn,'SELECT
                      userAliasing.ADDRESS.road_no,userAliasing.ADDRESS.house_no,userAliasing.ADDRESS.city
                    FROM users userAliasing');
                oci_execute($test1);
                $i = 0;
                $houseNoAddr[1000]='';
                $roadNoAddr[1000]='';
                $cityAddr[1000]='';
                while (($row = oci_fetch_array($test1, OCI_ASSOC + OCI_RETURN_NULLS)) != false)
                {

                    $houseNoAddr[$i] = $row['ADDRESS.HOUSE_NO'];
                    $roadNoAddr[$i] = $row['ADDRESS.ROAD_NO'];
                    $cityAddr[$i] = $row['ADDRESS.CITY'];
                    $i++;
                }

                $test1 = oci_parse($conn,'SELECT
                      userAliasing.CONTACT.MOBILE_NO,userAliasing.CONTACT.EMAIL_ID,userAliasing.CONTACT.FACEBOOK_ID,
                     userAliasing.CONTACT.PERSONAL_WEBSITE FROM users userAliasing');
                oci_execute($test1);
                $i = 0;
                $mobileNoContact[1000]='';
                $emailIDContact[1000]='';
                $facebookIDContact[1000]='';
                $personalWebsiteContact[1000]='';
                while (($row = oci_fetch_array($test1, OCI_ASSOC + OCI_RETURN_NULLS)) != false)
                {

                    $mobileNoContact[$i] = $row['CONTACT.MOBILE_NO'];
                    $emailIDContact[$i] = $row['CONTACT.EMAIL_ID'];
                    $facebookIDContact[$i] = $row['CONTACT.FACEBOOK_ID'];
                    $personalWebsiteContact[$i] = $row['CONTACT.PERSONAL_WEBSITE'];
                    $i++;
                }


                $stid = oci_parse($conn,'select  USER_FULLNAME,USERNAME,GENDER,USER_IMAGES 
                  from USERS');
                oci_execute($stid);
                $i = 0;
                while (($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) != false)
                {
                    echo '<tr>';

                    echo '<td scope="row">' . $row['USER_FULLNAME'] . '</td>';
                    echo '<td scope="row">' . $row['USERNAME'] . '</td>';
                    echo '<td scope="row">' . $row['GENDER'] . '</td>';
                    echo '<td scope="row">' . $houseNoAddr[$i] . '</td>';
                    echo '<td scope="row">' . $roadNoAddr[$i] . '</td>';
                    echo '<td scope="row">' . $cityAddr[$i] . '</td>';
                    echo '<td scope="row">' . $mobileNoContact[$i] . '</td>';
                    echo '<td scope="row">' . $emailIDContact[$i] . '</td>';
                    echo '<td scope="row">' . $facebookIDContact[$i] . '</td>';
                    echo '<td scope="row">' . $personalWebsiteContact[$i] . '</td>';

                    echo '<td scope="row"> <img  style="float: left; border-radius: 50%;
                     -webkit-transition: -webkit-transform .8s ease-in-out;
                     transition: transform .8s ease-in-out;"
                 height="150" width="150"
                 src="images/users_images/' . $row['USER_IMAGES'] . ' " alt="Kamla 01"> ' . '</td>';

                    $i++;


                    echo '</tr>';
                }

                oci_free_statement($stid);
                ?>
            </tr>
            </tbody>
        </table>
    </div>
</section>


<!--WOW js activator-->

<script src="js/wow.js"></script>
<script>
    new WOW().init();
</script>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/moveToTop.js"></script>
</body>
</html>


