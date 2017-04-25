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
    <title>Process Add FreedomFightersChildren</title>
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
	
	$freedomFighterId           = htmlspecialchars($_POST['freedomFighterId']); 
    $childrenName           = htmlspecialchars($_POST['childrenName']); 
	$childrenGender           = htmlspecialchars($_POST['childrenGender']);
	$childrenDob        = htmlspecialchars(date('m.d.y', strtotime($_POST['childrenDob'])));
	

	
	
    if (empty($_FILES['artImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['artImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['artImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['artImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['artImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['artImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['artImage']['tmp_name'], "images/arts/" .
        $_FILES['artImage']['name']);

    $artImage = $_FILES['artImage']['name'];



    $stmt = "INSERT INTO CONTRIBUTORS                                           
        (freedom_fighter_id,
  children_name,
  children_gender,
  children_dob DATE
  ) 
        VALUES(:ART_NAME,:ART_WORTH_VALUE,
        TO_DATE('" . $dateOfPainting . "','MM/DD/YYYY'),TO_DATE('" . $dateOfRetrieval . "','MM/DD/YYYY'))";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':ART_NAME', $artName);
    oci_bind_by_name($stid, ':ART_WORTH_VALUE', $artWorthValue);



    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $artImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



