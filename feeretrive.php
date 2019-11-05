<?php
include 'conn.php';
    $ret=mysqli_query($conn,"SELECT * FROM studentfees ");
    echo"<table border='1'>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>ChallanNo</th>";
    echo "<th>Description</th>";
    echo "<th>DueDate</th>";
    echo "<th>AmountDue</th>";
    while ($row=mysqli_fetch_array($ret))
    {
        echo "<tr>";
        echo "<td>" .$row ['id']. "</td>";
        echo "<td>" .$row ['ChallanNo']. "</td>";
        echo "<td>" .$row ['Description']. "</td>";
        echo "<td>" .$row ['DueDate']. "</td>";
        echo "<td>" .$row ['AmountDue']. "</td>";
        echo "</tr>";
    }
    echo "</tr>";
    echo "</table>";
$conn->close();
?>
