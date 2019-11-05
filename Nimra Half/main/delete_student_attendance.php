<?php

include "connect.php";

$id = $_GET['id'];

$q = " DELETE FROM  student_attendance WHERE id = $id ";

mysqli_query($con, $q);

header('location:display_student_attendance.php');

?>