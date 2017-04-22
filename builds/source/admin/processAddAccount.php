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


    $accountType      = htmlspecialchars($_POST['accountType']);
    $accountName      = htmlspecialchars($_POST['accountName']);
    $accountBalance   = htmlspecialchars($_POST['accountBalance']);
    $dateOfCreation   = htmlspecialchars(date('m.d.y', strtotime($_POST['dateOfCreation'])));
    $dateOfDeposition = htmlspecialchars(date('m.d.y', strtotime($_POST['dateOfDeposition'])));
    $bankName         = htmlspecialchars($_POST['bankName']);
    $branchName       = htmlspecialchars($_POST['branchName']);


    $stmt = "INSERT INTO ACCOUNT
        (ACCOUNT_TYPE,ACCOUNT_NAME,ACCOUNT_BALANCE,ACCOUNT_CREATION_DATE,
        ACCOUNT_DEPOSITION_DATE,BANK_NAME,BRANCH_NAME)
        VALUES(:ACCOUNT_TYPE,:ACCOUNT_NAME,:ACCOUNT_BALANCE,
        TO_DATE('" . $dateOfCreation . "','MM/DD/YYYY'),TO_DATE('" . $dateOfDeposition . "','MM/DD/YYYY'),
        :BANK_NAME,:BRANCH_NAME)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':ACCOUNT_TYPE', $accountType);
    oci_bind_by_name($stid, ':ACCOUNT_NAME', $accountName);
    oci_bind_by_name($stid, ':ACCOUNT_BALANCE', $accountBalance);
    oci_bind_by_name($stid, ':BANK_NAME', $bankName);
    oci_bind_by_name($stid, ':BRANCH_NAME', $branchName);

    oci_execute($stid);



    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



