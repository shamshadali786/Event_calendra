<?php
include("connection.php");
error_reporting(0);
$_GET['rn'];
$_GET['sn'];
$_GET['cl'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Data</title>
    </head>
    <body>

        <form action="" method="GET">
            Roll No <input type="text" name="rollno" value="<?php echo $_GET['rn']; ?>">
            Name <input type="text" name="name" value="<?php echo $_GET['sn']; ?>">
            Class <input type="text" name="class" value="<?php echo $_GET['cl']; ?>">
            <input type="submit" name="submit" value="Update">
        </form>

        <?php
        if($_GET['submit'])
        {
            $rollno = $_GET['rollno'];
            $name = $_GET['name'];
            $class = $_GET['class'];
            $query ="UPDATE `event_list` SET `name`=$name,`class`=$class WHERE rollno='$rollno'";

            $data = mysqli_query($conn, $query);

            if($data)
            {
                echo " <script> alert('recode updated successefully'); </script> ";
            }
            else{
                echo "recode not updated";
            }
        }
        else{
            echo "button not pressed";
        }
        ?>
    </body>
</html>