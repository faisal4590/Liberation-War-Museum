<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/16/2017
 * Time: 9:44 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process Add Arts</title>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php


$c1 = oci_connect("system", "faisal4590", 'localhost/faisal');

if (!empty($_POST))
{
    $msg = '';

    if (empty($_POST['weaponCapacity']) || empty($_POST['weaponCost'])
        || empty($_POST['weaponModel']) || empty($_POST['weaponWeight'])
        || empty($_POST['weaponManufacturer']) || empty($_POST['weaponImage'] )
    )

    {
        $msg .= '<p>Please fill up all the data</p>';
    }

    $sectorCommander        = htmlspecialchars($_POST['sectorCommander']);
    $sectorManpower             =htmlspecialchars($_POST['sectorManpower']);
    $sectorRaisingDay    = htmlspecialchars(date('m.d.y', strtotime($_POST['sectorRaisingDay'])));
    $dateOfIndependence      = htmlspecialchars(date('m.d.y', strtotime($_POST['dateOfIndependence'])));
    $battleFought        = htmlspecialchars($_POST['battleFought']);
    $deathToll            =htmlspecialchars($_POST['deathToll']);



    $stmt = "INSERT INTO SECTOR
        (sector_commandar,sector_manpower,sector_raising_day,sector_independance_date,
        IMPORTANT_BATTLE_FOUGHT,DEATH_TOLL)
        VALUES(:sector_commandar,:sector_manpower,TO_DATE('" . $sectorRaisingDay . "','MM/DD/YYYY'),
        TO_DATE('" . $dateOfIndependence . "','MM/DD/YYYY'),
        :IMPORTANT_BATTLE_FOUGHT,:DEATH_TOLL)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':sector_commandar', $sectorCommander);
    oci_bind_by_name($stid, ':sector_manpower', $sectorManpower);
    oci_bind_by_name($stid, ':IMPORTANT_BATTLE_FOUGHT', $battleFought);
    oci_bind_by_name($stid, ':DEATH_TOLL', $deathToll);



    oci_execute($stid);


    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



