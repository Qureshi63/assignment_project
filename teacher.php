<?php
include "connect.php";
if(isset($_POST['done']))
{
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $q = " INSERT INTO teacher (full_name,gender,address,phone_number,email) 
    VALUES ('$full_name', '$gender','$address','$phone_number','$email')";
    $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Teacher
        </title>
    <link href="page3.css" rel="stylesheet">
    </head>
    <body>
    <div class="sidenav">
        <h1>List</h1>
        <a href="http://localhost:8080/assignment_project/teacher2pg.php">Dashboard</a> 
        <a href="http://localhost:8080/assignment_project/class_room.php">Class Room</a> 
        <a href="http://localhost:8080/assignment_project/teacher.php">Teachers</a>
        <a href="http://localhost:8080/assignment_project/subject_routing.php">Subject Routing</a>
        <a href="http://localhost:8080/assignment_project/student_attendance.php">Student Attendance</a>
        <a href="http://localhost:8080/assignment_project/class_routing.php">Class Routing</a>
        <a href="http://localhost:8080/assignment_project/add_student.php">Add Students</a>
        <a href="http://localhost:8080/assignment_project/mark.php">Marks</a>
        <a href="http://localhost:8080/assignment_project/exam.php">Exam</a>
        <a href="http://localhost:8080/assignment_project/teacher_login.php">Logout</a>
    </div>
        <div class="main1">
            <h2>Teacher<h2>
        </div>
        <hr>
        <div class="main">
        <form method="post">
        <h3>Add Teacher<h3>
            <label>Full Name</label>
            <input class="y" type="text" name="full_name" value="" required >
        <br>
        <label>Gender</label>
            <select name="gender" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        <br>
        <label>Address</label>
            <input class="y" type="text" name="address" value="" required >
        <br>
        <label>Phone Number</label>
            <input class="y" type="text" name="phone_number" value="" required >
        <br>
        <label>Email</label>
            <input class="y" type="text" name="email" value="" required >
        <br>
            <input class="teacher" style="font-size: 20px;background-color:white;" type=submit  value='Save' name="done">
            
            <input class="b1" style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;" type="display" name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_teacher.php'">
        <br>
        </form>  
        </div>
       
</body>
</html>