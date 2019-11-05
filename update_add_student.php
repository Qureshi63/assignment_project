<?php
include 'connect.php';
if(isset($_POST['update']))
{
    $roll_number = $_POST['roll_number'];
    $full_name = $_POST['full_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $q = " UPDATE add_student SET roll_number='$roll_number',full_name='$full_name', date_of_birth='$date_of_birth',
    age='$age',gender='$gender',address='$address',phone_number='$phone_number',email='$email'
    ";
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
        <h3>Add Student<h3>
            <label>Roll No. </label>
            <input class="y" type="text" name="roll_number" required>
        <br><br>
            <label>Full Name</label>
            <input class="y" type="text" name="full_name" value="" required >
        <br><br>
        <label>Date of Birth</label>
            <input class="y" type="text" name="date_of_birth" value="" required >
        <br><br>
        <label>Age</label>
            <input class="y" type="text" name="age" value="" required >
        <br><br>
        <label>Gender</label>
            <select name="gender" class="o">
                <option value="undefined">U-Undefined</option>    
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        <br><br>
        <label>Address</label>
            <input class="y" type="text" name="address" value="" required >
        <br><br> 
        <label>Phone Number</label>
            <input class="y" type="text" name="phone_number" value="" required >
        <br><br>
        <label>Email</label>
            <input class="y" type="text" name="email" value="" required >
        <br><br> 
 
        <input class="classroom" style="font-size: 20px;background-color:white;" type=submit  value='update' name="update"> 
         <input style="color: rgb(0, 0, 0);width: 70px;
            box-align:right;font-size:20px;"  name="Display" value="Display" 
        onclick="window.location.href='http://localhost:8080/assignment_project/display_add_student.php'">
    <input style="color: rgb(0, 0, 0);width: 100px;
            box-align:right;font-size:20px;" name="New Data" value="New Data" 
        onclick="window.location.href='http://localhost:8080/assignment_project/add_student.php'">
     
        </form>  
 </div>
</body>
</html>