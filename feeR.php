<?php
include 'conn.php';
$ChallanNo = $_POST['ChallanNo'];
$Description = $_POST['Description'];
$DueDate = $_POST['DueDate'];
$AmountDue = $_POST['AmountDue'];



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO studentfees (ChallanNo , Description , DueDate , AmountDue)
VALUES ('$ChallanNo', '$Description', '$DueDate','$AmountDue')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>