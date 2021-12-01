
<style type ="text/css">
    th{
        text-align: right;
    }
    h3{
        text-align: center;
    }
    table, th, td {
                border: 1px solid black;
            }
            th{
                background-color: #FFFF00;
            }
            td{
                background-color:#FF0000;
            }
            table{
                background-color: #6698FB;
            }
    body {
        /*background-image: url("bgpic.png");*/
        background-color: #cccccc;
    }
</style>
<table cellpadding='5' cellspacing='10' align="center" border="0">
        <form method="post" action="HSloginvalidate.php" >
        <tr><td colspan="2" style="background-color: #04AA6D">
            <h3>Calabar High School Login</h3>
        </td></tr>
        <tr><th>Username</th><td><input type="text" name = "username" style="border-radius: 10px;"></td></tr>
        <tr><th>Password</th><td><input type="password" name = "password" style="border-radius: 10px;"></td></tr>
        <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value ="1">Remember Me</td></tr>
        <tr><td colspan="2" align="center"><input type="submit" name = "login" value ="Login"></td></tr>
        </form>
</table>