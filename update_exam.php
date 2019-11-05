<?php

 include 'connect.php';

 if(isset($_POST['update']))
 {
 $id = $_GET['id'];
 $class = $_POST['class'];
 $exam_name = $_POST['exam_name'];
 $q = " UPDATE exam SET  class='$class', 
 exam_name='$exam_name' WHERE id=$id  ";
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

 <h1 >  Exam </h1>
 </div><br>
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
            <br><br>
            <label>Exam Name</label>
            
            <input class="y" type="text" name="exam_name" value="" required ><br><br>
            <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='update' name="update"> 
           <input style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;"  name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_exam.php'">
    <input style="color: rgb(0, 0, 0);width: 100px;
            box-align:right;font-size:20px;" name="New Data" value="New Data" 
        onclick="window.location.href='http://localhost:8080/assignment_project/exam.php'">
     
 </div>
 </form>
 </div>
</body>
</html>