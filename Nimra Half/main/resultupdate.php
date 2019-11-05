<?php

include 'conn.php';
$Name = $_POST['Name'];
$Semester = $_POST['Semester'];
$Program = $_POST['Program'];
    $id = $_POST['id'];
    $q = " UPDATE studentresult set id=$id, Name ='$Name', 
    Semester='$Semester' , Program ='$Program'  where id=$id  ";

    $query = mysqli_query($conn,$q);
    echo "Record has been updated";   

?>
