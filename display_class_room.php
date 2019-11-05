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
        onclick="window.location.href='http://localhost:8080/assignment_project/class_room.php'">
    <br>
    </p>
 
 <h1> Class Rooms </h1>
 <br>
 <table>
    <tr>
    <th> Id </th>
    <th> Class Room Name </th>
    <th> Student Limit </th>
    <th> Delete </th>
    <th> Update </th>
    </tr >
    <?php
     include 'connect.php'; 
        $q = "SELECT * FROM class_room ";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query)){
    ?>
        <tr>
            <td> <?php echo $res['id'];  ?> </td>
            <td> <?php echo $res['class_room_name'];  ?> </td>
            <td> <?php echo $res['student_limit'];  ?> </td>
            <td> <button > <a href="http://localhost:8080/assignment_project/delete_class_room.php?id=<?php echo $res['id']; ?>">Delete</a></button></td>
            <td> <button > <a href="http://localhost:8080/assignment_project/update_class_room.php?id=<?php echo $res['id']; ?>"> Update </a> </button> </td>
        </tr>
    <?php 
    }
    ?>    
 </table> 
</div>
</div>
</body>
</html>