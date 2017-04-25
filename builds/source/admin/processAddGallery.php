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


    $galleryName          = htmlspecialchars($_POST['galleryName']);
    $dateOfEstablishment      = htmlspecialchars(date('m.d.y', strtotime($_POST['dateOfEstablishment'])));
    $inauguratedBy           =htmlspecialchars($_POST['inauguratedBy']);
    $openingHours       = htmlspecialchars(date('m.d.y H:i:s', strtotime($_POST['openingHours'])));


    if (empty($_FILES['galleryImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['galleryImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['galleryImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['galleryImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['galleryImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['galleryImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['galleryImage']['tmp_name'], "images/arts/" .
        $_FILES['galleryImage']['name']);

    $galleryImage= $_FILES['galleryImage']['name'];



    $stmt = "INSERT INTO GALLERY
        (GALLERY_NAME,DATE_OF_ESTABLISHMENT,INAGURATED_BY,OPENING_HOURS)
        VALUES(:GALLERY_NAME,TO_DATE('" . $dateOfEstablishment . "','MM/DD/YYYY'),
        :INAGURATED_BY,to_date('" . $openingHours . "','mm/dd/yy HH24:MI:SS'))";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':GALLERY_NAME', $galleryName);
    oci_bind_by_name($stid, ':INAGURATED_BY', $inauguratedBy);



    oci_execute($stid);


    $stmt = 'INSERT INTO images_view
        VALUES(:image_name)';

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $galleryImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



