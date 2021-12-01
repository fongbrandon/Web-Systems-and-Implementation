<html>
    <head>
        <style>
            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php
            $parishes=array("Hanover","St. Elizabeth","St.James","Trelawny","Westmoreland","Clarendon","Manchester","St. Ann",
            "St. Catherine","St. Mary","Kingston","Portland","St.Andrew","St. Thomas");
        ?>

        <table id="customers">
        <tr>
            <td><?= $parishes[0]?></td>
            <td><?= $parishes[1]?></td>
            <td><?= $parishes[2]?></td>
            <td><?= $parishes[3]?></td>
            <td><?= $parishes[4]?></td>
        </tr>
        <tr>
            <td><?= $parishes[5]?></td>
            <td><?= $parishes[6]?></td>
            <td><?= $parishes[7]?></td>
            <td><?= $parishes[8]?></td>
            <td><?= $parishes[9]?></td>
        </tr>
        <tr>
            <td><?= $parishes[10]?></td>
            <td><?= $parishes[11]?></td>
            <td><?= $parishes[12]?></td>
            <td><?= $parishes[13]?></td>
        </tr>
        </table>
    </body>
</html>