<?php

include "connect.php";

$id = $_GET['id'];

$q = " DELETE FROM subject_routing WHERE id = $id ";

mysqli_query($con, $q);

header('location:display_subject_routing.php');

?>