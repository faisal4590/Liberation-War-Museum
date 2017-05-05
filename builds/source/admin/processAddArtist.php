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

    $artistName             = htmlspecialchars($_POST['artistName']);
    $artistDOB  = htmlspecialchars(date('d/m/y', strtotime($_POST['artistDOB'])));
    $artist_date_of_death  = htmlspecialchars(date('d/m/y', strtotime($_POST['artistDateOfDeath'])));
    $artistCountry            = htmlspecialchars($_POST['artistCountry']);
    $artistArtPlace            = htmlspecialchars($_POST['artistArtPlace']);



    if (empty($_FILES['artistImage']['name']))
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Please add a image...</p>';
    }


    if ($_FILES['artistImage']['error'] > 0)
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">Error uploading image(Image size maybe too large).</p>';
    }


    if (!(strtoupper(substr($_FILES['artistImage']['name'], -4)) == ".JPG"
        || strtoupper(substr($_FILES['artistImage']['name'], -5)) == ".JPEG"
        || strtoupper(substr($_FILES['artistImage']['name'], -4)) == ".GIF"
        || strtoupper(substr($_FILES['artistImage']['name'], -4)) == ".PNG")
    )
    {
        $msg .= '<p style="color:red;font-size: 23px; font-weight: bold;">wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)</p>';

    }

    move_uploaded_file($_FILES['artistImage']['tmp_name'], "images/artist/" . $_FILES['artistImage']['name']);

    $artistImage = $_FILES['artistImage']['name'];



    $stmt = "INSERT INTO ARTIST
    (ARTIST_NID, ARTIST_NAME, ARTIST_DOB, 
     ARTIST_DOD, ARTIST_COUNTRY, ARTIST_ARTPLACE) 
    VALUES (ARTIST_ARTIST_ID_SEQ.nextval,
    :artistName,TO_DATE('" . $artistDOB . "','DD/MM/YYYY'),
    TO_DATE('" . $artist_date_of_death . "','DD/MM/YYYY'),
    :artistCountry,:artistArtPlace)";

    $stid = oci_parse($c1, $stmt);

     oci_bind_by_name($stid, ':artistName', $artistName);
     oci_bind_by_name($stid, ':artistCountry', $artistCountry);
    oci_bind_by_name($stid, ':artistArtPlace', $artistArtPlace);



    oci_execute($stid);


    $stmt = 'INSERT INTO images_view
        VALUES(:image_name)';

    $stid = oci_parse($c1, $stmt);

    oci_bind_by_name($stid, ':image_name', $artistImage);

    oci_execute($stid);

    echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">Data Successfully inserted
         <a href="index.php">click here to go Home.</a></p>';

}


?>


</body>
</html>



