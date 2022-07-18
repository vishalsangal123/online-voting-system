<?php
     session_start();
     include('../api/connect.php');
?>
<html>
    <head>
        <title>Online Voting System - Registration</title>
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    </head>
    <body style="background-image: url('../uploads/image13.jpg');">
        <div > 
        <center>
        <h1 style="padding-top:30px;" class="white">Online Voting System</h1>
        <hr>
    
        <h3 class="white">Registration</h3>
        <form action="../api/register.php"  method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Enter Name">
            <input type="tel" name="mobile" placeholder="Enter Mobile" pattern="[0-9]{10}" id="nam"><br><br>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="password" name="cpassword" placeholder="Confirm Password"><br><br>
            <input type="text" name="address" placeholder="Address" id="address"><br><br>
            <input type="number" name="age" placeholder="Age" id="address"><br><br>
            <input type="tel" name="aadhar" placeholder="AAdhar Number" id="aadhar" pattern="[0-9]{16}"><br><br>
            <input type="tel" placeholder="Enter OTP " name="verify" id="otp">
            <button type="button" onclick="generate()" id="ddd">Send OTP</button><br><br>
            <div id="imagepart" class="white">
            Upload Image: <input type="file" name="photo">
            </div>
           <br>
            <div id="role" class="white"> 
            Select role :<select name="role"> 
                <option value="1" selected>Voter</option>
                <option value="2">Group</option> 
            </select>
            </div> 
            
            <br>
            <button id="loginbtn" onmouseover="change()">Register</button><br><br>
            <i style="color:azure">Already user?</i><a style="color:white;" href="../index.html">Login Here</a>
           
            <script type='text/javascript'>
               
                function change()
                {
                    document.getElementById("loginbtn").style.color="red";
                    document.getElementById("loginbtn").style.backgroundImage="linear-gradient(red, yellow, green)";
    
                }
                function generate()
                {
                     var value=Math.floor((Math.random() * 9000) +1000);
                         console.log(value);
                    //  document.cookie="gener=a";
                
                
                }
            </script>            
                    

        </form>
    </center>
    </div>
    </body>
</html>