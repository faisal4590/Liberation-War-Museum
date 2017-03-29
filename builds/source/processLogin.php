<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 3/30/2017
 * Time: 12:49 AM
 */
?>

<?php



if (!empty($_POST)) {
    $msg = '';

    if (empty($_POST['usernm'])) {
        //$msg[]="No such User";
        $msg = '<p style="color:red;font-size: 20px; font-weight: bold;">User not found. Please check your username again.</p>';
    }

    if (empty($_POST['pwd'])) {
        //$msg[]="Password Incorrect........";
        $msg = '<p style="color:red;font-size: 20px; font-weight: bold;">Incorrect Password. Please check your password again.</p>';
    }


    if (!empty($msg)) {
        echo '<b>Error:-</b><br>';

        foreach($msg as $k)
        {
            echo '<li>'.$k;
        }

    } else {


        //$db = new mysqli("localhost", "matrixmp_admin", "33gUp;we~ep@", "matrixmp_cent_db") or die("Can't Connect to database");

        $unm = $_POST['usernm'];

        $c1 = oci_connect("system", "faisal4590", 'localhost/faisal');

        $stid = oci_parse($c1 , "select * from users where username='$unm'");
        oci_execute($stid);




//        $query = "select * from user where u_unm='$unm'";
//
//        $res = $db->query($query) or die("wrong query");
//
//        $row = $res->fetch_array(MYSQLI_ASSOC);
        $row = oci_fetch_array($stid);

        if (!empty($row)) {
            if ($_POST['pwd'] == $row['password']) {
                $_SESSION = array();
                $_SESSION['unm'] = $row['username'];
                $_SESSION['uid'] = $row['password'];
                $_SESSION['status'] = true;
                //ip binding code starts here
                /*$_SESSION['s_auth_var'] = generate_random_string();*/
                $_SESSION['c_ip'] = $_SERVER['REMOTE_ADDR'];
                $_SESSION['last_activity'] = time();
                // var_dump($_SESSION['c_ip']);
                //var_dump($_SESSION['last_activity']);
                session_regenerate_id();

                //ip binding code ends here

                if ($_SESSION['unm'] != "admin") {
                    //header("location:index.php");
                } else {
                    //header("location:admin/index.php");
                }
            } else {
                echo '<b style="color:red;font-size: 18px;text-align: center;">Incorrect Password. Please check your password again.</b>';
                //$msg = '<p style="color:red;font-size: 20px; font-weight: bold;">User not found. Please check your username again.</p>';
            }
        } else {
            echo '<b style="color:red;font-size: 18px;text-align: center;">User not found. Please check your username again.</b>';
            //$msg = '<p style="color:red;font-size: 20px; font-weight: bold;">Password incorrect. Please check your password again.</p>';
            //header("location:register.php?errorinvaliduser=" . $msg);
        }
    }

} else {
    //header("location:index.php");
}

?>
