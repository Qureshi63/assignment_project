
    <?php

include 'conn.php';
$RegisterationNumber = $_POST['RegisterationNumber'];
$FullName = $_POST['FullName'];
$FatherName = $_POST['FatherName'];
$Nationality = $_POST['Nationality'];
$DateOfBirth = $_POST['DateOfBirth'];
    $id = $_POST['id'];
    $q = " UPDATE profile set id=$id, RegisterationNumber ='$RegisterationNumber', FullName='$FullName' , Nationality ='$Nationality' , DateOfBirth='$DateOfBirth' where id=$id  ";

    $query = mysqli_query($conn,$q);
    echo "Record has been updated";
   

?>
