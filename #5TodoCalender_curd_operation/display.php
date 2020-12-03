<?php
include("connection.php");
// error_reporting(0);
$query = "SELECT * FROM `event_list`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if ($total != 0) {
?>
<table>
    <tr>
        <th>Date</th>
        <th>Title</th>
        <th>Message</th>
        <th colspan="2">operation</th>
    </tr>
    
    <?php
    while ($result = mysqli_fetch_assoc($data)) {
    echo "<tr>
        <td>" . $result['date'] . "</td>
        <td>" . $result['title'] . "</td>
        <td>" . $result['msg'] . "</td>
        <td> <a href='update.php?rn=$result[date]&sn=$result[title]&cl=$result[msg]'>Edit</a></td>
        <td> <a href='delete.php?rn=$result[date]' onclick=' return checkdelete() '>Delete</a></td>
    </tr>";
    }
    } else {
    echo "No Record Found";
    }
    ?>
</table>