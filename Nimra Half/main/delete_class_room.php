<?php

include 'connect.php';

$id = $_GET['id'];

$q = " DELETE FROM class_room WHERE id = $id ";

mysqli_query($con, $q);

header('location:display_class_room.php');

?>