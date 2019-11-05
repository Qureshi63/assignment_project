<?php
include 'connect.php';
if(isset($_POST['done']))
{
    $username = $_POST['text'];
    $password = $_POST['password'];
    $q = " INSERT INTO teacher_login(`username`, `password`) VALUES ( '$username', '$password' )";

    $query = mysqli_query($con,$q);

    if ($username =='noor' AND $password=='noor')
    {
        header("Location:teacher2pg.php");
    } 
    elseif ($username =='nimra' AND $password=='nimra') 
    {
        header("Location:teacher2pg.php");
    } 
    else 
    {
        echo"wrong username or password";
    } 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Teacher Login
    </title>
    <link href="main.css" rel="stylesheet">
</head>
<p align="right">
        <input class="b1" type="submit" name="Go Back" value="Go Back" 
        onclick="window.location.href='http://localhost:8080/assignment_project/main.php'">
    <br>
    </p>
<body class="teacher_login">
    <div class="box">
        <h3>
            Teacher Login
        </h3>
        <form method="post">
            <label>Username</label>
            <input type="text" name="text" required>
        <br>
            <label>Password</label>
            <input type="password" name="password" value="" required >
        <br>
            <input class="b2" style="font-size: 20px;" type=submit  value='Login'  name="done">
            <br><br><br>
        </form>    
    </div>
</body>
</html>