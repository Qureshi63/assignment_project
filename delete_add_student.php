<?php

include 'connect.php';

$id = $_GET['id'];

$q = " DELETE FROM add_student WHERE id = $id ";

mysqli_query($con, $q);

header('location:display_add_student.php');

?>