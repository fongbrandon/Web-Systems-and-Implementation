<?php
    session_start();
    if(isset($_POST['next'])){
        $_SESSION['Religion'] =$_POST['Religion'];
        $_SESSION['Nationality'] =$_POST['Nationality'];
        $_SESSION['male'] = $_POST['male'];
        $_SESSION['female'] = $_POST['female'];
        $_SESSION['eduq'] = $_POST['eduq'];
        $_SESSION['jobex'] = $_POST['jobex'];
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
            <form method="POST" action="page3.php" >
                
                <table>
                    <tr><td><h1>PHP Multi Page Form</h1></td></tr>
                    <tr><th>Religion</th></tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type='text' name='Religion' required>
                        </td>
                    </tr>
                    <tr><th>Nationality</th></tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type='text' name='Nationality' required>
                        </td>
                    </tr>
                    <tr><th>Gender</th></tr>
                    <tr><td colspan="2" align="center">
                        <label for="male">Male</label>
                        <input type='radio' id='male' name='male'required>
                        <label for="female">Female</label>
                        <input type='radio' id='female' name='female'></td>
                    </tr>
                    <tr><th>Education Qualiification</th></tr>
                    <tr><td colspan="2" align="center"><select name="eduq" id="eduq" required>
                        <option value="highschool">High School</option>
                        <option value="degree">Degree</option>
                        <option value="masters">Masters</option>
                        <option value="PHD">PHD</option>
                    </select></td></tr>
                    <tr><th>Job Experience</th></tr>
                    <tr><th><select name="jobex" id="jobex" required>
                        <option value="1 year">1 year</option>
                        <option value="2 year">2 year</option>
                        <option value="3+ years">3+ year</option>
                    </select></th></tr>
                    <tr><td colspan="2" align="center">
                        <input type ='reset' name='reset' value="RESET"></td> 
                        <td><input type ='submit' name='next' value="NEXT"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>