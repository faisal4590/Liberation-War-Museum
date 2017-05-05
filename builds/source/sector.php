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

include 'headerAdmin.php';

echo '<h1 class="text-center text-success" style="margin-bottom: 30px;">
Employee In charge Of Donation</h1>';

$conn = oci_connect("system", "faisal4590", "localhost/faisal");
$stid = oci_parse($conn,
    'SELECT
  EMPLOYEE_NAME,DONOR_NAME,DONATION_AMMOUNT

FROM EMPLOYEE JOIN EMPLOYEE_DONORS ON
                                     EMPLOYEE.EMPLOYEE_ID = EMPLOYEE_DONORS.EMPLOYEE_ID
  JOIN DONORS ON EMPLOYEE_DONORS.TICKET_NO = DONORS.TICKET_NO');


oci_execute($stid);

echo "<table  style='margin-bottom: 150px;' class='table table-responsive table-bordered table-hover'>\n";
$tableColorCounter = 0;
echo '<thead>';
echo '<tr>';
echo '<th>EMPLOYEE Name</th>';
echo '<th>Donors Name</th>';
echo '<th>Donation Amount</th>';

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
Freedom Fighters list Under each Sectors
</h1>';

$conn = oci_connect("system", "faisal4590", "localhost/faisal");
$stid = oci_parse($conn,
    'SELECT
  EMPLOYEE_NAME,SUM(DONATION_AMMOUNT)

FROM EMPLOYEE JOIN EMPLOYEE_DONORS ON
                                     EMPLOYEE.EMPLOYEE_ID = EMPLOYEE_DONORS.EMPLOYEE_ID
  JOIN DONORS ON EMPLOYEE_DONORS.TICKET_NO = DONORS.TICKET_NO GROUP BY EMPLOYEE_NAME');


oci_execute($stid);

echo "<table  style='margin-bottom: 150px;' class='table table-responsive table-bordered table-hover'>\n";
$tableColorCounter = 0;
echo '<thead>';
echo '<tr>';
echo '<th>EMPLOYEE Name</th>';
echo '<th>Donation Amount</th>';

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