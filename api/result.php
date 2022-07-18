<?php
session_start();
$groupsdata=$_SESSION['groupsdata'];
?>
<html>
    <head>
    <title>
        Online Voting System
    </title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet3.css">
    </head>
<body style="background-image: url('../image8.jpg');">
    <center>
<div id="group1">
<table border="3" id="xxyy" align="center">
                <tr align="center">
                    <td>Symbol</td>
                    <td>PARTY NAME</td>
                    <td>WIN VOTES</td>
                </tr>
</table>
                <?php
                if($_SESSION['groupsdata'])
                {
                    for($i=0;$i<count($groupsdata);$i++)
                    {
                        ?>
            
                       <table border="3" align="center">
                            <td><img src="../uploads/<?php echo $groupsdata[$i]['photo']?>" height="100px" width="100px">
                    </td> <td><?php echo $groupsdata[$i]['name']?><br><br>
                    </td>
                         <td> <b>Votes: </b><?php echo $groupsdata[$i]['votes']?><br><br> 
                         </td>    
                       
                        </div>
                            <?php
                    }
                }
?>
            </div>
            </table>
    </center>

            </body>
            </html>