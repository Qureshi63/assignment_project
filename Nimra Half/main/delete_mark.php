<?php

include 'connect.php';

$id = $_GET['id'];

$q = " DELETE FROM mark WHERE id = $id ";

mysqli_query($con, $q);

header('location:display_mark.php');

?>