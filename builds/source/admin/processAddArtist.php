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

    $art_place             = htmlspecialchars($_POST['artPlace']);
    $artist_date_of_death  = htmlspecialchars(date('d/m/y', strtotime($_POST['artistDateOfDeath'])));
    $art_value             = htmlspecialchars($_POST['artValue']);
    $art_date_of_retrieval = htmlspecialchars(date('d/m/y', strtotime($_POST['dateOfRetrieval'])));


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



    $stmt = "INSERT INTO ARTIST_VIEW
        VALUES(:art_place,TO_DATE('" . $artist_date_of_death . "','DD/MM/YYYY'),
        :worth_value,TO_DATE('" . $art_date_of_retrieval . "','DD/MM/YYYY'))";

    $stid = oci_parse($c1, $stmt);

     oci_bind_by_name($stid, ':art_place', $art_place);
     oci_bind_by_name($stid, ':worth_value', $art_value);


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



