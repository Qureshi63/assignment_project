<?php

include "connect.php";

$id = $_GET['id'];

$q = " DELETE FROM teacher WHERE id = $id ";

mysqli_query($con, $q);

header('location:display_teacher.php');

?>