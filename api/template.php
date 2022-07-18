<html>
    <head>
        <title>Template</title>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet1.css">
    </head>
    <body style="background-image: url('../uploads/imag.jpg');">
<?php
session_start();
include('connect.php');
$sql='select * from user where role=2';
$result=mysqli_query($connect,$sql);
?>
<table border="2" align="center">
<a href="../index.html"><button id="template">BACK</button></a>
    <caption align="center">PARTY NAME AND SYMBOL </caption>
    <tr>
    <th>S.No</th>
    <th>Name of the Party</th>
    <th>Foundation Year</th>
    <th>Party Symbol Name</th>
    <th>Image</th>
    </tr>
    
<?php
if(mysqli_num_rows($result)>0)
{
    $groupsdata = mysqli_fetch_all($result, MYSQLI_ASSOC);
    for($i=0;$i<count($groupsdata);$i++)
    {
        $x=$i+1;
        ?>
                
            <tr>
                <td><?php echo $x ?></td>
                <td><?php echo $groupsdata[$i]['name']?></td>
                <td><?php echo $groupsdata[$i]['foundation year']?></td>
                <td><?php echo $groupsdata[$i]['symbol name']?></td>
                <td><img src="../uploads/<?php echo $groupsdata[$i]['photo']?>" height="50px" width="50px"></td>
            </tr>                   
<?php
                    
    }

}

?>
</table>
</body>
</html>