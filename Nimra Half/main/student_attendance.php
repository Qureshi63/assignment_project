<?php
include 'connect.php';
if(isset($_POST['done']))
{
    $roll_number = $_POST['roll_number'];
    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $month = $_POST['month'];
    $q = " INSERT INTO student_attendance(roll_number,class,subject,date,time,month) 
     VALUES ('$roll_number','$class','$subject', '$date','$time','$month')";
    $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Student Attendance
        </title>
    <link href="page6.css" rel="stylesheet">
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
            <h2>Student Attendance<h2>
        </div>
        <hr>
        <div class="main">
        <form method="post">
        <h2>Add Attendance<h2>
        <label>Roll No.</label>
            <input class="y" type="text" name="roll_number" value="" required >
        <br> 
        <label>Class</label>
            <select name="class" class="o">
                <option value="undefined">undefned</option>  
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
        <label>Subject</label>
            <select name="subject" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="web_technology">Web Technologies</option>
                <option value="pak.study">Pak.Study</option>
                <option value="automata">Automata</option>
                <option value="hci">HCI</option>
                <option value="machine_learning">Machine Learning</option>
                <option value="computer_vision">Computer Vision</option>
            </select>
        <br>
        <label>Date</label>
            <input class="y" type="text" name="date" value="" required >
        <br> 
        <label>Time</label>
            <input class="y" type="text" name="time" value="" required >
        <br> 
        <label>Month</label>
            <input class="y" type="text" name="month" value="" required >
        <br> 
        <input class="student" style="font-size: 20px;background-color:white;" type=submit  value='Save' name="done">
            <input class="b1" style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;" type="display" name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_student_attendance.php'">
            
        </form>  
        </div>
       
</body>
</html>