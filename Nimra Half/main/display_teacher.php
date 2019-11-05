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
        onclick="window.location.href='http://localhost:8080/assignment_project/teacher.php'">
    <br>
    </p>
 <h1> All Teachers </h1>
 <br>
 <table>
    <tr >
    <th> Id </th>
    <th> Full Name</th>
    <th> Gender </th>
    <th> Address </th>
    <th> Phone Number </th>
    <th> Email </th>
    <th> Delete </th>
    <th> Update </th>
    </tr >
    <?php
    include "connect.php";
        $q = "SELECT * FROM teacher ";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query)){
    ?>
        <tr >
            <td> <?php echo $res['id'];  ?> </td>
            <td> <?php echo $res['full_name'];  ?> </td>
            <td> <?php echo $res['gender'];  ?> </td>
            <td> <?php echo $res['address'];  ?> </td>
            <td> <?php echo $res['phone_number'];  ?> </td>
            <td> <?php echo $res['email'];  ?> </td>
            <td> <button > <a href="http://localhost:8080/assignment_project/delete_teacher.php?id=<?php echo $res['id']; ?>">Delete</a></button></td>
            <td> <button > <a href="http://localhost:8080/assignment_project/update_teacher.php?id=<?php echo $res['id']; ?>"> Update </a> </button> </td>
       
        </tr>
    <?php 
    }
    ?>    
 </table>  
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$('#tabledata').DataTable();
}) 
</script>
</div>
</div>
</body>
</html>