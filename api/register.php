<?php
include('connect.php');
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$address=$_POST['address'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$role=$_POST['role'];
$aadhar=$_POST['aadhar'];
$verify=$_POST['verify'];
$gener=5252;
$age=$_POST['age'];

$sql1="Select aadhar from user where aadhar='$aadhar'";
$result1=mysqli_query($connect,$sql1);
if(mysqli_num_rows($result1)>0)
{
  echo "
  <script>
  alert('You are already registered with same AADHAR CARD NUMBER');
  window.location='../routers/register1.php';
  </script>
  ";
  return false;
}


if(empty($name))
{

  echo "
        <script>
         alert('Username should not be empty');
         window.location='../routers/register1.php';
         </script>
         ";
         return false;

}
if(empty($address))
{
  echo "
        <script>
         alert('Address should not be empty');
         window.location='../routers/register1.php';
         </script>
         ";
         return false;
}
if(empty($mobile))
{

  echo "
        <script>
         alert('Enter your mobile number');
         window.location='../routers/register1.php';
         </script>
         ";
         return false;
}
if($verify!=$gener)
{
  echo "
           <script>
           alert('Wrong OTP');
           window.location='../routers/register1.php';
          </script>
         ";

}
if($age<18)
{
  echo "
           <script>
           alert('You are not valid for Voting Age <18');
           window.location='../routers/register1.php';
          </script>
         ";

}
if($cpassword==$password)
{
     move_uploaded_file($tmp_name,"../uploads/$image");
     $insert=mysqli_query($connect,"INSERT INTO user(name,mobile,address,password,photo,role,status,votes,aadhar,verify,age) VALUES('$name' , '$mobile' , '$address' ,'$password','$image','$role',0,0,'$aadhar','$verify','$age')");
   if($insert)
   {
    echo "
           <script>
           alert('Registration Successfull!!');
           window.location='../';
          </script>
         ";
   }
   else
   {

    echo "
    <script>
    alert('Some error occurred');
    window.location='../routers/register1.php';
   </script>
  ";

   }  
}
else
{
    echo "
        <script>
         alert('Password and Confirm Password does not match');
         window.location='../routers/register1.php';
         </script>
         ";
         return false;
}
