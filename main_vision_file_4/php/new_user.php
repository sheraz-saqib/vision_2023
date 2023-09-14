<?php

require 'config.php';

$f_name =  $_POST['f-name'];
$l_name = $_POST['l-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$postion = $_POST['position'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$new_acc_submit = $_POST['new_acc_submit'];
$user_profile_image = $_FILES['user_profile_image']['name'];

$image_temp_name = $_FILES['user_profile_image']['tmp_name'];
$str_pass = password_hash($password,PASSWORD_BCRYPT);
function message($class,$header,$message){
  echo '<div class="message '.$class.'">
  <div class="message_text">
<strong>'.$header.' </strong><p>'.$message.'</p>
  </div>

</div>
';

}


if($f_name != '' && $l_name !='' && $phone !='' && $postion !='' && $email  !='' && $password !='' && $user_profile_image !='' && $password == $confirm_password){
  $check_emailQ = "SELECT * FROM user WHERE `user_email` = '$email '";
$check_email =  mysqli_query($conn,$check_emailQ );

if(mysqli_num_rows($check_email) == 0){
  $user_img_name = time().$user_profile_image;
    $sqlQ = "INSERT INTO `user`( `user_name`,`user_position`,`user_last_name`,`user_email`,`user_phone`, `user_pass`,`user_image`, `user_create_time`)
     VALUES ('$f_name',$postion,'$l_name','$email','$phone','$str_pass','$user_img_name',current_timestamp())";
$sql = mysqli_query($conn,$sqlQ);
     if($sql){
      $sql_run = true;
      move_uploaded_file($image_temp_name,'../user_images/'.$user_img_name);
     }
     if(!$sql){
$sql_not_run = true;
     }
}
if(mysqli_num_rows($check_email) > 0){
$email_exists = true;
}
 }
 if($password !== $confirm_password){
  $pass_not_equal = true;
 }
if($f_name == '' || $l_name =='' || $postion =='' || $phone =='' || $email  =='' || $password ==''  || $password !== $confirm_password){
  $fill_error = true;
}
if($user_profile_image ==''){
  $image_not_set = true;
}


 
if($sql_run){
 message('message_success','success','your account has been created   <a href="login.php">login</a>');
$image_not_set  = false;

}
if($sql_not_run){
 message('message_error','failed ','something wrong try again');
}
if($pass_not_equal){
  $fill_error = false;
 message('message_error','failed ','password does not match');
}
if($fill_error){
  $sql_not_run = false;
$pass_not_equal = false;
$image_not_set = false;
message('message_error','failed ','please fill out all field');
}
if($email_exists){
  $sql_not_run = false;
$image_not_set = false;
message('message_error','failed ',' '.$email .' already exists');
}
if($image_not_set){
  $sql_not_run = false;
$pass_not_equal = false;
$fill_error = false;
message('message_error','failed ','please select the image');
}


?>