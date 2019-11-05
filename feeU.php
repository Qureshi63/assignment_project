<!DOCTYPE html>
<html>
    <head>
        <title>Fee Update</title>
        <link href="update.css" rel="stylesheet">
    </head>
    <body>
    <p align="right">
        <input class="b1" type="submit" name="Go Back" value="Go Back" 
        onclick="window.location.href='http://localhost:8080/assignment_project/Nimra%20Half/Fees.html'">
    <br>
    </p>
        <form action="feeupdate.php" method="post">
            <label>ChallanNo</label>
                <input type="text" name="ChallanNo" placeholder="ChallanNo" />
            <br>
            <label>Description</label>
                <input type="text" name="Description" placeholder="Description" />
            <br>
            <label>DueDate</label>
                <input type="text" name="DueDate" placeholder="DueDate" />
            <br>
            <label>AmountDue</label>
                <input type="text" name="AmountDue" placeholder="AmountDue" />
            <br>
                <a href="feeupdate.php"><button type="submit">Update</button>
        </form>
    </body>
</html>