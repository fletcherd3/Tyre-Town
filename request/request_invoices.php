<?php
// PHP doc that gets the needed target values from the database with an sql statement.

require_once("./request/Connection.php");

$query2 =  "SELECT invoice_id FROM info263_19s2_wheel_alignment.invoice";

$query = mysqli_query($conn, $query2) or die(mysqli_error($conn));
?>