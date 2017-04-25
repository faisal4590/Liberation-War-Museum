<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 4/24/2017
 * Time: 3:20 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process Search</title>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php
$inputValue = strtolower(htmlspecialchars($_GET['searchEmployee']));



//var_dump($inputValue);
$conn = oci_connect("system", "faisal4590", "localhost/faisal");
/*$stid = oci_parse($conn, "SELECT EMPLOYEE_ID,
UPPER(EMPLOYEE_NAME) ,EMPLOYEE_DOB FROM EMPLOYEE WHERE lower(EMPLOYEE_NAME)
LIKE '%" . $_GET['searchEmployee'] . "%' ");*/

$stid = oci_parse($conn, "SELECT EMPLOYEE_ID,
 EMPLOYEE_NAME,EMPLOYEE_DOB FROM EMPLOYEE WHERE EMPLOYEE_NAME
LIKE '%" . $_GET['searchEmployee'] . "%' ");

oci_execute($stid);

$numrows = oci_fetch_all($stid, $res);
//var_dump($numrows);

if ($numrows > 0)
{
    echo '<p class="text-center alert-success"
            style="font-size: 20px;font-weight: bold;padding: 5px;"><span class="glyphicon 
            glyphicon-ok"></span> ' .
        " $numrows" . ' data found
         </p>';
}
else
{
    echo '<p class="text-center alert-danger"
            style="font-size: 20px;font-weight: bold;padding: 5px;"><span class="glyphicon 
            glyphicon-alert"></span> No data found
         </p>';
}

$conn = oci_connect("system", "faisal4590", "localhost/faisal");
/*$stid = oci_parse($conn, "SELECT EMPLOYEE_ID,
 EMPLOYEE_NAME,EMPLOYEE_DOB FROM EMPLOYEE WHERE lower(EMPLOYEE_NAME)
LIKE '%" . $_GET['searchEmployee'] . "%' ");*/

$stid = oci_parse($conn, "SELECT EMPLOYEE_ID,
 EMPLOYEE_NAME,EMPLOYEE_DOB FROM EMPLOYEE WHERE EMPLOYEE_NAME
LIKE '%" . $_GET['searchEmployee'] . "%' ");


oci_execute($stid);


echo "<table style='margin-bottom: 50px;' class='table table-responsive table-bordered table-hover'>\n";
$tableColorCounter = 0;
echo '<thead>';
echo '<tr>';
echo '<th class="active">Employee ID</th>';
echo '<th class="active">Employee Name</th>';
echo '<th class="active">Employee Date Of Birth</th>';
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
?>

</body>
</html>
