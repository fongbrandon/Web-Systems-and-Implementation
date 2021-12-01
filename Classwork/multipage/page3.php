<?php
    session_start();
    if(isset($_POST['next'])){
        $_SESSION['Addressl1'] =$Addressl1;
        $_SESSION['Addressl2'] = $Addressl2;
        $_SESSION['City'] = $City;
        $_SESSION['PinCode'] = $PinCode;
        $_SESSION['State'] = $State;
    }
?>
<html>
    <head>
        <title>Log In Multipage Form </title>
    </head>
    <style type ="text/css">
        .backcolour{
            /*align-content: center;*/
            background-color: grey;
            width: 300px;
        }
        
    </style>
    <body style="background-color:blue">
        <div class="backcolour">
            <form method="POST" action="results.php" >
                <table>
                    <tr><td><h1>PHP Multi Page Form</h1></td></tr>
                    <tr><th>Address Line 1</th></tr>
                    <tr><td colspan="2" align="center"><input type='text' name='Addressl1' required></td></tr>
                    <tr><th>Address Line 2</th></tr>
                    <tr><td colspan="2" align="center"><input type='text' name='Addressl2' required></td></tr>
                    <tr><th>City</th></tr>
                    <tr><td colspan="2" align="center"><input type='text' name='City' required></td></tr>
                    <tr><th>Pin Code</th></tr>
                    <tr><td colspan="2" align="center"><input type='number' name='PinCode' required></td></tr>
                    <tr><th>State</th></tr>
                    <tr><td colspan="2" align="center"><input type='text' name='State' required></td></tr>
                    <tr><td colspan="2" align="center"><input type ='reset' name='reset' value="RESET"></td> 
                        <td><input type ='submit' name='next' value="NEXT"></td> </tr>
                </table>
            </form>
        </div>
    </body>


</html>