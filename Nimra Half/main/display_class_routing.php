<!DOCTYPE html>
<html>
<head>
<style>
@media only screen and (max-width: 768px) {
}
</style>
<link href="display.css" rel="stylesheet">
</head>
<body>
<p align="right">
        <input class="b1" type="submit" name="Go Back" value="Go Back" 
        onclick="window.location.href='http://localhost:8080/assignment_project/class_routing.php'">
    <br>
    </p>
 <h1> All Class </h1>
 <br>
 <table>
 <tr>
    <th> Day </th>
    <th> Detail </th>
    </tr >
    <?php
        include "connect.php";
        $q = "SELECT * FROM class_routing ";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query)){
    ?>
        <tr>
            <td> <?php echo $res['day'];  ?> </td>
            <td> <?php echo $res['subject'];
                       echo $res['teacher'];
                       echo $res['class'];
                       echo $res['start_time'];
                       echo $res['end_time'];  ?> </td>
            <td> <button > <a href="http://localhost:8080/assignment_project/delete_class_routing.php?id=<?php echo $res['id']; ?>">Delete</a></button></td>
            <td> <button > <a href="http://localhost:8080/assignment_project/update_class_routing.php?id=<?php echo $res['id']; ?>"> Update </a> </button> </td>
       
        </tr>
    <?php 
    }
    ?>    
 </table>  
</div>
</div>
</body>
</html>