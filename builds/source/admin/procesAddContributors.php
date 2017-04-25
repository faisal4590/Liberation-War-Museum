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
    <title>Process Add Contributors</title>
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

    $contributorName           = htmlspecialchars($_POST['contributorName']);
	$contributorDOB        =    htmlspecialchars(date('m.d.y', strtotime($_POST['contributorDOB'])));

	$organizationName           = htmlspecialchars($_POST['organizationName']);
	$profession           = htmlspecialchars($_POST['profession']);
	$contributionType           = htmlspecialchars($_POST['contributionType']);
	$contributorHouseNo           = htmlspecialchars($_POST['contributorHouseNo']);
	$contributorHouseName           = htmlspecialchars($_POST['contributorHouseName']);
	$contributorFlatNo            = htmlspecialchars($_POST['contributorFlatNo']);
	$contributorRoadNo            = htmlspecialchars($_POST['contributorRoadNo']);
	$contributorDistrictName            = htmlspecialchars($_POST['contributorDistrictName']);
	$contributorZipCode          = htmlspecialchars($_POST['contributorZipCode']);
	
    if (empty($_FILES['ContributorsImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['ContributorsImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['ContributorsImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['ContributorsImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['ContributorsImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['ContributorsImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['ContributorsImage']['tmp_name'], "images/contributor_images/" .
        $_FILES['ContributorsImage']['name']);

    $ContributorsImage= $_FILES['ContributorsImage']['name'];



    $stmt = "INSERT INTO CONTRIBUTORS                                           
  (contributor_name,
  CONTRUBITOR_DOB,
  organization_name,
  profession,
  contribution_type,
  contributor_house_no,
  contributor_house_name,
  contributor_flat_no,
  contributor_road_no,
  contributor_district_name,
  contributor_zip_code 
  ) 
        VALUES(:contributor_name, TO_DATE('" . $contributorDOB . "','MM/DD/YYYY'),
        :organization_name,:profession,:contribution_type,:contributor_house_no,
        :contributor_house_name,:contributor_flat_no,:contributor_road_no,
        :contributor_district_name,:contributor_zip_code)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':contributor_name', $contributorName);
    oci_bind_by_name($stid, ':organization_name', $organizationName);
    oci_bind_by_name($stid, ':profession', $profession);
    oci_bind_by_name($stid, ':contribution_type', $contributionType);
    oci_bind_by_name($stid, ':contributor_house_no', $contributorHouseNo);
    oci_bind_by_name($stid, ':contributor_house_name', $contributorHouseName);
    oci_bind_by_name($stid, ':contributor_flat_no', $contributorFlatNo);
    oci_bind_by_name($stid, ':contributor_road_no', $contributorRoadNo);
    oci_bind_by_name($stid, ':contributor_district_name', $contributorDistrictName);
    oci_bind_by_name($stid, ':contributor_zip_code', $contributorZipCode);

    oci_execute($stid);


    $stmt = "INSERT INTO images_view
        VALUES(:image_name)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $ContributorsImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



