<?php
require './php/config.php';
session_start();

if(isset($_SESSION['user_id'])){
  header('location:index.php');
}



$email = $_POST['email'];
$pass = $_POST['password'];
$submit = $_POST['submit'];
if(isset($submit)){
if($email != '' && $pass !=''){
    $user_selectQ = "SELECT * FROM `user` WHERE `user_email` = '$email'";
    $user_select = mysqli_query($conn,$user_selectQ);
    $user_data = mysqli_fetch_assoc($user_select);
    $user_Get_email = $user_data['user_email'];
    $user_Get_pass = $user_data['user_pass'];
    $user_varifyPass = password_verify($pass,$user_Get_pass);
    // ===========================================================
    // echo var_dump($varifyPass);
    if($email === $user_Get_email && $user_varifyPass == 1){
      session_start();
      $_SESSION['user_id'] = $user_data['user_id'];
      $_SESSION['user_name'] = $user_data['user_name'];
      $_SESSION['user_email'] = $user_data['user_email'];
      $_SESSION['user_lname'] = $user_data['user_last_name'];
      $_SESSION['user_image'] = $user_data['user_image'];
      $_SESSION['user_position'] = $user_data['user_position'];
      header('location:index.php');
    }
    
}
 if($email == ''  && $pass == '')
{
  $notification = true;
}
}


if($email !== $admin_Get_email &&  $admin_varifyPass != 1 ){
  $loginError = true;
}

if($notification){
  $loginError = false;
}
if($loginError){
  $notification = false;
}
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>sheraz saqib dashboard login</title>
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <?php require 'message.Style.php';?>
    <style>
      .submit-btn{
        display: flex;
        justify-content: center;
      }
    .submit-btn #new_acc_submit{
  width: 80% !important;
  background-color: #4192DC !important;
  border: none !important;
  font-size: 1.2rem !important;
  font-weight: 500 !important;
  padding: .5rem  !important;
  border-radius: .7rem !important;
  cursor: pointer !important;
  color: var(--var-sideBar) !important;
  transition: .4s !important;
  margin-bottom: 1rem !important;
  margin-top: 1rem;
 
}
.submit-btn  input{
  color: var(--var-sideBar) !important;
}
.submit-btn  button:hover{
  transform: scale(.99);
}

  </style>
  </head>
  
  <body>
    <!-- particles.js container -->
<a href="index.php"></a>
<!-- login page -->
<div class="center">
<div class="login-page">
<div class="left-cont">
    <img src="./icon/undraw_secure_login_pdn4.svg" alt="">
</div>

<div class="right-cont">
    <div class="header">
        <h2>Welcome Back!</h2>
    </div>
    <div class="message_container">


  <?php
  if($notification){
    echo '<div class="message  message_error"><div class="message_text">
<strong>failed</strong>fill out all field
  </div> </div>'; 
   }
   if($loginError){
    echo '<div class="message  message_error"><div class="message_text">
<strong>failed</strong>your email or password is incorrect
  </div> </div>'; 
   }
   
  ?>
  



</div>
<form action="" method="POST">
    <div class="input">
    <div class="f-input">
        <input type="email" name="email" placeholder="enter your phone and email"><i class='bx bxs-envelope'></i>
    </div>
    <div class="f-input">
        <input type="password" name="password"  placeholder="password"><i class='bx bxs-lock-alt'></i>
    </div>
    
   
</div>
<div class="check-box">
    <input type="checkbox">
    <h3> Remember Me</h3>
</div>
<div class="submit-btn">
  <input id="new_acc_submit" type="submit" value="login" name="submit">
</div>
<p></p>
</form>
<div class="another-login">
  <div class="anther-head">
    <h2>login with another accounts</h2>
  </div>
  <a href="#"><button  class="google"><i class='bx bxl-google'></i> login with google</button></a>
  <a  href="#"><button class="facebook"><i class='bx bxl-facebook' ></i> login with facebook</button></a>
</div>
<div class="login-footer">
  <div class="footer-ancor">
    <a href="forget-password.html">forget password?</a>
    <a href="newAcc.php">create new account</a>
  </div>
</div>
</div>

</div><!-- min -->
</div>
  </body>

</html>
