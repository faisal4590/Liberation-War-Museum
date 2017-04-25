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
$artID       = (int)htmlspecialchars($_POST['ArtID']);
$artistNID       = (int)htmlspecialchars($_POST['artistNID']);


$stmt = 'INSERT INTO ART_ARTIST
        (ART_ID,ARTIST_NID)
        VALUES(:ART_ID,:ARTIST_NID)';



$stid = oci_parse($c1, $stmt);

oci_bind_by_name($stid, ':ART_ID', $artID);
oci_bind_by_name($stid, ':ARTIST_NID', $artistNID);


oci_execute($stid);


echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">
        <span class="glyphicon glyphicon-ok-circle"></span>
         Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

?>
</body>
</html>

