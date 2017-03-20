<?php
$conn=oci_connect("system","faisal4590","localhost/faisal");
If (!$conn){
    echo 'Failed to connect to Oracle';
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

oci_close($conn);

