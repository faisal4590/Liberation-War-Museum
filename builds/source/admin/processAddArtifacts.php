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

    $artifactName           = htmlspecialchars($_POST['artifactName']);
    $artifactCategory               =htmlspecialchars($_POST['artifactCategory']);
    $artifactDateOfRetrieval        = htmlspecialchars(date('m.d.y', strtotime($_POST['artifactDateOfRetrieval'])));


    if (empty($_FILES['artifactImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['artifactImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['artifactImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['artifactImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['artifactImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['artifactImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['artifactImage']['tmp_name'], "images/Artifacts_images/" .
        $_FILES['artifactImage']['name']);

    $artifactImage = $_FILES['artifactImage']['name'];



    $stmt = "INSERT INTO ARTIFACTS
        (ARTIFACT_NAME,ARTIFACT_CATEGORY,ARTIFACT_DATE_OF_RETRIEVAL)
        VALUES(:ARTIFACT_NAME,:ARTIFACT_CATEGORY,
        TO_DATE('" . $artifactDateOfRetrieval . "','MM/DD/YYYY'))";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':ARTIFACT_NAME', $artifactName);
    oci_bind_by_name($stid, ':ARTIFACT_CATEGORY', $artifactCategory);



    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $artifactImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



