<?php
include 'connect.php';
if(isset($_POST['update']))
{
    $id = $_GET['id'];
    $grade = $_POST['grade'];
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $class = $_POST['class'];
    $fee = $_POST['fee'];
    $q = " UPDATE subject_routing SET grade='$grade',subject='$subject', 
    teacher='$teacher',class='$class',fee='$fee' WHERE id=$id";
    $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
 <link href="update.css" rel="stylesheet">
</head>
<body>
<p align="right">
        <input class="b1" type="submit" name="Go Back" value="Go Back" 
        onclick="window.location.href='http://localhost:8080/assignment_project/add_student.php'">
    <br>
    </p>

 <div class="main">
        <form method="post">
        <h3>Subject Routing<h3>
        <label>Grade</label>
            <select name="grade" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="a+">A+</option>
                <8option value="a">A</option>
                <option value="b+">B+</option>
                8<option value="b">B</option>
                <option value="c+">C+</option>
                <option value="c">C</option>
                <option value="f">F</option>
            </select>
        <br><br>
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
        <br><br>
        <label>Teacher</label>
            <select name="teacher" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="mr.khan">Mr.Khan</option>
                <option value="mr.ali">Mr.Ali</option>
                <option value="dr.harris">Dr.Harris</option>
                <option value="mr.ibrahim">Mr.Ibrahim</option>
            </select>
        <br><br>
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
        <br><br>
        <label>Fee</label>
            <input class="y" type="text" name="fee" value="" required >
        <br><br> 
        <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='update' name="update">
    <input style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;"  name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_subject_routing.php'">
    <input style="color: rgb(0, 0, 0);width: 100px;
            box-align:right;font-size:20px;" name="New Data" value="New Data" 
        onclick="window.location.href='http://localhost:8080/assignment_project/subject_routing.php'">
     </div>
 </form>
 </div>
</body>
</html>