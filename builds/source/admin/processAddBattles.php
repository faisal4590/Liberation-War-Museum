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

    $battleName        = htmlspecialchars($_POST['battleName']);
    $battlePlace             =htmlspecialchars($_POST['battlePlace']);
    $numberOfSoldiers        = htmlspecialchars($_POST['numberOfSoldiers']);
    $deathToll            =htmlspecialchars($_POST['deathToll']);
    $battleType        = htmlspecialchars($_POST['battleType']);
    $battleLeaders           =htmlspecialchars($_POST['battleLeaders']);
    $battleDate      = htmlspecialchars(date('m.d.y', strtotime($_POST['battleDate'])));


    if (empty($_FILES['BattleImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['BattleImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['BattleImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['BattleImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['BattleImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['BattleImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['BattleImage']['tmp_name'], "images/battle_images/" .
        $_FILES['BattleImage']['name']);

    $battleImage= $_FILES['BattleImage']['name'];



    $stmt = "INSERT INTO BATTLES
        (BATTLE_NAME,BATTLE_PLACE,NUM_OF_SOLDIERS,DEATH_TOLL,
        BATTLE_TYPE,BATTLE_LEADERS,BATTLE_DATE)
        VALUES(:BATTLE_NAME,:BATTLE_PLACE,:NUM_OF_SOLDIERS,:DEATH_TOLL,
        :BATTLE_TYPE,:BATTLE_LEADERS,
        TO_DATE('" . $battleDate . "','MM/DD/YYYY'))";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':BATTLE_NAME', $battleName);
    oci_bind_by_name($stid, ':BATTLE_PLACE', $battlePlace);
    oci_bind_by_name($stid, ':NUM_OF_SOLDIERS', $numberOfSoldiers);
    oci_bind_by_name($stid, ':DEATH_TOLL', $deathToll);

    oci_bind_by_name($stid, ':BATTLE_TYPE', $battleType);
    oci_bind_by_name($stid, ':BATTLE_LEADERS', $battleLeaders);




    oci_execute($stid);


    $stmt = 'INSERT INTO images_view
        VALUES(:image_name)';

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $battleImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



