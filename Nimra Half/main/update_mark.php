<?php
include 'connect.php';
if(isset($_POST['update']))
{
    $grade = $_POST['grade'];
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $class = $_POST['class'];
    $marks_recieved = $_POST['marks_recieved'];
    $marks_total = $_POST['marks_total'];
    $q = " UPDATE mark SET grade='$grade',subject='$subject', teacher='$teacher',
    class='$class',marks_recieved='$marks_recieved',marks_total='$marks_total' 
     SET id=$id";
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

 <form method="post">
 <div class="main1">
            <h2>Subject<h2>
        </div>
        <hr>
        <div class="main">
        <form method="post">
        <h3>Add Subject Routing<h3>
        
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
                <option value="Dr. Maaz Rehan">Dr. Maaz Rehan</option>
                <option value=" Abdullah Naeem Raja"> Abdullah Naeem Raja</option>
                <option value="Waheed Ahmed Khan">Waheed Ahmed Khan</option>
                <option value="Yasmin Khaliq">Yasmin Khaliq</option>
                <option value="Dr. Saeed ur Rehman">Dr. Saeed ur Rehman</option>
                <option value="Dr. Jamal Hussain Shah">Dr. Jamal Hussain Shah</option>
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
        <br> <br>
        <label>Marks Recieved</label>
            <input class="y" type="text" name="marks_recieved" value="" required >
        <br> <br>
        <label>Marks Total</label>
            <input class="y" type="text" name="marks_recieved" value="" required >
        <br> <br>
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
        <br><br>
            <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='Submit' name="submit">
    <input style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;"  name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_mark.php'">
    <input style="color: rgb(0, 0, 0);width: 100px;
            box-align:right;font-size:20px;" name="New Data" value="New Data" 
        onclick="window.location.href='http://localhost:8080/assignment_project/class_mark.php'">
      </form> 

</body>
</html>