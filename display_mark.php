<!DOCTYPE html>
<html>
<head>
<style>
@media only screen and (max-width: 768px) {
}
</style>
<link href="display.css" rel="stylesheet">
</head>
<body>
    <p align="right">
        <input class="b1" type="submit" name="Go Back" value="Go Back" 
        onclick="window.location.href='http://localhost:8080/assignment_project/mark.php'">
    <br>
    </p>
 <h1> All Student Marks </h1>
    
 <table>
    <tr>
    <th> Id </th>
    <th> Subject </th>
    <th> Teacher </th>
    <th> Class </th>
    <th> Total Marks </th>
    <th> Marks Recieved</th> 
    <th> Grade </th>   
    <th> Delete </th>
    <th> Update </th>
    </tr >
    <?php
        include "connect.php";
        $q = "SELECT * FROM mark ";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query)){
    ?>
        <tr>
            <td> <?php echo $res['id'];  ?> </td>
            <td> <?php echo $res['subject'];  ?> </td>
            <td> <?php echo $res['teacher'];  ?> </td>
            <td> <?php echo $res['class'];  ?> </td>
            <td> <?php echo $res['marks_total'];  ?> </td>
            <td> <?php echo $res['marks_recieved'];  ?> </td>
            <td> <?php echo $res['grade'];  ?> </td>
           <td> <button > <a href="http://localhost:8080/assignment_project/delete_mark.php?id=<?php echo $res['id']; ?>">Delete</a></button></td>
            <td> <button > <a href="http://localhost:8080/assignment_project/update_mark.php?id=<?php echo $res['id']; ?>"> Update </a> </button> </td>
       
        </tr>
    <?php 
    }
    ?>    
 </table>   
</div>
</div>
</body>
</html>