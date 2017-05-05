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
    <title>Liberation War Museum</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.css">

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
<body>

<header>
    <div class="container" style="width: 100%;">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header header_title">
                    <a class="navbar-brand" href="index.php"><span style="color:#5aff4d">Liberation</span>
                        <span style="color: #ff2e46;">War Museum</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="login.php" target="_blank">Login</a></li>
                        <li><a href="developedBy.php" target="_blank">About us</a></li>
                        <li><a href="freedomFighters.php">Freedom Fighters</a></li>
                        <li><a href="employees.php" target="_blank">Employees</a></li>
                        <li><a href="galleryInfo.php" target="_blank">Gallery Info</a></li>
                        <li><a href="politicalLeaders.php" target="_blank">Political Leaders</a></li>
                        <li><a href="artists.php" target="_blank">Artists</a></li>
                        <li><a href="contributor.php" target="_blank">Contributor</a></li>
                        <li><a href="donors.php" target="_blank">Donors</a></li>
                        <li><a href="martyrs.php" target="_blank">Martyrs</a></li>
                        <!--                        <li><a href="sector.php" target="_blank">Sector</a></li>-->
                        <li><a href="advanceSearch.php" target="_blank">Advance Search</a></li>
                        <li class="pull-right dropdown">
                            <a href="#" target="_blank"> Users
                                <ul class="dropdown-menu">
                                    <li><a href="details.php" target="_blank">
                                            <?php
                                            if (isset($_SESSION['status']))
                                            {
                                                echo 'Hello ' . '<span style="color:deeppink;
                                                font-style: italic">' . $_SESSION['username'] . '</span>';
                                            }
                                            ?>
                                        </a>
                                    </li>
                                    <li class="divider"></li>

                            </a>
                        </li>

                    </ul>

                    <form class="navbar-form navbar-left" role="search" action="processSearchMartyrs.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by martyr name"
                                   name="searchMartyr">
                        </div>
                        <input type="submit" class="btn btn-info" value="Submit"/>
                    </form>

                </div><!-- /.navbar-collapse -->

            </nav>

        </div>
    </div>
</header>


<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/hoverMenu.js"></script>

</body>
</html>



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
</head>
<body>
<?php

//include 'headerAdmin.php';

echo '<h1 class="text-center text-success" style="margin-bottom: 30px;">
Martyrs killed by war criminals in specific battles
</h1>';

$conn = oci_connect("system", "faisal4590", "localhost/faisal");
$stid = oci_parse($conn,
    'SELECT
  UNIQUE
  MARTYRS.MARTYR_NAME,
  MARTYRS.MARTYR_DATE_OF_MARTYRDOM,
  MARTYRS.MARTYR_GRAVE_LOCATION,
  BATTLES.BATTLE_NAME,
  BATTLES.BATTLE_PLACE,
  BATTLES.BATTLE_DATE,
  WAR_CRIMINAL.NAME,
  WAR_CRIMINAL.NATIONALITY,
  WAR_CRIMINAL.ARREST_DATE,
  WAR_CRIMINAL.DATE_OF_CONVICTION,
  WAR_CRIMINAL.SENTENCE,
  WAR_CRIMINAL.DATE_OF_EXECUTION

FROM BATTLES JOIN MARTYRS_BATTLES ON BATTLES.BATTLE_NAME = MARTYRS_BATTLES.BATTLE_NAME
  JOIN MARTYRS ON MARTYRS_BATTLES.MARTYR_ID = MARTYRS.MARTYR_ID
  JOIN MARTYRS_WAR_CRIMINAL ON MARTYRS.MARTYR_ID = MARTYRS_WAR_CRIMINAL.MARTYR_ID
  JOIN WAR_CRIMINAL ON MARTYRS_WAR_CRIMINAL.WAR_CRIMINAL_ID = WAR_CRIMINAL.WAR_CRIMINAL_ID');


oci_execute($stid);

echo "<table  style='margin-bottom: 150px;' class='table table-responsive table-bordered table-hover'>\n";
$tableColorCounter = 0;
echo '<thead>';
echo '<tr>';
echo '<th>Martyr Name</th>';
echo '<th>Martyr Date Of Martyrdom</th>';
echo '<th>Martyr Grave Location</th>';
echo '<th>Battle Name</th>';
echo '<th>Battle Place</th>';
echo '<th>Battle Date</th>';
echo '<th>War Criminal Name</th>';
echo '<th>War Criminal Nationality</th>';
echo '<th>War Criminal Arrest Date</th>';
echo '<th>War Criminal Date Of Conviction</th>';
echo '<th>War Criminal Arrest Sentence</th>';
echo '<th>War Criminal Date Of Execution</th>';


echo '</tr>';
echo '</thead>';
echo '<tbody>';
while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS))
{
    if ($tableColorCounter % 2 == 0)
    {
        echo "<tr style=' padding:15px;' class='info'>\n";
        foreach ($row as $item)
        {
            echo "<td style='padding: 10px;'>" . $item . "</td>\n";
            //var_dump($item);
        }
        echo "</tr>\n";
        $tableColorCounter++;
    }
    else
    {
        echo "<tr style=' padding:15px;' class='warning'>\n";
        foreach ($row as $item)
        {
            echo "<td style='padding: 10px;'>" . $item . "</td>\n";
            //var_dump($item);
        }
        echo "</tr>\n";
        $tableColorCounter++;
    }

}
echo '</tbody>';
echo "</table>\n";

oci_close($conn);

include 'includes/footer.php';

?>


</body>
</html>