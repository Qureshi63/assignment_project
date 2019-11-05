<?php
include 'connect.php';
if(isset($_POST['update']))
{

$id = $_GET['id'];
    $roll_number = $_POST['roll_number'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $time = $_POST['time'];
    $class = $_POST['class'];
    $q = " UPDATE  student_attendance SET roll_number='$roll_number', month='$month',
    subject='$subject',date='$date', class='$class', time='$time' WHERE id=$id";
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

 <div >
 
 <form method="post">
 <p align="right">
        <input class="b1" type="submit" name="Go Back" value="Go Back" 
        onclick="window.location.href='http://localhost:8080/assignment_project/add_student.php'">
    <br>
    </p>

 <div class="main1">
            <h2>Student Attendance<h2>
        </div>
        <div class="main">
        <form method="post">
        <label>Roll No.</label>
            <input class="y" type="text" name="roll_number" value="" required >
        <br> <br>
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
        <label>Date</label>
            <input class="y" type="text" name="date" value="" required >
        <br> <br>
        <label>Time</label>
            <input class="y" type="text" name="time" value="" required >
        <br> <br>
        <label>Month</label>
            <input class="y" type="text" name="month" value="" required >
        <br> <br>
        <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='update' name="update">
    <input style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;"  name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_student_attendance.php'">
    <input style="color: rgb(0, 0, 0);width: 100px;
            box-align:right;font-size:20px;" name="New Data" value="New Data" 
        onclick="window.location.href='http://localhost:8080/assignment_project/student_attendance.php'">
     
 </div>
 </form>
 </div>
</body>
</html>