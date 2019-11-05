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
        onclick="window.location.href='http://localhost:8080/assignment_project/add_student.php'">
    <br>
    </p>
 <h1> Students </h1>
 <br>
 <table>
    <tr>
    <th> Id </th>
    <th> Roll No. </th>
    <th> Full Name </th>
    <th> Date of Birth </th>
    <th> Age </th>
    <th> Gender </th>
    <th> Address </th>
    <th> Phone Number </th>
    <th> Email</th>
    <th> Delete </th>
    <th> Update </th>
    </tr >
    <?php
        include "connect.php";
        $q = "SELECT * FROM add_student";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query)){
    ?>
        <tr>
            <td> <?php echo $res['id'];  ?> </td>
            <td> <?php echo $res['roll_number'];  ?> </td>
            <td> <?php echo $res['full_name'];  ?> </td>
            <td> <?php echo $res['date_of_birth'];  ?> </td>
            <td> <?php echo $res['age'];  ?> </td>
            <td> <?php echo $res['gender'];  ?> </td>
            <td> <?php echo $res['address'];  ?> </td>
            <td> <?php echo $res['phone_number'];  ?> </td>
            <td> <?php echo $res['email'];  ?> </td>
            <td> <button > <a href="http://localhost:8080/assignment_project/delete_add_student.php?id=<?php echo $res['id']; ?>">Delete</a></button></td>
            <td> <button > <a href="http://localhost:8080/assignment_project/update_add_student.php?id=<?php echo $res['id']; ?>"> Update </a> </button> </td>
       
        </tr>
    <?php 
    }
    ?>    
 </table>  
</div>
</div>
</body>
</html>