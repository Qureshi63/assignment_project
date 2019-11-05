<?php
include "connect.php";
if(isset($_POST['done']))
{
    $grade = $_POST['grade'];
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $class = $_POST['class'];
    $fee = $_POST['fee'];
    $q = " INSERT INTO subject_routing(grade,subject, teacher,class,fee) 
     VALUES ('$grade','$subject','$teacher','$class','$fee')";
    $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Subject Routing
        </title>
    <link href="page5.css" rel="stylesheet">
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
            <h2>Subject<h2>
        </div>
        <hr>
        <div class="main">
        <form method="post">
        <h3>Add Subject Routing<h3>
        <label>Grade</label>
            <select name="grade" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="a+">A+</option>
                <option value="a">A</option>
                <option value="b+">B+</option>
                <option value="b">B</option>
                <option value="c+">C+</option>
                <option value="c">C</option>
                <option value="f">F</option>
            </select>

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
        
        <label>Teacher</label>
            <select name="teacher" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="Dr. Maaz Rehan">Dr. Maaz Rehan</option>
                <option value=" Abdullah Naeem Raja"> Abdullah Naeem Raja</option>
                <option value="Waheed Ahmed Khan">Waheed Ahmed Khan</option>
                <option value="Yasmin Khaliq">Yasmin Khaliq</option>
                <option value="Dr. Saeed ur Rehman">Dr. Saeed ur Rehman</option>
                <option value="Dr. Jamal Hussain Shah">Dr. Jamal Hussain Shah</option>
            </select>
        
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
        
        <label>Fee</label>
            <input class="y" type="text" name="fee" value="" required >
        <br> 
            <input class="student" style="font-size: 20px;background-color:white;" type=submit  value='Save' name="done">
            <input class="b1" style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;" type="display" name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_subject_routing.php'">
        </form>  
        </div>
       
</body>
</html>