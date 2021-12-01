<?php
    // Start the session
    session_start();
    echo "<a href = 'HSLogout.php'>LOG OUT</a>";
?>
<!--<html>
    <head>
        <style>
            table, th, td {
                border: 2px solid black;
            }
            th{
                background-color: #FFFF00;
            }
            td{
                background-color:#FF0000;
            }
            table{
                background-color: #6698FB;
                text-align: center;
            }
            body {
                /*background-image: url("bgpic.png");*/
                background-color: #cccccc;
                text-align: center;
            }
                
            input[type=number]{
                width:7rem;
            }
        </style>
    </head>     
    <body>
        <p><strong>Welcome Admin </strong><p>
        <a href = 'HSLogout.php'>LOG OUT</a>
        
        <form method="POST" action="HSdisplay2.php">
            <table cellpadding='5' cellspacing='5' id="pg" align="center" border="0">
                <tr><td style="background-color: #04AA6D"><h1>Library system</h1></td></tr>
                <tr><th >Title</th></tr>
                <tr><td colspan="2" align="center">
                    <input type='text' name='title' placeholder="Title" required>
                </td></tr>
                <tr><th>Author</th></tr>
                <tr><td colspan="2" align="center">
                    <input type='text' name='author' placeholder="Brandon Fong" required>
                </td></tr>
                <tr><th>Year Published</th></tr>
                <tr><td colspan="2" align="center">
                    <input type='number' name='year_pub' placeholder="4-digit-number" min="1800" pattern="^/d{4}" max="2021" required>
                </td></tr>
                <tr><th>Book Cover</th></tr>
                <tr><td colspan="2" align="center"><span>
                    <input type="file" id="img" name="book_cover" accept="image/*" required>
                </td></tr>
                <tr><td colspan="2" align="center" style="background-color: #0055FF">
                    <input type ='submit' name='submit' value="Submit">
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <input type ='reset' name='next' value="Reset">
                </td> </tr>
            </table>
        </form>
    </body>
</html>-->
<html>
    <head>
        <title>Libary</title>
        <style>
            table, th, td {
                border: 2px solid black;
            }
            th{
                background-color: #FFFF00;
            }
            td{
                background-color:#FF0000;
            }
            table{
                /*background-color: #6698FB;*/
                text-align: center;
            }
            body {
                /*background-image: url("bgpic.png");*/
                text-align: center;
            }
                
            input[type=number]{
                width:7rem;
            }
        </style>
    </head>
    <style type ="text/css">
        .backcolour{
            align-content: center;
            background-color: grey;
            width: 300px;
        }
        
    </style>
    <body style="background-color:green">
        <div>
            <form method="POST" action="HSaddbook2.php" >
                <table align="center">
                    <tr><td><h1>Welcome Admin</h1></td></tr>
                    <tr><th >Title</th></tr>
                    <tr><td colspan="2" align="center">
                        <input type="text" name='title' placeholder="Title" required></td></tr>
                    <tr><th>Author</th></tr>
                    <tr><td colspan="2" align="center">
                        <input type="text" name='author' placeholder="author - iii@gmail.com" required></td></tr>
                    <tr><th>Year Published</th></tr>
                    <tr><td colspan="2" align="center">
                        <input type='number' name='year_pub' placeholder="4-digit-number" min="1800" pattern="^/d{4}" max="2021" required></td></tr>
                    <tr><th>Book Cover</th></tr>
                    <tr><td colspan="2" align="center">
                        <input type="file" id="img" name="book_cover" accept="image/*" required></td></tr> 
                    <tr><td colspan="2" align="center">
                        <input type ='submit' name='next' value="NEXT">
                        <input type ='reset' name='reset' value="RESET"></td> </tr>
                </table>
            </form>
        </div>
    </body>
</html>