<!DOCTYPE html>
<html>
    <head>
        <title>Delete Fee</title>
    </head>
    <body>
    <p align="right">
        <input class="b1" type="submit" name="Go Back" value="Go Back" 
        onclick="window.location.href='http://localhost:8080/assignment_project/Nimra%20Half/Fees.html'">
    <br>
    </p>
        <h1> Delete </h1>
        <form action="feeremove.php" method="post">
                    <label>id</label>
                    <input type="text" name="id" placeholder="id number">

                    <a href="feeremove.php"><button type="submit">Delete</button>
        </form>
    </body>
</html>