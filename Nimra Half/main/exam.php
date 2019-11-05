<?php
include "connect.php";
if(isset($_POST['done']))
{
    $class = $_POST['class'];
    $exam_name = $_POST['exam_name'];
    $q = " INSERT INTO exam(class, exam_name) 
    VALUES ( '$class', '$exam_name' )";
    $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Exam
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
            <h2>Exam<h2>
        </div>
        <hr>
        <div class="main">
        <form method="post">
        <h3>Add Exam<h3>
        <label>Select Class</label>
            <select name="class" class="o">
                <option value="undefined">undefined</option>  
                <option value="1st">1st</option>  
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
                <option value="5th">5th</option>
                <option value="6th">6th</option>
                <option value="7th">7th</option>
                <option value="8th">8th</option>
            </select>
            <br>
            <label>Exam Name</label>
            <input class="y" type="text" name="exam_name" value="" required >
        <br><br>
        <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='Save' name="done">
            <input style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;" type="display" name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_exam.php'">
        <br>
        </form>  
        </div>
</body>
</html>