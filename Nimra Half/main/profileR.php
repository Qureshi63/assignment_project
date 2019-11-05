<?php
include 'conn.php';
$RegisterationNumber = $_POST['RegisterationNumber'];
$FullName = $_POST['FullName'];
$FatherName = $_POST['FatherName'];
$Nationality = $_POST['Nationality'];
$DateOfBirth = $_POST['DateOfBirth'];
$EmailAddress = $_POST['EmailAddress'];
$ContactNumber = $_POST['ContactNumber'];
$ContactPerson = $_POST['ContactPerson'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO profile (RegisterationNumber, FullName, FatherName , Nationality , DateOfBirth , EmailAddress , ContactNumber , ContactPerson )
VALUES ('$RegisterationNumber', '$FullName', '$FatherName', '$Nationality', '$DateOfBirth', '$EmailAddress', '$ContactNumber', '$ContactPerson' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>