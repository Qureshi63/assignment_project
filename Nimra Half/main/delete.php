<?php

include 'connect.php';

$id = $_GET['id'];

$q = " DELETE FROM `` WHERE id = $id ";

mysqli_query($con, $q);

header('location:.php');

?>