<?php
session_start();
include('connect.php');
$aadhar=$_POST['aadhar'];
$password=$_POST['password'];
$role=$_POST['role'];
$sql="SELECT * FROM user where aadhar='$aadhar' AND password='$password' AND role='$role'";
$check=mysqli_query($connect,$sql);
if(mysqli_num_rows($check)>0)
{
    $userdata=mysqli_fetch_array($check);
    $groups=mysqli_query($connect,'SELECT * FROM user WHERE role=2 ');
    $groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);

    $_SESSION['userdata']=$userdata;
    $_SESSION['groupsdata']=$groupsdata;

    echo '<script>
    window.location="../routers/dashboard.php";
    </script>'
    ;

}
else
{

    echo "
    <script>
    alert('User not found');
    window.location='../';
   </script>
  ";

}
