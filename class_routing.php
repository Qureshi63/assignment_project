<?php
include 'connect.php';
if(isset($_POST['done']))
{
    $day= $_POST['day'];
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $class = $_POST['class'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $q = " INSERT INTO  class_routing(day,subject,teacher,class,start_time,end_time) 
     VALUES ('$day','$subject','$teacher','$class','$start_time','$end_time')";
    $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Class Routing
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
            <h2>Class<h2>
        </div>
        <hr>
        <div class="main">
        <form method="post">
        <h3>Add Class Routing<h3>
        <label>Day</label>
            <select name="day" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
                <option value="saturday">Saturday</option>
                <option value="sunday">Sunday</option>
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
                <option value="mr.khan">Mr.Khan</option>
                <option value="mr.ali">Mr.Ali</option>
                <option value="dr.harris">Dr.Harris</option>
                <option value="mr.ibrahim">Mr.Ibrahim</option>
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
        
            <input class="y" type="text" name="start_time" value="" placeholder="Start Time" required >
            <input class="y" type="text" name="end_time" value="" placeholder="End Time" required >
        <br> 
        <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='Save' name="done">
            <input style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;" type="display" name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_class_routing.php'">
         </form>  
        </div>
     
</body>
</html>