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
$weaponID        = (int)htmlspecialchars($_POST['weaponID']);
$weapon_capacity           = htmlspecialchars($_POST['weaponCapacity']);
$weapon_cost  = htmlspecialchars($_POST['weaponCost']);
$weapon_model            = htmlspecialchars($_POST['weaponModel']);
$weapon_weight           = htmlspecialchars($_POST['weaponWeight']);
$weapon_manufacturer = htmlspecialchars($_POST['weaponManufacturer']);


$stmt = "UPDATE WEAPON SET WEAPON_CAPACITY='$weapon_capacity',
WEAPON_COST='$weapon_cost',WEAPON_MODEL='$weapon_model',
WEAPON_WEIGHT='$weapon_weight',WEAPON_MANUFACTURER='$weapon_manufacturer'
 WHERE 
WEAPON_ID='$weaponID' ";

$stid = oci_parse($c1, $stmt);



oci_execute($stid);


echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully updated
         <a href="index.php">click here to go Home.</a></p>';

?>
</body>
</html>

