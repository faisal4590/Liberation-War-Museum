<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/22/2017
 * Time: 2:50 PM
 */

$c1 = oci_connect("system", "faisal4590", 'localhost/faisal');

//$artist_date_of_death  = htmlspecialchars(date('d/m/y', strtotime($_POST['artistDateOfDeath'])));
$WARCRIMINALIDNUMBER      = (int)htmlspecialchars($_POST['WARCRIMINALIDNUMBER']);
$FORCESTYPE     = htmlspecialchars($_POST['FORCESTYPE']);


$stmt = 'INSERT INTO WAR_CRIMINAL_FORCES
        (WAR_CRIMINAL_ID,FORCES_TYPE )
        VALUES(:WAR_CRIMINAL_IDNUMBER,:FORCES_TYPE)';



$stid = oci_parse($c1, $stmt);

oci_bind_by_name($stid, ':WAR_CRIMINAL_IDNUMBER', $WARCRIMINALIDNUMBER);
oci_bind_by_name($stid, ':FORCES_TYPE', $FORCESTYPE );


oci_execute($stid);


echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">
        <span class="glyphicon glyphicon-ok-circle"></span>
         Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

?>
</body>
</html>

