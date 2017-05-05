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
    <title>Process Add Artists</title>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php


$c1 = oci_connect("system", "faisal4590", 'localhost/faisal');

if (!empty($_POST))
{
    $msg = '';

    if (empty($_POST['artPlace']) || empty($_POST['artistDateOfDeath'])
        || empty($_POST['artValue']) || empty($_POST['dateOfRetrieval'])
        || empty($_POST['artistImage'])
    )

    {
        $msg .= '<p>Please fill up all the data</p>';
    }

    $ticketNo               = (int)htmlspecialchars($_POST['ticketNo']);
    $donorName             = htmlspecialchars($_POST['donorName']);
    $donationAmount           = htmlspecialchars($_POST['donationAmount']);
    $donationDate  = htmlspecialchars(date('d/m/y', strtotime($_POST['donationDate'])));
    $comments           = htmlspecialchars($_POST['comments']);




    $stmt = "INSERT INTO DONORS
    (TICKET_NO,DONOR_NAME, DONATION_AMMOUNT, DONATION_DATE, 
     COMMENTS) 
    VALUES (:ticketNo,
    :DONOR_NAME,:DONATION_AMMOUNT,
    TO_DATE('" . $donationDate . "','DD/MM/YYYY'),:COMMENTS)";

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':ticketNo', $ticketNo);
    oci_bind_by_name($stid, ':DONOR_NAME', $donorName);
    oci_bind_by_name($stid, ':DONATION_AMMOUNT', $donationAmount);
    oci_bind_by_name($stid, ':COMMENTS', $comments);



    oci_execute($stid);



    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



