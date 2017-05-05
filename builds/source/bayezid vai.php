<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/9/2017
 * Time: 3:25 PM
 */
//session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freedom Fighters</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">

</head>
<body>
<?php

include 'headerAdmin.php';

?>

<div id="myContainer">
    <?php
    $conn = oci_connect("system", "faisal4590", "localhost/faisal");
    $stid = oci_parse($conn, 'SELECT MARTYR_NAME,MARTYR_PROFESSION,
     MARTYR_DOB, MARTYR_DATE_OF_MARTYRDOM,MARTYR_GRAVE_LOCATION FROM MARTYRS');

    oci_execute($stid);
    while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS))
    {
        ?>
        <div data-wow-delay="0.35s" class="wow zoomInRight innerContainer"
         style="float: left; margin: 10px 100px 15px 5px;
            border: 3px solid #6D73C2; -webkit-border-radius: 10px 15px ;-moz-border-radius:10px 15px ;
            border-radius: 10px 15px; padding: 8px;visibility: visible;
                            animation-delay: 0.35s; animation-name: zoomInRight;">
            <p>
                <label for="asd">Martyr Name : </label> <?php echo '<span style="color:#0076A3;
                    font-family: Merriweather, Helvetica, sans-serif; font-size: 17px;">'
                    . $row['MARTYR_NAME'] . '</span>' ?>
            </p>
            <p>
                <label for="asd">Martyr Date Of Birth : </label> <?php echo '<span style="color:#0076A3">'
                    . $row['MARTYR_DOB'] . '</span>' ?>
            </p>
            <p>
                <label for="asd">Date Of Martyrdom : </label> <?php echo '<span style="color:#0076A3">'
                    . $row['MARTYR_DATE_OF_MARTYRDOM'] . '</span>' ?>
            </p>
            <p>
                <label for="asd">Martyr Grave Location : </label> <?php echo '<span style="color:#0076A3">'
                    . $row['MARTYR_GRAVE_LOCATION'] . '</span>' ?>
            </p>
            <div>
                <img src="images/moin.jpg" alt="" style="border: 3px solid #8c9aff; -webkit-border-radius: 10px 15px;
                    -moz-border-radius:10px 15px ;border-radius: 10px 15px;">
            </div>

        </div>

    <?php } ?>
</div>

<div style="clear: both;">

</div>


<?php
include 'includes/footer.php';

?>

<!--WOW js activator-->

<script src="js/wow.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>