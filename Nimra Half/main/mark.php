<?php
include "connect.php";
if(isset($_POST['done']))
{
    $grade = $_POST['grade'];
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $class = $_POST['class'];
    $marks_recieved = $_POST['marks_recieved'];
    $marks_total = $_POST['marks_total'];
    $q = " INSERT INTO mark(grade,subject, teacher,class,marks_recieved,marks_total) 
     VALUES ('$grade','$subject','$teacher','$class','$marks_recieved','$marks_total')";
    $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Subject Marks
        </title>
    <link href="page4.css" rel="stylesheet">
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
            <h2>Marks<h2>
        </div>
        <hr>
        <div class="main">
        <form method="post">
        <h3>Add Marks<h3>
        
        <label>Subject</label>
            <select name="subject" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="Web Technology">Web Technologies</option>
                <option value="Pak.Study">Pak.Study</option>
                <option value="Theory of Automata">Theory of Automata</option>
                <option value="HCI">HCI</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Computer Vision">Computer Vision</option>
            </select>
        <br>
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
        <label>Marks Recieved</label>
            <input class="y" type="text" name="marks_recieved" value="" style="background:transparent;" required >
        <br>
        <label>Marks Total</label>
            <input class="y" type="text" name="marks_total" value="" style="background:transparent;" required >
        <br>  
        <label>Grade</label>
            <select name="grade" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="A+">A+</option>
                <option value="A">A</option>
                <option value="B+">B+</option>
                <option value="B">B</option>
                <option value="C+">C+</option>
                <option value="C">C</option>
                <option value="F">F</option>
            </select>
        <br>
        <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='Save' name="done">
            <input style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;" type="display" name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_mark.php'">
        </form>  
        </div>
       
</body>
</html>