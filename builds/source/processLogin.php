<?php
ob_start();
session_start();

if (!empty($_POST)) {
    $msg = '';

    if (empty($_POST['unm'])) {
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


        $db = new mysqli('localhost', 'root', '', 'liberation war museum')
        or die("Can't Connect to database");

        $username = $_POST['unm'];
        $password = $_POST['pwd'];


        $query = "select * from USERS where USERNAME='$username'
                        AND PASSWORD = '$password'";

        $res = $db->query($query) or die('wrong query');

        $row = $res->fetch_array(MYSQLI_ASSOC);

        echo '<pre>';
        print_r($row);
        echo '</pre>';


        if (!empty($row)) {
            if ($_POST['pwd'] == $row['password']) {
                $_SESSION = array();
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['status'] = true;

                if ($_SESSION['unm'] != 'admin') {
                    header('location:index.php');
                } else {
                    header('location:admin/index.php');
                }
            } else {
                echo '<b style="color:red;font-size: 18px;text-align: center;">
                            Incorrect Password. Please check your password again.
                            </b>';
                //$msg = '<p style="color:red;font-size: 20px; font-weight: bold;">User not found. Please check your username again.</p>';
            }
        } else {
            echo '<b style="color:red;font-size: 18px;text-align: center;">User not found. Please check your username again.</b>';

        }
    }

} else {
    header('location:index.php');
}

ob_end_flush();
?>