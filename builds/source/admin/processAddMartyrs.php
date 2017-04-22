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

    $martyrName         = htmlspecialchars($_POST['martyrName']);
    $martyrDOB     = htmlspecialchars(date('m.d.y', strtotime($_POST['martyrDOB'])));
    $profession            =htmlspecialchars($_POST['profession']);
    $dateOfMartyrdom       = htmlspecialchars(date('m.d.y', strtotime($_POST['dateOfMartyrdom'])));
    $graveLocation            =htmlspecialchars($_POST['graveLocation']);
    $fathersName           =htmlspecialchars($_POST['fathersName']);
    $mothersName           =htmlspecialchars($_POST['mothersName']);


    if (empty($_FILES['martyrImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['martyrImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['martyrImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['martyrImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['martyrImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['martyrImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['martyrImage']['tmp_name'], "images/martyr_images/" .
        $_FILES['martyrImage']['name']);

    $martyrImage= $_FILES['martyrImage']['name'];



    $stmt = "INSERT INTO MARTYRS
        (MARTYR_NAME,MARTYR_DOB,MARTYR_PROFESSION,MARTYR_DATE_OF_MARTYRDOM,
        MARTYR_GRAVE_LOCATION,MARTYR_FATHERS_NAME,MARTYR_MOTHERS_NAME)
        VALUES(:MARTYR_NAME,TO_DATE('" . $martyrDOB . "','MM/DD/YYYY'),:MARTYR_PROFESSION,
         TO_DATE('" . $dateOfMartyrdom . "','MM/DD/YYYY'),:MARTYR_GRAVE_LOCATION,
       :MARTYR_FATHERS_NAME,:MARTYR_MOTHERS_NAME)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':MARTYR_NAME', $martyrName);
    oci_bind_by_name($stid, ':MARTYR_PROFESSION', $profession);
    oci_bind_by_name($stid, ':MARTYR_GRAVE_LOCATION', $graveLocation);
    oci_bind_by_name($stid, ':MARTYR_FATHERS_NAME', $fathersName);
    oci_bind_by_name($stid, ':MARTYR_MOTHERS_NAME', $mothersName);




    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $martyrImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



