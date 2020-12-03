<?php

include("connection.php");
error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="" method="GET">
        Roll No <input type="text" name="rollno" value="" placeholder="Roll No">
        Name <input type="text" name="name" value="" placeholder="Name">
        Class <input type="text" name="class" value="" placeholder="Class">
        <input type="submit" name="submit" value="Submit">
    </form> -->


    <?php

    if ($_GET['submit']) {

        $date = $_GET['date'];
        $title = $_GET['title'];
        $msg = $_GET['msg'];

        if ($date!="" && $title!="" && $msg!="")
         {
            //  INSERT INTO STUDENT VALUES ('$rn', '$sn', '$cl')
            $query = "INSERT INTO `event_list`(`id`, `date`, `title`, `msg`) VALUES (NULL,'$date','$title','$msg')";
            $data = mysqli_query($conn, $query);

            if ($data) 
            {
                // echo "Data is successfully insert in database";
                ?>

                <script>
                alert('Data is successfully inserted in Database!!');
                </script>
                
                <?php
            } 
            else 
            {
                echo "All Fields Required";
            }
        }
    }

    ?>

</body>

</html>