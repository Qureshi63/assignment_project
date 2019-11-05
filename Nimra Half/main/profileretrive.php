<?php

include 'conn.php';


    $ret=mysqli_query($conn,"Select * from profile ");

    echo"<table border='1'>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>RegisterationNumber</th>";
    echo "<th>FullName</th>";
    echo "<th>FatherName</th>";
    echo "<th>Nationality</th>";
    echo "<th>DateOfBirth</th>";
    echo "<th>EmailAddress</th>";
    echo "<th>ContactNumber</th>";
    echo "<th>ContactPerson</th>";


    while ($row=mysqli_fetch_array($ret))
    {
        echo "<tr>";
        echo "<td>" .$row ['id']. "</td>";
        echo "<td>" .$row ['RegisterationNumber']. "</td>";
        echo "<td>" .$row ['FullName']. "</td>";
        echo "<td>" .$row ['FatherName']. "</td>";
        echo "<td>" .$row ['Nationality']. "</td>";
        echo "<td>" .$row ['DateOfBirth']. "</td>";
        echo "<td>" .$row ['EmailAddress']. "</td>";
        echo "<td>" .$row ['ContactNumber']. "</td>";
        echo "<td>" .$row ['ContactPerson']. "</td>";
        echo "</tr>";

    }
    echo "</tr>";
    echo "</table>";

    


$conn->close();
?>
