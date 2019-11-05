<?php

include 'conn.php';

    $id = $_POST['id'];;

    $sql = "DELETE FROM profile WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully"."<br>";
        echo "<a href='feeD.php'><button type='button'>Back to Delete</button></a>";    
    }
    else
    {
        echo $id . " not found.<br>";
    }
    $conn->close();
?>