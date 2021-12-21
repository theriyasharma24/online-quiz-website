<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign Up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="img/favicon-32x32.png">
</head>
<body onload="document.getElementById('box1').style.display='block'" style="width:auto;">
    <div id='box1' class="signupdeet">
        <form class="signupdeet-content" action="login.html">
        
        <div id='box1' class="containerInfo">
          <span onclick="location.href='index.html'" class="close" title="Close ">&times;</span>
            <div>
              <h1 style="position:relative;bottom:27px;padding-bottom:10px;padding-top:10px;background-color:antiquewhite; font-size:40px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><center><span style=" color:#634770;">Quiz</span><span style="color:#113b49;">zers</span></center></h1>
            </div>
            <h2 style="position:relative;bottom:27px; margin-bottom:-.5vw;color:#300c41; font-size:30px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><center>SIGN UP</center></h2>

            
            <fieldset> <legend>Username or email</legend><label for="uname"></label>
                <input type="text" name="uname" title="Username or email"required></fieldset>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
           <fieldset><legend>Password</legend><label for="psw"></label>
                <input type="password" name="psw" id="password" title="password"required></fieldset>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            <fieldset style="margin-top:-1.5vw;"><legend>Confirm Password</legend>
                <input type="password" id="confirm_password" name="cpsw" required></fieldset>
                <br>
      <button class="signup-button" type="submit" title="Sign Up"><center>Sign Up</center></button>
      <br>
      <span style="float: left;"><label>
        <input type="checkbox" checked="checked" name="remember" title="Remember Me"> Remember me
      </label></span>
      <span class="psw"><a href='#'>Forgot password?</a></span>
      <br>
      <br>
      <p><center>Already a Quizzer? <a href='http://localhost/log/login.php/'>Click Here to Login</a></center></p>
        </div>
        
    </form>
    
    </div>
</body>
<style>
    p{
    font-size:x-small;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman';
    padding-top: 9px; 
    padding-left: 590px;

 }
input[type=text], input[type=password]{
    width: 90%;
    padding: 6px 10px;
    margin: 2px 2px;
    display: inline-block;
    border-style: solid;
    border-width: 0px 0px 1px 0px;
  }
.signup-button {
    background-color: #88619a;
    color: white;
    font-size:120%;
    margin: 29px 170px;
    border: none;
    cursor: pointer;
    width: 100px;
    height:40px;
    float: center;
  }
  
.signup-button:hover {
    opacity: 0.8;
  }
  
.signupdeet {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.4); /*Black w/ opacity*/
    
    
  }
  
  .signupdeet-content {
    background-color: #fefefe;
    margin: 1% auto 30% auto;
    border: 1px solid #888;
    width: 500px; /* Could be more or less, depending on screen size */
    height: 700px;
  }
  .close {
  position: absolute;
  left:850px;
  right:100px;
  top: 15px;
  color: #000;
  font-size: 25px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: darkred;
  cursor: pointer;
}
  .containerInfo {
      padding: 26px;
      margin:0px;
  }
  .containerImg{
      float: left;
      padding: 26px;
      margin: 0px;
  }
 
  legend { 
    display: block;
    padding-left: 2px;
    padding-right: 2px;
    border: none;
    color: rgb(85, 91, 97);
  }
  fieldset{
      align-self:left;
      border-color: #a480b4;
      box-sizing: border-box;
      border-style: round;
      float: right;
      padding-top: 20px;
      padding-right: 300px;
  }
  .no-outline:focus{
    outline:none;
  }
  span.psw {
    float: right;
  }
  h1{
      align-self: center;
  }
  h2
  {
    align-self: center;
    color: rgb(103, 84, 150);
  }
</style>
<?php
 $conn = mysqli_connect("localhost","root","","test");
 //check connection DOwVvlKrB!)N3ac0
 if($conn == false)
 {
 die("Could not connect");
 }
 //retreive the form data
 $suname = $_REQUEST['uname'];
 $spsw = $_REQUEST['psw'];
$db_query = "INSERT INTO login VALUES('$suname','$spsw')";

 
 if(mysqli_query($conn,$db_query))
 {
 echo "<script language ='javascript'>";
 echo "window.location.href='http://localhost/log/login.php/'";
 echo "</script>";
 }
 else
 {
 echo "<script language ='javascript'>";
 echo "validatepassword();";
 echo "</script>";
 }
 mysqli_close($conn);
 ?>
<script>
    var password=document.getElementById("password");
    var confirm_password=document.getElementById("confirm_password");

    function validatePassword()
    {
        if(password.value!=confirm_password.value)
        {
            confirm_password.setCustomValidity('Passwords do not match');
        }
        else
        {
            confirm_password.setCustomValidity('')
        }
    }
    password.onchange=validatePassword;
    confirm_password.onkeyup=validatePassword;
</script>
</html>
