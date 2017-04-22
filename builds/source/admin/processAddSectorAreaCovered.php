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

    $sectorNo         = htmlspecialchars($_POST['sectorNo']);
    $area           =htmlspecialchars($_POST['area']);
    $sizeArea       =htmlspecialchars($_POST['sizeOfArea']);


    $stmt = 'INSERT INTO SECTOR_AREA_COVERED
        (SECTOR_NO,SECTOR_AREA_NAME,AREA_SIZE)
        VALUES(:SECTOR_NO,:SECTOR_AREA_NAME,:AREA_SIZE)';

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':SECTOR_NO', $sectorNo);
    oci_bind_by_name($stid, ':SECTOR_AREA_NAME',$area);
    oci_bind_by_name($stid, ':AREA_SIZE', $sizeArea);

    oci_execute($stid);


    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



