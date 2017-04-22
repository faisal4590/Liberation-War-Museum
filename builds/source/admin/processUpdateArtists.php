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


$artistID        = (int)htmlspecialchars($_POST['artistID']);
$artPlace        = htmlspecialchars($_POST['artPlace']);
$dateOfDeath     = htmlspecialchars($_POST['dateOfDeath']);
$worth_value     = htmlspecialchars($_POST['worth_value']);
$dateOfRetrieval = htmlspecialchars($_POST['dateOfRetrieval']);
$test            = htmlspecialchars($_POST['dateOfDeath']);


/*$stmt = "INSERT INTO ART
        (ART_NAME,ART_WORTH_VALUE,ART_DATE_OF_PAINTING,ART_RETRIEVAL_DATE)
        VALUES(:ART_NAME,:ART_WORTH_VALUE,
        TO_DATE('" . $dateOfPainting . "','MM/DD/YYYY'),TO_DATE('" . $dateOfRetrieval . "','MM/DD/YYYY'))";*/

$stmt = "UPDATE ARTIST SET ART_PLACE='$artPlace',
 date_of_death=TO_DATE('" . $dateOfDeath . "','DD/MM/YYYY'),worth_value='$worth_value',
 date_of_retrieval=TO_DATE('" . $dateOfDeath . "','DD/MM/YYYY')
 WHERE 
artist_id='$artistID' ";

$stid = oci_parse($c1, $stmt);

/*oci_bind_by_name($stid, ':ART_NAME', $artName);
oci_bind_by_name($stid, ':ART_WORTH_VALUE', $artWorthValue);*/


oci_execute($stid);


echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully updated
         <a href="index.php">click here to go Home.</a></p>';

?>
</body>
</html>

