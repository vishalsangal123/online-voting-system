<?php
session_start();
if(!isset($_SESSION['userdata']))
{
    header("location: ../");
}
$userdata=$_SESSION['userdata'];
$groupsdata=$_SESSION['groupsdata'];

if($_SESSION['userdata']['status']==0){

    $status = '<b style="color: red">Not Voted</b>';
    
}
else{
    $status = '<b style="color: #7cfc00">Voted</b>';
}




?>

<html>
    <head>
        <title>
     Online Voting System -Dashboard
        </title>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet3.css">
    </head>
    <body style="background-image: url('../image8.jpg');">
            <div id="mainSection">
            <center>
            <div id="headerSection">
           <a href="logout.php"><img src="../logout.jpg" style="height:80px;width:80px" id="logoutbtn"> </a>
           <a href="../api/result.php"> <img src="../image7.jpg" style="height:80px;width:80px" id="live"></a>
            <h1 id="xyz">Online Voting System</h1>
            </div>
            </center>

            <div id="mainpanel">
            <div id="profile">

              <center><img src="../uploads/<?php echo $userdata['photo'] ?>" height="100" width="100"><br><br></center>
              <b style="color:#FFD700;">NAME: </b><span style="color:#FFD700;text-transform:capitalize;"><?php echo $userdata['name'] ?><br><br>
              <b>MOBILE: </b><span style="color:#FFD700;text-transform:capitalize;"><?php echo $userdata['mobile'] ?><br><br>
              <b>ADDRESS: </b><span style="color:#FFD700;text-transform:capitalize;"><?php echo $userdata['address'] ?><br><br>
              <b style="color:#FFD700;">STATUS: </b><span style="color:#FFD700; text-transform:capitalize;"><?php echo $status ?></span><br><br>


            </div>

        

            <div id="group">
            <table border="3" id="xxyy">
                <tr>
                    <td>Symbol</td>
                    <td>PARTY NAME</td>
                    <td>VOTING</td>
                </tr>
            </table>
                <?php
                if($_SESSION['groupsdata'])
                {
                    for($i=0;$i<count($groupsdata);$i++)
                    {
                        ?>
                        <table border="3">
                                <tr>
                            <td><img src="../uploads/<?php echo $groupsdata[$i]['photo']?>" height="80px" width="80px">
                            </td>
                                     <td><?php echo $groupsdata[$i]['name']?><br><br>
                            <!-- <b>Votes: </b><?php echo $groupsdata[$i]['votes']?><br><br> -->
                     </td>
                            <form action="../api/vote.php" method="post">

                            <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']?>">
                            <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']?>">
                            <?php
                            if($_SESSION['userdata']['status']==0)
                            {?>
                          <td>  <input type="submit" name="votebtn" value="vote" id="votebtn"></td>
                            <?php
                             }
                             else
                             {
                                if($_SESSION['userdata']['status']==1)
                                {?>
                                   <td>  <input type="submit" name="votebtn" value="vote" id="votebtn" disabled></td>
                                
                                <?php
                                }
                                else{
                                    ?>
                               <td> <button disabled type="button" name="votebtn" value="vote" id="voted">Voted</button>
                             </td>
                             <?php
                                }
                            ?>
                            
                            </form>
                                </tr>
                            </table>
                        <?php
                        }
                    }
                    }
                  ?>
            </div>

            </div>
            </div>
        </body>
        </html>