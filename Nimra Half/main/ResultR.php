<?php
include 'conn.php';
$Name = $_POST['Name'];
$Semester = $_POST['Semester'];
$Program = $_POST['Program'];
$CourseNo = $_POST['CourseNo'];
$Credit = $_POST['Credit'];
$Marks = $_POST['Marks'];
$LG = $_POST['LG'];
$GP = $_POST['GP'];
$CGP = $_POST['CGP'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO studentresult (Name , Semester , Program , CourseNo , Credit , Marks , LG , GP , CGP)
VALUES ('$Name', '$Semester', '$Program', '$CourseNo', '$Credit', '$Marks', '$LG', '$GP', '$CGP')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>