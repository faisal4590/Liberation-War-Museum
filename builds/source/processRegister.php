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
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.css">

</head>
<body>
<?php
include "headerAdmin.php";
?>

<?php



$c1 = oci_connect("system", "faisal4590", 'localhost/faisal');

if (!empty($_POST))
{
    $msg = '';

    if (empty($_POST['fnm']) || empty($_POST['unm'])
        || empty($_POST['gender']) || empty($_POST['pwd'])
        || empty($_POST['cpwd']) || empty($_POST['mail']) || empty($_POST['contact']) || empty($_POST['city'])
    )
    {
        $msg .= '<p>Please fill up all the data</p>';
    }

    if ($_POST['pwd'] != $_POST['cpwd'])
    {
        $msg .= '<p>Your password did not match. Please Enter your Password Again.</p>';
    }



    if (strlen($_POST['pwd']) > 30)
    {
        $msg .= '<p>Password must be within 30 charecters....</p>';
    }

    if (strlen($_POST['contact']) < 13)
    {
        $msg .= '<p>Phone number must be in 8801********* format.</p>';
    }



    $fnm     = htmlspecialchars($_POST['fnm']);
    $unm     = htmlspecialchars($_POST['unm']);
    $pwd     = htmlspecialchars($_POST['pwd']);
    $cpwd     = htmlspecialchars($_POST['cpwd']);
    $gender  = htmlspecialchars($_POST['gender']);
    $email   = htmlspecialchars($_POST['mail']);
    $contact = htmlspecialchars($_POST['contact']);
    $telephone     = htmlspecialchars($_POST['telephone']);
    $facebookID   = htmlspecialchars($_POST['facebookID']);
    $website = htmlspecialchars($_POST['website']);

    $roadNo = htmlspecialchars($_POST['roadNo']);
    $houseNo    = htmlspecialchars($_POST['houseNo']);
    $flatNo = htmlspecialchars($_POST['flatNo']);
    $zipCode = htmlspecialchars($_POST['zipCode']);
    $district = htmlspecialchars($_POST['district']);
    $postCode= htmlspecialchars($_POST['postCode']);
    $city    = htmlspecialchars($_POST['city']);

    move_uploaded_file($_FILES['userImage']['tmp_name'], "admin/images/users_images/" .
        $_FILES['userImage']['name']);

    $userImage = $_FILES['userImage']['name'];

/*        $stmt = 'INSERT INTO users
        (USER_FULLNAME,USERNAME,PASSWORD,CONFIRM_PASSWORD,GENDER,
       USER_IMAGES) 
        VALUES (:FUllNAME,:USERNAME,:PASSsWORD,:CONFPASSWORD,:GENDER,
        :USER_IMAGES)';*/

    $stmt = 'INSERT INTO users(USER_FULLNAME,USERNAME,PASSWORD,
        CONFIRM_PASSWORD,GENDER,ADDRESS,CONTACT,USER_IMAGES)
        VALUES (:FUllNAME,:USERNAME,:PASSsWORD,:CONFPASSWORD,:GENDER,
        ADDR(:road_no,:house_no,:flat_no,:zip_code,
        :district,:post_code,:city),CONTACT_INFO(:mobile_no,
        :phone_no,:facebook_id,:email_id,:personal_website),:USER_IMAGES)';


        $stid    = oci_parse($c1, $stmt);


        oci_bind_by_name($stid, ':FUllNAME', $fnm);
        oci_bind_by_name($stid, ':USERNAME', $unm);
        oci_bind_by_name($stid, ':PASSsWORD', $pwd);
        oci_bind_by_name($stid, ':CONFPASSWORD', $cpwd);
        oci_bind_by_name($stid, ':GENDER', $gender);

        oci_bind_by_name($stid, ':road_no', $roadNo);
        oci_bind_by_name($stid, ':house_no', $houseNo);
        oci_bind_by_name($stid, ':flat_no', $flatNo);
        oci_bind_by_name($stid, ':zip_code', $zipCode);
        oci_bind_by_name($stid, ':district', $district);
        oci_bind_by_name($stid, ':post_code', $postCode);
        oci_bind_by_name($stid, ':city', $city);


        oci_bind_by_name($stid, ':email_id', $email);
        oci_bind_by_name($stid, ':mobile_no', $contact);
        oci_bind_by_name($stid, ':phone_no', $telephone);
        oci_bind_by_name($stid, ':facebook_id', $facebookID);
        oci_bind_by_name($stid, ':personal_website', $website);


        oci_bind_by_name($stid, ':USER_IMAGES', $userImage);

        oci_execute($stid);
        echo '<p class="text-center alert-success"
        style="font-size: 20px;font-weight: bold;padding: 5px;">
        You are successfully registered. <a href="login.php">click here to login.</a></p>';


}



?>


</body>
</html>
