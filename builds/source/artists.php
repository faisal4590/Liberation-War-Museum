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

                    <form class="navbar-form navbar-left" role="search" action="processSearchArtist.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by artist name"
                                   name="searchArtist">
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
Artists Who painted the art And who were Foreign
</h1>';

$conn = oci_connect("system", "faisal4590", "localhost/faisal");
$stid = oci_parse($conn,
    "SELECT UNIQUE
  ARTIST_NAME, ARTIST_DOB,
  ARTIST_DOD,ARTIST_COUNTRY,
  ROUND(ART_WORTH_VALUE,0),
  ART.ART_DATE_OF_PAINTING
FROM ARTIST JOIN ART_ARTIST ON ARTIST.ARTIST_NID = ART_ARTIST.ARTIST_NID
  JOIN ART ON ART_ARTIST.ART_ID = ART.ART_ID


WHERE round(ART_WORTH_VALUE,0) > 50000 AND LOWER(ARTIST_COUNTRY) NOT IN
                                           ('bangladesh')");


oci_execute($stid);

echo "<table  style='margin-bottom: 150px;' class='table table-responsive table-bordered table-hover'>\n";
$tableColorCounter = 0;
echo '<thead>';
echo '<tr>';
echo '<th>Artist Name</th>';
echo '<th>Artist Birthday</th>';
echo '<th>Artist Date Of Date</th>';
echo '<th>Artist Country</th>';
echo '<th>Art Worth Value</th>';
echo '<th>Date Of Painting</th>';
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




echo '<h1 class="text-center text-success" style="margin-bottom: 30px;">
Art Worth Value greater than average worth value by foreign artist
</h1>';

$conn = oci_connect("system", "faisal4590", "localhost/faisal");
$stid = oci_parse($conn,
    "SELECT
  ART.ART_NAME,
  ARTIST.ARTIST_NAME,
  ARTIST.ARTIST_COUNTRY,
  ART.ART_WORTH_VALUE
FROM ART
join ART_ARTIST ON ART.ART_ID = ART_ARTIST.ART_ID

join ARTIST ON ART_ARTIST.ARTIST_NID = ARTIST.ARTIST_NID

WHERE ART_WORTH_VALUE>(SELECT
                        AVG(ART_WORTH_VALUE)
                       FROM ART) AND
  lower(ARTIST_COUNTRY) != 'bangladesh'");


oci_execute($stid);

echo "<table  style='margin-bottom: 150px;' class='table table-responsive table-bordered table-hover'>\n";
$tableColorCounter = 0;
echo '<thead>';
echo '<tr>';
echo '<th>Art Name</th>';

echo '<th>Artist Name</th>';
echo '<th>Artist Country</th>';
echo '<th>Art Worth Value</th>';
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




include 'includes/footer.php';

?>


</body>
</html>