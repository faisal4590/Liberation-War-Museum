<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/29/2017
 * Time: 9:03 PM
 */
?>

<?php
//$db = new mysqli("localhost", "matrixmp_admin", "33gUp;we~ep@", "matrixmp_cent_db") or die("Can't Connect to database");
$db = oci_connect("system", "faisal4590", "localhost/faisal");
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

    //ekhane check korbo username already exist kina.
    //db theke select kore anteci username er sathe match kora row gula
    //jodi > 0 row thake tar mane user ace...
    $unm = htmlspecialchars($_POST['unm']);
    //prepare statement starts here
    /*$sql = 'select * from user where u_unm=?';
    $statement = $db->prepare($sql);
    $statement->bind_param('s',$unm);
    $statement->execute();*/
    //prepare statement ends here
    
    $stid = oci_parse($db, "select * from users where username='$unm'");
    oci_execute($stid);
    //$query  = "select * from user where u_unm='$unm'";

    $result = oci_num_rows($stid);
    if ($result > 0)
    {
        $msg .= "<p>Username already exists.</p>";
    }

    //same method e check korteci email already exist kina
    $email  = htmlspecialchars($_POST['mail']);
    $stid = oci_parse($db, "select * from users where USERS.EMAIL='$email'");
    //$query  = "select * from user where USERS.EMAIL='$email'";
    oci_execute($stid);
    $result = oci_num_rows($stid);
    if ($result > 0)
    {
        $msg .= "<p>Email already exists.</p>";
    }

    if (is_numeric($_POST['fnm']))
    {
        $msg .= "<p>Name must be in String Format...</p>";
    }

    if ($msg != "")
    {
        //header("location:register.php?error=" . $msg);
    }
    else
    {
        $fnm     = htmlspecialchars($_POST['fnm']);
        $unm     = htmlspecialchars($_POST['unm']);
        $pwd     = htmlspecialchars($_POST['pwd']);
        $cpwd     = htmlspecialchars($_POST['cpwd']);
        $gender  = htmlspecialchars($_POST['gender']);
        $email   = htmlspecialchars($_POST['mail']);
        $contact = htmlspecialchars($_POST['contact']);
        $city    = htmlspecialchars($_POST['city']);

        //prepare statement starts here


        $stmt = 'INSERT INTO users
        (USER_ID,USER_FULLNAME,PASSWORD,CONFIRM_PASSWORD,GENDER,
        EMAIL,MOBILE_NUMBER,CITY) 
        VALUES (:ID,:FUllNAME,:PASSWORD,:CONFPASSWORD,:GENDER,
        :EMAIL,:MOBILE,:CITY)';
        $stid    = oci_parse($db, $stmt);


        oci_bind_by_name($stid, ':ID', $fnm);
        oci_bind_by_name($stid, ':FUllNAME', $unm);
        oci_bind_by_name($stid, ':PASSWORD', $pwd);
        oci_bind_by_name($stid, ':CONFPASSWORD', $cpwd);
        oci_bind_by_name($stid, ':GENDER', $gender);
        oci_bind_by_name($stid, ':EMAIL', $email);
        oci_bind_by_name($stid, ':MOBILE', $contact);
        oci_bind_by_name($stid, ':CITY', $city);


        oci_execute($stid);


        //prepare statement ends here

        /*$query="insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_city)
        values('$fnm','$unm','$pwd','$gender','$email','$contact','$city')";

        $db->query($query) or die("Can't Execute Query...");*/
        header("location:register.php?ok=1");
    }
}
else
{
    //header("location:index.php");
}
?>
