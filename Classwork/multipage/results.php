<?php
    session_start ();
    if(isset($_POST['next'])){
        $_SESSION['fullname'] =$_POST['fullname'];
        $_SESSION['email'] =$_POST['email'];
        $_SESSION['contact'] = $_POST['contact'];
        $_SESSION['Religion'] =$_POST['Religion'];
        $_SESSION['Nationality'] =$_POST['Nationality'];
        $_SESSION['eduq'] = $_POST['eduq'];
        $_SESSION['jobex'] = $_POST['jobex'];
        $_SESSION['male'] = $_POST['male'];
        $_SESSION['female'] = $_POST['female'];
        $_SESSION['Addressl1'] =$_POST['Addressl1'];
        $_SESSION['Addressl2'] = $_POST['Addressl2'];
        $_SESSION['City'] = $_POST['City'];
        $_SESSION['PinCode'] = $_POST['PinCode'];
        $_SESSION['State'] = $_POST['State'];
    }
?>

<html>
    <head>
        <title>Log In Multipage Form </title>
    </head>
    <body>
        <form method="POST" action="SocialMediaAct.php">
            <table align="center">
                <tr><td><h4>Here is what you have entered.</h4><br/></td></tr>
                <tr><td><p>Full Name: <?php echo $_SESSION['fullname']; ?> </p></td></tr>
                <tr><td><p>Email: <?php echo $_SESSION['email']; ?></p></td></tr>
                <tr><td><p>Contact: <?php echo $_SESSION['contact'];?></p></td></tr>
                <tr><td><p>Religion: <?php echo $_SESSION['Religion'];?></p></td></tr>
                <tr><td><p>Nationality: <?php echo $_SESSION['Nationality']; ?> </p></td></tr>
                <tr><td><p>Education Qualiification: <?php echo $_SESSION['jobex']; ?></p></td></tr>
                <tr><td><p>Job Experience: <?php echo $_SESSION['contact'];?></p></td></tr>
                <tr><td><p>Gender: <?php echo $_SESSION['male'];?><?php echo $_SESSION['female'];?></p></td></tr>
                <tr><td><p>Address line 1: <?php echo $_SESSION['Addressl1'];?></p></td></tr>
                <tr><td><p>Address line 2: <?php echo $_SESSION['Addressl2'];?></p></td></tr>
                <tr><td><p>City: <?php echo $_SESSION['City'];?></p></td></tr>
                <tr><td><p>Pin Code: <?php echo $_SESSION['PinCode'];?></p></td></tr>
                <tr><td><p>State: <?php echo $_SESSION['State'];?></p></td></tr>
            </table>
        </form>>
    </body>
</html>