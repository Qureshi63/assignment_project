<?php
include 'conn.php';
$ChallanNo = $_POST['ChallanNo'];
$Description = $_POST['Description'];
$DueDate = $_POST['DueDate'];
$AmountDue = $_POST['AmountDue'];
    $id = $_POST['id'];
    $q = " UPDATE studentfees set id=$id, ChallanNo ='$ChallanNo', Description='$Description' , DueDate ='$DueDate' , AmountDue='$AmountDue' where id=$id  ";

    $query = mysqli_query($conn,$q);
    echo "Record has been updated";
?>
