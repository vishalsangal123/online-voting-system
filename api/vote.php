<?php

session_start();
include('connect.php');
$votes=$_POST['gvotes'];
$total_votes=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['id'];
$sql="update user set votes='$total_votes' where id='$gid'";
$update_votes=mysqli_query($connect,$sql);
$update_user_status = mysqli_query($connect, "update user set status=1 where id='$uid'");


if($update_votes and $update_user_status)
{
    $groups = mysqli_query($connect, "select * from user where role=2 ");
    $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
    $_SESSION['userdata']['status'] = 1;
    $_SESSION['groupsdata'] = $groupsdata;
    echo '<script>
                alert("Voting successfull!");
                window.location = "../routers/dashboard.php";
            </script>';
}
else
{
    echo '<script>
                    alert("Voting failed!.. Try again.");
                    window.location = "../routers/dashboard.php";
                </script>';
}


?>
