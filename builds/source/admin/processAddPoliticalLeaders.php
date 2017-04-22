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

    $name         = htmlspecialchars($_POST['name']);
    $fathersName         =htmlspecialchars($_POST['fathersName']);
    $mothersName         = htmlspecialchars($_POST['mothersName']);
    $dob      = htmlspecialchars(date('m.d.y', strtotime($_POST['dob'])));

    $gender        = htmlspecialchars($_POST['gender']);
    $recognition        =htmlspecialchars($_POST['recognition']);
    $spouse       = htmlspecialchars($_POST['spouse']);
    $profession       =htmlspecialchars($_POST['profession']);


    if (empty($_FILES['politicalLeaderImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['politicalLeaderImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['politicalLeaderImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['politicalLeaderImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['politicalLeaderImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['politicalLeaderImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['politicalLeaderImage']['tmp_name'], "images/political_leader_images/" .
        $_FILES['politicalLeaderImage']['name']);

    $politicalLeaderImage = $_FILES['politicalLeaderImage']['name'];



    $stmt = "INSERT INTO POLITICAL_LEADERS
        (NAME,FATHERS_NAME,MOTHERS_NAME,DATE_OF_BIRTH,GENDER,
        RECOGNITION,SPOUSE,PROFESSION)
        VALUES(:NAME,:FATHERS_NAME,:MOTHERS_NAME,
        TO_DATE('" . $dob . "','MM/DD/YYYY'),:GENDER,:RECOGNITION,:SPOUSE,:PROFESSION)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':NAME', $name);
    oci_bind_by_name($stid, ':FATHERS_NAME', $fathersName);
    oci_bind_by_name($stid, ':MOTHERS_NAME', $mothersName);
    oci_bind_by_name($stid, ':GENDER', $gender);
    oci_bind_by_name($stid, ':RECOGNITION', $recognition);
    oci_bind_by_name($stid, ':SPOUSE', $spouse);
    oci_bind_by_name($stid, ':PROFESSION', $profession);



    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $politicalLeaderImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



