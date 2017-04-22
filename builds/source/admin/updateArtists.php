<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/16/2017
 * Time: 9:34 PM
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Arts</title>
</head>
<body>
<?php
include "header.php";
?>


<div id="page">
    <!-- start content -->
    <div id="contentMine">
        <div class="post">
            <h1 class="title text-center">Update Artists</h1>
            <div class="entry">
                <br><br>
                <?php
                //error message for registration
                if (isset($_GET['error']))
                {
                    echo '<font color="red">' . $_GET['error'] . '</font>';
                    echo '<br><br>';
                }

                //error message for invalid user
                if (isset($_GET['errorinvaliduser']))
                {
                    echo '<font color="red">' . $_GET['errorinvaliduser'] . '</font>';
                    echo '<br><br>';
                }

                //success message for registration
                if (isset($_GET['ok']))
                {
                    echo '<p style="font-size: 18px;
                        font-weight: bold; text-align: center;
                        color: limegreen;
                        ">Data Successfully Inserted.</p>';
                    echo '<br><br>';
                }

                ?>

                <!--
                     This is bootstrap form template created by Optimized faisal.
                     To use this form template, bootstrap and font-awesome must be include in the project and the custom
                     css for form field must be loaded....
                -->
                <div class="container wow rotateInDownLeft" data-wow-delay="0.35s" style="max-width: 500px;visibility: visible;
                            animation-delay: 0.35s; animation-name: rotateInDownLeft; ">
                    <div class="row">
                        <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8">
                            <form action="processUpdateArtists.php" method="post" enctype="multipart/form-data">
                                <?php
                                    $conn = oci_connect("system", "faisal4590", "localhost/faisal");
                                    $stid = oci_parse($conn, 'SELECT * FROM ARTIST');

                                    oci_execute($stid);

                                $var1 = 0;
                                while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS))
                                {
                                    $temp[$var1++] = $row['ARTIST_ID'];
                                }
                                oci_close($conn);
                                ?>
                                <div class="form-group">
                                    <label for="fullname">SELECT ID : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                        class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <select name="artistID" class="form-control" style="height: 30px;">
                                                <?php
                                                for ($p = 0; $p < $var1; $p++)
                                                {
                                                    echo '<option>' . " {$temp[$p]} " . '</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Art Place : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                        class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="art place"
                                                   type='text' name='artPlace'>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="password">Update Date Of Death : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="date of painting"
                                                   type='date' name='dateOfDeath'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Update worth value : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="worth value"
                                                   type='number' name='worth_value'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Update date of retrieval : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="date of retrieval"
                                                   type='date' name='dateOfRetrieval'>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <input class="btn btn-lg btn-danger" type='submit' value="Update">

                                </div>

                            </form>
                        </div>
                    </div>
                    <h1 class="text-center">Artist Info</h1>
                    <?php
                    $conn = oci_connect("system", "faisal4590", "localhost/faisal");

                    $stid = oci_parse($conn, 'SELECT * FROM ARTIST');
                    oci_execute($stid);

                    echo "<table border='2' bgcolor='#8a2be2' style='margin-bottom: 50px;'>\n";
                    while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS))
                    {
                        echo "<tr style='color:#8a2be2; padding:15px;'>\n";
                        foreach ($row as $item)
                        {
                            echo "<td style='padding: 10px;'>" . $item . "</td>\n";
                        }
                        echo "</tr>\n";
                    }
                    echo "</table>\n";


                    oci_close($conn);
                    ?>

                </div>
            </div>
        </div>


    </div>


</body>
</html>


