<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
</head>
<body>
<?php


/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/25/2017
 * Time: 10:27 PM
 */

$conn = oci_connect("system", "faisal4590", "localhost/faisal");
$stid = oci_parse($conn, 'TRUNCATE TABLE MARTYRS');

oci_execute($stid);

echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully Deleted
         <a href="index.php">click here to go Home.</a></p>';

?>
</body>
</html>

