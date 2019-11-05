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
        onclick="window.location.href='http://localhost:8080/assignment_project/student_attendance.php'">
    <br>
    </p>
 <h1> All Student Attendance </h1>
 <br>
 <table>
    <tr>
    <th> Id </th>
    <th> Roll Number </th>
    <th> Class </th>
    <th> Subject </th>
    <th> Date </th>
    <th> Time </th>
    <th> Month </th>
    <th> Delete </th>
    <th> Update </th>
    </tr >
    <?php
    include "connect.php";
        $q = "SELECT * FROM student_attendance ";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query)){
    ?>
        <tr>
            <td> <?php echo $res['id'];  ?> </td>
            <td> <?php echo $res['roll_number'];  ?> </td>
            <td> <?php echo $res['class'];  ?> </td>
            <td> <?php echo $res['subject'];  ?> </td>
            <td> <?php echo $res['date'];  ?> </td>
            <td> <?php echo $res['time'];  ?> </td>
            <td> <?php echo $res['month'];  ?> </td>
             <td> <button > <a href="http://localhost:8080/assignment_project/delete_student_attendance.php?id=<?php echo $res['id']; ?>">Delete</a></button></td>
            <td> <button > <a href="http://localhost:8080/assignment_project/update_student_attendance.php?id=<?php echo $res['id']; ?>"> Update </a> </button> </td>
       
        </tr>
    <?php 
    }
    ?>    
 </table>
</div>
</div>
</body>
</html>