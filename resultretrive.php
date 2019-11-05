<?php

include 'conn.php';


    $ret=mysqli_query($conn,"Select * from studentresult ");

    echo"<table border='1'>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Name</th>";
    echo "<th>Semester</th>";
    echo "<th>Program</th>";
    echo "<th>CourseNo</th>";
    echo "<th>Credit</th>";
    echo "<th>Marks</th>";
    echo "<th>LG</th>";
    echo "<th>GP</th>";
    echo "<th>CGP</th>";


    while ($row=mysqli_fetch_array($ret))
    {
        echo "<tr>";
        echo "<td>" .$row ['id']. "</td>";
        echo "<td>" .$row ['Name']. "</td>";
        echo "<td>" .$row ['Semester']. "</td>";
        echo "<td>" .$row ['Program']. "</td>";
        echo "<td>" .$row ['CourseNo']. "</td>";
        echo "<td>" .$row ['Credit']. "</td>";
        echo "<td>" .$row ['Marks']. "</td>";
        echo "<td>" .$row ['LG']. "</td>";
        echo "<td>" .$row ['GP']. "</td>";
        echo "<td>" .$row ['CGP']. "</td>";
        echo "</tr>";

    }
    echo "</tr>";
    echo "</table>";

    


$conn->close();
?>
