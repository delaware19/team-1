<?php
include 'mysqlconnection.php';

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);

?>