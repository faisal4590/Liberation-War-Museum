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

    $artID       = (int) htmlspecialchars($_POST['ArtID']);
    $paintingID           = htmlspecialchars($_POST['paintingID']);
    $paintingType             =htmlspecialchars($_POST['paintingType']);
    $awardWon          =htmlspecialchars($_POST['awardWon']);
    $paintingHeight    = htmlspecialchars($_POST['paintingHeight']);
    $paintingWidth      = htmlspecialchars($_POST['paintingWidth']);


    if (empty($_FILES['paintingImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['paintingImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['paintingImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['paintingImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['paintingImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['paintingImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['paintingImage']['tmp_name'], "images/paintings/" .
        $_FILES['paintingImage']['name']);

    $paintingImage= $_FILES['paintingImage']['name'];



    $stmt = "INSERT INTO PAINTING
        (ART_ID,PAINTING_ID,PAINTING_TYPE,PAINTING_AWARD,PAINTING_HEIGHT,PAINTING_WIDTH)
        VALUES(:ART_ID,:PAINTING_ID,:PAINTING_TYPE,:PAINTING_AWARD,:PAINTING_HEIGHT,:PAINTING_WIDTH)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':ART_ID', $artID);
    oci_bind_by_name($stid, ':PAINTING_ID', $paintingID);
    oci_bind_by_name($stid, ':PAINTING_TYPE', $paintingType);
    oci_bind_by_name($stid, ':PAINTING_AWARD', $awardWon);
    oci_bind_by_name($stid, ':PAINTING_HEIGHT', $paintingHeight);
    oci_bind_by_name($stid, ':PAINTING_WIDTH', $paintingWidth);


    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $paintingImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



