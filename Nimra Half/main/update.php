<?php

include 'conn.php';

$id = $_GET['id'];

$q = " UPDATE FROM `` WHERE id = $id ";

mysqli_query($con, $q);

header('location:.php');

?>