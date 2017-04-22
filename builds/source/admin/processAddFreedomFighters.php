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
    <title>Process Add Artifacts</title>
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

    $name           = htmlspecialchars($_POST['freedomFighterName']);
    $gender                =  htmlspecialchars($_POST['gender']);
    $dob            = htmlspecialchars(date('m.d.y', strtotime($_POST['dateOfBirth'])));
    $dom           = htmlspecialchars(date('m.d.y', strtotime($_POST['dateOfMartyrdom'])));
    $country = htmlspecialchars($_POST['country']);
    $fatherName           = htmlspecialchars($_POST['fatherName']);
    $motherName                =  htmlspecialchars($_POST['motherName']);
    $type            = htmlspecialchars($_POST['freedomFighterType']);
    $gallantryAwardType           = htmlspecialchars($_POST['gallantryAwardType']);
    $gallantryReceivedDate =  htmlspecialchars(date('m.d.y', strtotime($_POST['gallantryReceivedDate'])));
    $roadNo           = htmlspecialchars($_POST['roadNo']);
    $houseNo                =  htmlspecialchars($_POST['houseNo']);
    $houseName            = htmlspecialchars($_POST['houseName']);
    $flatNo           = htmlspecialchars($_POST['flatNo']);
    $zipCode = htmlspecialchars($_POST['zipCode']);
    $district                =  htmlspecialchars($_POST['district']);
    $postCode            = htmlspecialchars($_POST['postCode']);



    if (empty($_FILES['freedomFighterImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['freedomFighterImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['freedomFighterImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['freedomFighterImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['freedomFighterImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['freedomFighterImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['freedomFighterImage']['tmp_name'], "images/freedom_fighter_images/" .
        $_FILES['freedomFighterImage']['name']);

    $freedomFighterImage = $_FILES['freedomFighterImage']['name'];


    $stmt = "INSERT INTO FREEDOM_FIGHTERS
            (FREEDOM_FIGHTER_NAME,FREEDOM_FIGHTER_GENDER,FREEDOM_FIGHTER_DOB,FREEDOM_FIGHTER_DOM,
            FREEDOM_FIGHTER_COUNTRY,frdomm_fighters_f_name,FRDOMM_FIGHTERS_M_NAME,FREEDOM_FIGHTER_TYPE,
            GALLENTARY_AWARD_TYPE,GALLENTARY_RECEIVED_DATE,FREEDOM_FIGHTER_ROAD_NO,FREEDOM_FIGHTER_HOUSE_NO,
            FREEDOM_FIGHTER_HOUSE_NAME,FREEDOM_FIGHTER_FLAT_NO,FREEDOM_FIGHTER_ZIP_CODE,
            FREEDOM_FIGHTER_DISTRICT,FREEDOM_FIGHTER_POST_CODE)
            VALUES(:FREEDOM_FIGHTER_NAME,:FREEDOM_FIGHTER_GENDER,
            TO_DATE('" . $dob . "','MM/DD/YYYY'),TO_DATE('" . $dom . "','MM/DD/YYYY'),:FREEDOM_FIGHTER_COUNTRY,
            :frdomm_fighters_f_name,:FRDOMM_FIGHTERS_M_NAME,
            :FREEDOM_FIGHTER_TYPE,:GALLENTARY_AWARD_TYPE,TO_DATE('" . $gallantryReceivedDate . "','MM/DD/YYYY'),
            :FREEDOM_FIGHTER_ROAD_NO,:FREEDOM_FIGHTER_HOUSE_NO,:FREEDOM_FIGHTER_HOUSE_NAME,
            :FREEDOM_FIGHTER_FLAT_NO,:FREEDOM_FIGHTER_ZIP_CODE,:FREEDOM_FIGHTER_DISTRICT,
            :FREEDOM_FIGHTER_POST_CODE)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_NAME', $name);
    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_GENDER', $gender);
    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_COUNTRY', $country);
    oci_bind_by_name($stid, ':frdomm_fighters_f_name', $fatherName);
    oci_bind_by_name($stid, ':FRDOMM_FIGHTERS_M_NAME', $motherName);
    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_TYPE', $type);
    oci_bind_by_name($stid, ':GALLENTARY_AWARD_TYPE', $gallantryAwardType);
    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_ROAD_NO', $roadNo);
    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_HOUSE_NO', $houseNo);
    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_HOUSE_NAME', $houseName);
    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_FLAT_NO', $flatNo);
    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_ZIP_CODE', $zipCode);
    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_DISTRICT', $district);
    oci_bind_by_name($stid, ':FREEDOM_FIGHTER_POST_CODE', $postCode);



    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $freedomFighterImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



