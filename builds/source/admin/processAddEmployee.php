<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/29/2017
 * Time: 8:35 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adding Employee</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.css">

</head>
<body>
<?php
include "header.php";
?>

<?php


$c1 = oci_connect("system", "faisal4590", 'localhost/faisal');

if (!empty($_POST))
{
    $msg = '';

    if (empty($_POST['employeeName']) || empty($_POST['employeeReligion'])
        || empty($_POST['employeeDOB']) || empty($_POST['employeeSSCGPA'])
        || empty($_POST['employeeHSCGPA']) || empty($_POST['employeeGraduateCGPA'])
        || empty($_POST['employeePostGraduateCGPA']) || empty($_POST['employeeRoadNo'])
        || empty($_POST['employeeHouseNo']) || empty($_POST['employeeFlatNo'])
        || empty($_POST['employeeZipCode']) || empty($_POST['employeeDistrict'])
        || empty($_POST['employeePostCode']) || empty($_POST['employeeClass'])
        || empty($_POST['employeeFatherName']) || empty($_POST['employeeMotherName'])
        || empty($_POST['employeeFingerPrintID']) || empty($_POST['employeeWorkingHourStarts'])
        || empty($_POST['employeeWorkingHourEnds']) || empty($_POST['employeeImage'])
    )

    {
        $msg .= '<p>Please fill up all the data</p>';
    }

    $empName              = htmlspecialchars($_POST['employeeName']);
    $empReligion          = htmlspecialchars($_POST['employeeReligion']);
    $empDOB               = htmlspecialchars(date('m.d.y', strtotime($_POST['employeeDOB'])));
    $empSSCGPA            = htmlspecialchars($_POST['employeeSSCGPA']);
    $empHSCGPA            = htmlspecialchars($_POST['employeeHSCGPA']);
    $empGraduateCGPA      = htmlspecialchars($_POST['employeeGraduateCGPA']);
    $empPostGraduateCGPA  = htmlspecialchars($_POST['employeePostGraduateCGPA']);
    $empRoadNo            = htmlspecialchars($_POST['employeeRoadNo']);
    $empHouseNo           = htmlspecialchars($_POST['employeeHouseNo']);
    $empFlatNo            = htmlspecialchars($_POST['employeeFlatNo']);
    $empZipCode           = htmlspecialchars($_POST['employeeZipCode']);
    $empDistrict          = htmlspecialchars($_POST['employeeDistrict']);
    $empPostCode          = htmlspecialchars($_POST['employeePostCode']);
    $empClass             = htmlspecialchars($_POST['employeeClass']);
    $empFatherName        = htmlspecialchars($_POST['employeeFatherName']);
    $empMotherName        = htmlspecialchars($_POST['employeeMotherName']);
    $empFingerPrintID     = htmlspecialchars($_POST['employeeFingerPrintID']);
    $empWorkingHourStarts = htmlspecialchars(date('m.d.y H:i:s', strtotime($_POST['employeeWorkingHourStarts'])));
    $empWorkingHourEnds   = htmlspecialchars(date('m.d.y H:i:s', strtotime($_POST['employeeWorkingHourEnds'])));
    //$empImage             = htmlspecialchars($_POST['employeeImage']);



    if (empty($_FILES['employeeImage']['name']))
    {
//        $msg[] = 'Please provide a image for your book.';
        $msg.= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['employeeImage']['error'] > 0)
    {
//        $msg[] = 'Error uploading image';
        $msg.='<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }



    if (!(strtoupper(substr($_FILES['employeeImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['employeeImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['employeeImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['employeeImage']['name'], -4)) == ".PNG" ))
    {
//        $msg[] = 'wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)';
        $msg.= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['employeeImage']['tmp_name'], "images/" . $_FILES['employeeImage']['name']);

    $empImage =  $_FILES['employeeImage']['name'];

    var_dump($empImage);

    $stmt = "INSERT INTO EMPLOYEE
        (EMPLOYEE_NAME,EMPLOYEE_RELIGION,EMPLOYEE_DOB,EMPLOYEE_SSC_GPA,EMPLOYEE_HSC_GPA,
        EMPLOYEE_GRADUATE_CGPA,EMPLOYEE_POST_GRADUATE_CGPA,EMPLOYEE_ROAD_NO,EMPLOYEE_HOUSE_NO,
        EMPLOYEE_FLAT_NO,EMPLOYEE_ZIP_CODE,EMPLOYEE_DISTRICT,EMPLOYEE_POST_CODE,EMPLOYEE_CLASS,
        EMPLOYEE_FATHERS_NAME,EMPLOYEE_MOTHERS_NAME,EMPOLYEE_FINGERPRINT_ID,
        EMPLOYEE_WORKING_HOUR_STARTS,EMPLOYEE_WORKING_HOUR_ENDS,EMPLOYEE_IMAGE_NAME) 
        VALUES( :E_NAME,:E_RELIGION,TO_DATE('" . $empDOB . "','MM/DD/YYYY'),:E_SSC,:E_HSC,
        :E_GRADUATE,:E_POST_GRADUATE,:E_ROAD,:E_HOUSE,:E_FLAT,:E_ZIP,:E_DISTRICT,:E_POSTCODE,
        :E_CLASS,:E_FATHER,:E_MOTHER,:E_FINGER,TO_TIMESTAMP($empWorkingHourStarts, 'YYYY-MM-DD HH:MM:SS'),
        TO_TIMESTAMP($empWorkingHourEnds, 'YYYY-MM-DD HH:MM:SS'),:E_IMAGE)";
    $stid = oci_parse($c1, $stmt);


    oci_bind_by_name($stid, ':E_NAME', $empName);
    oci_bind_by_name($stid, ':E_RELIGION', $empReligion);
    //oci_bind_by_name($stid, ':E_DOB', $empDOB);
    oci_bind_by_name($stid, ':E_SSC', $empSSCGPA);
    oci_bind_by_name($stid, ':E_HSC', $empHSCGPA);
    oci_bind_by_name($stid, ':E_GRADUATE', $empGraduateCGPA);
    oci_bind_by_name($stid, ':E_POST_GRADUATE', $empPostGraduateCGPA);
    oci_bind_by_name($stid, ':E_ROAD', $empRoadNo);
    oci_bind_by_name($stid, ':E_HOUSE', $empHouseNo);
    oci_bind_by_name($stid, ':E_FLAT', $empFlatNo);
    oci_bind_by_name($stid, ':E_ZIP', $empZipCode);
    oci_bind_by_name($stid, ':E_DISTRICT', $empDistrict);
    oci_bind_by_name($stid, ':E_POSTCODE', $empPostCode);
    oci_bind_by_name($stid, ':E_CLASS', $empClass);
    oci_bind_by_name($stid, ':E_FATHER', $empFatherName);
    oci_bind_by_name($stid, ':E_MOTHER', $empMotherName);
    oci_bind_by_name($stid, ':E_FINGER', $empFingerPrintID);
    //oci_bind_by_name($stid, ':E_WORKINGSTARTS', $empWorkingHourStarts);
    //oci_bind_by_name($stid, ':E_WORKINGENDS', $empWorkingHourEnds);
    oci_bind_by_name($stid, ':E_IMAGE', $empImage);


    oci_execute($stid);
    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">You are successfully registered. <a href="login.php">click here to login.</a></p>';

}


?>


</body>
</html>
