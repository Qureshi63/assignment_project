<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Teacher Data Display
        </title>
    <link href="page3.css" rel="stylesheet">
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
            <h2>Teacher Data Display<h2>
        </div>
        <hr>
        <div class="main">
        <form method="get">
        <div class="z">
 <div >
 <br><br>
 <h1> All Teachers </h1>
 <br>
 <table>
    <tr >
    <td> ID<input ?id=<?php echo $res['id'];?>> </td>
    <td> Full Name<input ?id=<?php echo $res['full_name'];?>> </td>
    <td> Gender<input ?id=<?php echo $res['gender'];?>> </td>
    <td> Address<input ?id=<?php echo $res['address'];?>> </td>
    <td> Phone Number<input ?id=<?php echo $res['phone_number'];?>> </td>
    <td> Email<input ?id=<?php echo $res['email'];?>> </td>
    </tr >
        </form>
    <?php
        $q = "SELECT * FROM teacher ";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query)){
    }
    ?>    
 </table>  
</div>
</div>
</body>
</html>