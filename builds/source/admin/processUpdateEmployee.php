<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/22/2017
 * Time: 2:50 PM
 */

$c1 = oci_connect("system", "faisal4590", 'localhost/faisal');

//$artist_date_of_death  = htmlspecialchars(date('d/m/y', strtotime($_POST['artistDateOfDeath'])));
$employeeID        = (int)htmlspecialchars($_POST['employeeID']);
$empName              = htmlspecialchars($_POST['employeeName']);
$empReligion          = htmlspecialchars($_POST['employeeReligion']);
$empDOB               = htmlspecialchars(date('d.m.y', strtotime($_POST['employeeDOB'])));
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
$empWorkingHourStarts = htmlspecialchars(date('d.m.y H:i:s', strtotime($_POST['employeeWorkingHourStarts'])));
$empWorkingHourEnds   = htmlspecialchars(date('d.m.y H:i:s', strtotime($_POST['employeeWorkingHourEnds'])));
$empBloodGroup          = htmlspecialchars($_POST['bloodGroup']);
$empSalary                  = htmlspecialchars($_POST['salary']);



$stmt = "UPDATE EMPLOYEE SET EMPLOYEE_NAME='$empName',EMPLOYEE_RELIGION='$empReligion',
EMPLOYEE_DOB=TO_DATE('" . $empDOB . "','DD/MM/YYYY'),employee_ssc_gpa='$empSSCGPA',
employee_hsc_gpa='$empHSCGPA',employee_graduate_cgpa='$empGraduateCGPA',
employee_post_graduate_cgpa='$empPostGraduateCGPA',employee_road_no='$empRoadNo',
employee_house_no='$empHouseNo',employee_flat_no='$empFlatNo',employee_zip_code='$empZipCode',
employee_district='$empDistrict',employee_post_code='$empPostCode',employee_class='$empClass',
employee_fathers_name='$empFatherName',employee_mothers_name='$empMotherName',
empolyee_fingerprint_id='$empFingerPrintID',employee_working_hour_starts= to_date('" . $empWorkingHourStarts . "','dd/mm/yy HH24:MI:SS'),
employee_working_hour_ends= to_date('" . $empWorkingHourEnds . "','dd/mm/yy HH24:MI:SS'),
blood_group='$empBloodGroup',salary='$empSalary'

 WHERE 
EMPLOYEE_ID='$employeeID' ";

$stid = oci_parse($c1, $stmt);

/*oci_bind_by_name($stid, ':ART_NAME', $artName);
oci_bind_by_name($stid, ':ART_WORTH_VALUE', $artWorthValue);*/


oci_execute($stid);


echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully updated
         <a href="index.php">click here to go Home.</a></p>';

?>
</body>
</html>

