<?php

include("connection.php");

$date = $_GET['date'];
$query = "DELETE FROM `event_list` WHERE date='$date'";
$data = mysqli_query($conn, $query);

if ($data) {
// echo "<font color='green'>Record Deleted From Table</font>";
echo " <script> alert('Record Deleted') </script> "
?>

<!-- this is used for refer back page and referesh -->
<META http-equiv="Refresh" content="0; url=http://localhost/php_work/%235TodoCalender_curd_operation/">

<?php
} else {
echo "<font color='red'>Delete Process Failed</font>";
}
?>