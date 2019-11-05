<?php
include 'connect.php';
if(isset($_POST['done']))
{
    $roll_number = $_POST['roll_number'];
    $full_name = $_POST['full_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $q = " INSERT INTO add_student(roll_number,full_name,
    date_of_birth,age,gender,address,phone_number,email) 
     VALUES ('$roll_number','$full_name', '$date_of_birth',
    '$age','$gender','$address','$phone_number','$email')";
    $query = mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Student
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
            <h2>Student<h2>
        </div>
        <hr>
        <div class="main">
        <form method="post">
        <h3>Add Student<h3>
            <label>Roll No. </label>
            <input class="y" type="text" name="roll_number" required>
        <br>
            <label>Full Name</label>
            <input class="y" type="text" name="full_name"  required >
        <br>
        <label>Date of Birth</label>
            <input class="y" type="text" name="date_of_birth"  required >
        <br>
        <label>Age</label>
            <input class="y" type="text" name="age" required >
        <br>
        <label>Gender</label>
            <select name="gender" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        <br>
        <label>Address</label>
            <input class="y" type="text" name="address"  required >
        <br>
        <label>Phone Number</label>
            <input class="y" type="text" name="phone_number" required >
        <br>
        <label>Email</label>
            <input class="y" type="text" name="email" required >
        <br> 
        <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='Save' name="done">
            <input style="color: rgb(0, 0, 0);width: 80px;
            box-align:right;font-size:20px;" type="display" name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_add_student.php'">
        </form>  
        </div>
  </div>

</body>
</html>