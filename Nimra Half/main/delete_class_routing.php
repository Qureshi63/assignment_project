<?php

include "connect.php";

$id = $_GET['id'];

$q = " DELETE FROM class_routing WHERE id = $id ";

mysqli_query($con, $q);

header('location:display_class_routing.php');

?>