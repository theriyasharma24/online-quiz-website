<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="img/favicon-32x32.png">

    <style>
      p{
      font-size:x-small;
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman';
      padding-top: 9px; 
      padding-left: 590px;
  
   }
  input[type=text], input[type=password]{
      width: 90%;
      padding: 1px 10px;
      margin: 2px 0px;
      display: inline-block;
      border-style: solid;
      border-width: 0px 0px 1px 0px;
      border-color:none;
      outline:none;
      
    }
  .login-button {
      background-color: #88619a;
      color: white;
      font-size:120%;
      margin: -5vw 170px;
      margin-bottom: 8px;
      border: none;
      cursor: pointer;
      width: 100px;
      height:40px;
      float: center;
    }
    
  .login-button:hover {
      opacity: 0.8;
    }
    
  .logindeet {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgba(0,0,0,0.4); /*Black w/ opacity*/
      padding-top: 10px;
    }
    
    .logindeet-content {
      background-color: #fefefe;
      margin: 0.1% auto 30% auto;
      border: 1px solid #888;
      width: 500px; /* Could be more or less, depending on screen size */
      height: 605px;
    }
      .close {
    position: absolute;
    
    left:848px;
    right:100px;
    top: 20px;
    color: #000;
    font-size: 25px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    border-radius:3000px;
    color:darkred;
    cursor: pointer;
  }
    .containerInfo {
        padding: 26px;
        margin:0px;
    }
   
    legend { 
      display: block;
      padding-left: 2px;
      padding-right: 2px;
      border: none;
      color: rgb(85, 91, 97);
    }
    fieldset{
        align-self:baseline;
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
  
    table, th, td {
        
    border: 1px solid black;
    text-align:center;
    }
      
  </style>
</head>
<body onload="document.getElementById('box1').style.display='block'">
    <div id='box1' class="logindeet">
        <form class="logindeet-content"method="POST" action="index.html" onsubmit='validatePassword();'>
         <span onclick="location.href='index.html'" class="close" title="Close ">&times;</span>
        <div id='box1' class="containerInfo">
            <div style="position:relative; margin-top:-2vw;">
            <h1 style="padding-top:10px;padding-bottom:10px;background-color:antiquewhite; font-size:40px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><center><span style=" color:#634770;">Quiz</span><span style="color:#113b49;">zers</span></center></h1>
            </div>
            <h2 style="color:#300c41; font-size:30px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><center>LOGIN</center></h2>
            
            <fieldset> <legend>Username</legend><label for="uname"></label>
                <input type="text" id="uname" name="uname" required></fieldset>
                <br>
                <br>
                <br>
                <br><br><br>
            <fieldset><legend>Password</legend><label for="psw"></label>
            <input type="password" id="pswd" class="no-outline" name="psw" required></fieldset>
                <br>
                <br><br><br><br><br><br>
      <button class="login-button" type="submit"><center>Login</center></button>
      <br>
      <span style="float: left;"><label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label></span>
      <span class="psw"><a href='#'>Forgot password?</a></span>
      <br>
      <br>
      <p style="position:absolute;top:10px;"><center>New to Quizzers? <a href='http://localhost/log/signup.php/'>Click Here to sign up</a></center></p>
  </div>
</form>
    
</div>
    <?php
      $conn = mysqli_connect("localhost","root","","test");

      if($conn == false)
      {
      die("Could not connect");
      }
      $suname = $_REQUEST['uname'];
      $spsw = $_REQUEST['psw'];
      $sql = "SELECT password from login where username='$suname';";
      $result = $conn->query($sql);  
      $row = mysqli_fetch_array($result);
      if(mysqli_query($conn,$sql) && $row[0]==$spsw)
      {
      echo "<script language ='javascript'>";
      echo "alert('window.location.href='C:\Users\theri\Desktop\projects\web dev\quiz final\index.html'";
      echo "</script>";
      }
      else
      {
      echo "<script language ='javascript'>";
      echo "validatepassword();";
      echo "</script>";
      }
            
      $conn->close();
    ?>

</body>
<script>

    var password=document.getElementById("pswd");
    var username=document.getElementById("uname");
    var output = '<?php $row[0]; ?>';

    function validatePassword()
    {
        if(password.value!=output.value)
        {
            password.setCustomValidity('Password is incorrect');
        }
        

    }
    password.onchange=validatePassword;
    

  </script>
</html>