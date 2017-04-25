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
    <title>Process Add HumanRemains</title>
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
	
	$artifactID          = (int) htmlspecialchars($_POST['artifactID']);
    $bodyTag         =    htmlspecialchars($_POST['bodyTag']);
    $recoveryPlace           = htmlspecialchars($_POST['recoveryPlace']); 
	$gender           = htmlspecialchars($_POST['gender']);
	$dateOfMartyrdom        = htmlspecialchars(date('m.d.y', strtotime($_POST['dateOfMartyrdom'])));
	$bodyPartsFound           = htmlspecialchars($_POST['bodyPartsFound']);
	

	
	
    if (empty($_FILES['HumanRemainsImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['HumanRemainsImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['HumanRemainsImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['HumanRemainsImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['HumanRemainsImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['HumanRemainsImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['HumanRemainsImage']['tmp_name'], "images/humanRemain_images/" .
        $_FILES['HumanRemainsImage']['name']);

    $HumanRemainsImage = $_FILES['HumanRemainsImage']['name'];



    $stmt = "INSERT INTO HUMAN_REMAINS                                           
        (artifact_id ,
BODY_TAGS,
recovery_place,
gender,
date_of_martyrdom,
body_parts_found

  ) 
        VALUES(:artifact_id,:BODY_TAGS,:recovery_place,:gender,
        TO_DATE('" . $dateOfMartyrdom . "','MM/DD/YYYY'),
        :body_parts_found)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':artifact_id', $artifactID);
    oci_bind_by_name($stid, ':BODY_TAGS', $bodyTag);
    oci_bind_by_name($stid, ':recovery_place', $recoveryPlace);
    oci_bind_by_name($stid, ':gender', $gender);
    oci_bind_by_name($stid, ':body_parts_found', $bodyPartsFound);




    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $HumanRemainsImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



