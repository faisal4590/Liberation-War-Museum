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
    <title>Process Add Documents</title>
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

    $artifactID      = (int)htmlspecialchars($_POST['artifactID']);
    $documentId           = htmlspecialchars($_POST['documentId']);  
	$documentType           = htmlspecialchars($_POST['documentType']);
	$numberOfPages           = htmlspecialchars($_POST['numberOfPages']);
	$documentCondition           = htmlspecialchars($_POST['documentCondition']);
	$documentPublishDate        = htmlspecialchars(date('m.d.y', strtotime($_POST['documentPublishDate'])));
	
	
    if (empty($_FILES['DocumentsImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['DocumentsImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['DocumentsImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['DocumentsImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['DocumentsImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['DocumentsImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['DocumentsImage']['tmp_name'], "images/Document_images/" .
        $_FILES['DocumentsImage']['name']);

    $DocumentsImage = $_FILES['DocumentsImage']['name'];



    $stmt = "INSERT INTO DOCUMENTS                                           
        (ARTIFACT_ID,
        DOCUMENT_ID,
DOCUMENT_TYPE ,
NUMBER_OF_PAGES,
DOCUMENT_CONDITION,
DOCUMENT_PUBLISH_DATE 
  ) 
        VALUES(:ARTIFACT_ID,:DOCUMENT_ID,:DOCUMENT_TYPE,:NUMBER_OF_PAGES,
        :DOCUMENT_CONDITION,TO_DATE('" . $documentPublishDate . "','MM/DD/YYYY'))";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':ARTIFACT_ID', $artifactID);
    oci_bind_by_name($stid, ':DOCUMENT_ID', $documentId);
    oci_bind_by_name($stid, ':DOCUMENT_TYPE', $documentType);
    oci_bind_by_name($stid, ':NUMBER_OF_PAGES', $numberOfPages);
    oci_bind_by_name($stid, ':DOCUMENT_CONDITION', $documentCondition);



    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $DocumentsImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



