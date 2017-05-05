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
    <title>Process Add Exibition</title>
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


    $exibitionNo           = htmlspecialchars($_POST['exibitionNo']);
    $exibitionName          = htmlspecialchars($_POST['exibitionName']);
    $exibitionSponsors           = htmlspecialchars($_POST['exibitionSponsors']); 
	$exibitionDate        = htmlspecialchars($_POST['exibitionDate']);
	$exibitionStartTime           = htmlspecialchars($_POST['exibitionStartTime']);
	$exibitionFinishingTime           =htmlspecialchars($_POST['exibitionFinishingTime']);
	$exibitionType           = htmlspecialchars($_POST['exibitionType']);
	$exibitionPrice           = htmlspecialchars($_POST['exibitionPrice']);

	
	
    if (empty($_FILES['ExibitionImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['ExibitionImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['ExibitionImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['ExibitionImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['ExibitionImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['ExibitionImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['ExibitionImage']['tmp_name'], "images/Exibition_images/" .
        $_FILES['ExibitionImage']['name']);

    $ExibitionImage = $_FILES['ExibitionImage']['name'];



    $stmt = 'INSERT INTO EXHIBITION                                           
        (exibition_no,
        EXIBITION_NAME,
          exibition_sponsors,
          exibition_date,
          exibition_start_time,
          exibition_finishing_time,
          exibition_type,
          exibition_price
  ) 
        VALUES(:exibition_no,:EXIBITION_NAME,:exibition_sponsors,
        :exibitionDate,
        :exibitionStartTime,
       :exibitionEndTime,
        :exibition_type,:exibition_price)';

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':exibition_no', $exibitionNo);
    oci_bind_by_name($stid, ':EXIBITION_NAME', $exibitionName);
    oci_bind_by_name($stid, ':exibition_sponsors', $exibitionSponsors);
    oci_bind_by_name($stid, ':exibitionDate', $exibitionDate);
    oci_bind_by_name($stid, ':exibitionStartTime', $exibitionStartTime);
    oci_bind_by_name($stid, ':exibitionEndTime', $exibitionFinishingTime);

    oci_bind_by_name($stid, ':exibition_type', $exibitionType);
    oci_bind_by_name($stid, ':exibition_price', $exibitionPrice);



    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $ExibitionImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



