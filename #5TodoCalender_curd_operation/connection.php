<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="event_calendra";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "Connection Done";
}

else
{
    echo "Connection Failed";
    die("Connection failed because" .mysqli_connect_error());
}

?>
