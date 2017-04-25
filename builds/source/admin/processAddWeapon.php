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
    <title>Process Add Weapon</title>
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
    $artifactID                    =(int) htmlspecialchars($_POST['artifactID']);
    $weaponID                   =htmlspecialchars($_POST['weaponID']);
    $weapon_capacity           = htmlspecialchars($_POST['weaponCapacity']);
    $weapon_cost                 = htmlspecialchars($_POST['weaponCost']);
    $weapon_model            = htmlspecialchars($_POST['weaponModel']);
    $weapon_weight           = htmlspecialchars($_POST['weaponWeight']);
    $weapon_manufacturer = htmlspecialchars($_POST['weaponManufacturer']);


    if (empty($_FILES['weaponImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['weaponImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['weaponImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['weaponImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['weaponImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['weaponImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['weaponImage']['tmp_name'], "images/weapon_images/" . $_FILES['weaponImage']['name']);

    $weapon_image = $_FILES['weaponImage']['name'];



    $stmt = 'INSERT INTO WEAPON(ARTIFACT_ID, 
        WEAPON_ID,WEAPON_CAPACITY  ,WEAPON_COST,WEAPON_MODEL,
        WEAPON_WEIGHT,WEAPON_MANUFACTURER)
        VALUES(:ARTIFACT_ID,:WEAPON_ID,:weapon_capacity,:weapon_cost,
        :weapon_model,:weapon_weight,:weapon_manufacturer)';

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':ARTIFACT_ID', $artifactID);
    oci_bind_by_name($stid, ':WEAPON_ID', $weaponID);
    oci_bind_by_name($stid, ':weapon_capacity', $weapon_capacity);
    oci_bind_by_name($stid, ':weapon_cost', $weapon_cost);
    oci_bind_by_name($stid, ':weapon_model', $weapon_model);
    oci_bind_by_name($stid, ':weapon_weight', $weapon_weight);
    oci_bind_by_name($stid, ':weapon_manufacturer', $weapon_manufacturer);


    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $weapon_image);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



