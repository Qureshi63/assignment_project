<?php

include 'connect.php';

$id = $_GET['id'];

$q = " DELETE FROM exam WHERE id = $id ";

mysqli_query($con, $q);

header('location:display_exam.php');

?>