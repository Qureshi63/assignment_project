<?php

include 'connect.php';

 if(isset($_POST['update']))
 {
 $id = $_GET['id'];
 $class_room_name = $_POST['class_room_name'];
 $student_limit = $_POST['student_limit'];
 $q = " UPDATE class_room SET id=$id, class_room_name='$class_room_name', 
 student_limit='$student_limit' WHERE id=$id  ";
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

<form method="post">
 <p align="right">
        <input class="b1" type="submit" name="Go Back" value="Go Back" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_class_room.php'">
    <br>
    </p>
 <h1 >  Update </h1>
 </div><br>

 <label> Class Room Name: </label>
 <input type="text" name="class_room_name" > <br><br>

 <label> Student Limit: </label>
 <input type="text" name="student_limit" > <br><br>

    <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='update' name="update">
    <input style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;"  name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_class_room.php'">
    <input style="color: rgb(0, 0, 0);width: 100px;
            box-align:right;font-size:20px;" name="New Data" value="New Data" 
        onclick="window.location.href='http://localhost:8080/assignment_project/class_room.php'">
            
    </div>
 </form>
 </div>
</body>
</html>