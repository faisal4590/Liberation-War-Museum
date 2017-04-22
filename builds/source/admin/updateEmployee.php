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

<?php
$conn=oci_connect("system","faisal4590","localhost/faisal");

$stid = oci_parse($conn, 'SELECT * FROM employee');
oci_execute($stid);

echo "<table border='1'>\n";
$var1 = 0;
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $temp[$var1++] = $row['EMPLOYEE_ID'];
    echo "<tr style='color:orange; padding:15px;'>\n";
    foreach ($row as $item) {
        echo "<td style='padding: 10px;'>" . $item . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";


oci_close($conn);
?>

<div id="page">
    <!-- start content -->
    <div id="contentMine">
        <div class="post">
            <h1 class="title text-center">Add New Arts</h1>
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
                            <form action="processAddArt.php" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="fullname">Select ID : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                    class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <select name="" class="form-control"  style="height: 30px;">
                                                <?php
                                                for ($p = 0; $p < $var1;$p++)
                                                {
                                                    echo '<option>' . " {$temp[$p]} " . '</option>';
                                                }
                                                ?>
<!--                                                <option>--><?php //$i=0; echo $temp[$i++];?><!--</option>-->

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Art Name : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"> <i
                                                    class="glyphicon glyphicon-user"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="art name"
                                                   type='text' name='artName'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Art Worth Value : </label>
                                    <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="fa fa-dollar"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control"
                                                   placeholder="art worth value" required type='number'
                                                   name='artWorthValue'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Date Of Painting : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="date of painting"
                                                   type='date' required name='dateOfPainting'>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Date Of Retrieval : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-eyedropper"></i></span>
                                        <div class="icon-addon">
                                            <input class="form-control" placeholder="date of retrieval"
                                                   type='date' required name='dateOfRetrieval'>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label style="font-size: 18px;" for="bookImage">Upload Art Image</label><br>
                                    <input type='file' name='artImage'>
                                </div>

                                <div class="form-group">
                                    <input class="btn btn-lg btn-success" type='submit' value="Insert">

                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


</body>
</html>


