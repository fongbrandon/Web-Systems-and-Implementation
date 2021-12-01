<!DOCTYPE html>
<html>
    <head>
        <title>Display all records from Database</title>
    </head>
    <body>

        <table border="2">
        <tr>
            <td>Email.</td>
            <td>Password</td>
            <td>Remember</td>
        </tr>

    <?php

    include "DBConnect.php"; // Using database connection file here

    $records = mysqli_query($conn,"SELECT * FROM details"); // fetch data from database

    while($data = mysqli_fetch_array($records))
    {
    ?>
    <tr>
        <td><?php echo $data['Email_Address']; ?></td>
        <td><?php echo $data['Password']; ?></td>
        <td><?php echo $data['Remember']; ?></td>
    </tr>	
    <?php
    }
    ?>
    </table>

    <?php mysqli_close($conn); // Close connection ?>

    </body>
</html>