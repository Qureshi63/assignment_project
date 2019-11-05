<?php
require_once 'connect.php' ;
if(isset($_POST['done']))
{
    $class_room_name = $_POST['class_room_name'];
    $student_limit = $_POST['student_limit'];
    $q = " INSERT INTO class_room(class_room_name, student_limit) 
    VALUES ( '$class_room_name', '$student_limit' )";
    $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Class Room
        </title>
    <link href="page2.css" rel="stylesheet">
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
            <h2>Class Room<h2>
        </div>
        <hr>
        <div class="main">
        <form method="post">
        <h3>Add Class Room<h3>
            <label>Class Room Name</label>
            <br>
            <input class="y" type="text" name="class_room_name" required>
        <br>
            <label>Student Limit</label>
            <br>
            <input class="y" type="text" name="student_limit" value="" required >
        <br><br>
            <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='Save' name="done">
            <input style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;" type="display" name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_class_room.php'">
        </form>  
        </div>
 
</div>
</div>
 
</body>
</html>