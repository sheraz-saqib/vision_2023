<?php
session_start();
require 'config.php';
$user_id = $_SESSION['user_id'];
$get_user_dataQ = "SELECT * FROM `user` WHERE `user_id`= $user_id";

$get_user_data = mysqli_query($conn,$get_user_dataQ);
$fetch_user_data = mysqli_fetch_assoc($get_user_data);
$f_name =  $_POST['f-name'];
$l_name = $_POST['l-name'];
$user_name = $f_name .' '.$l_name;
$email = $_POST['email'];
$phone = $fetch_user_data['user_phone'];

$categories = $_POST['category'];
$address = $_POST['address'];
$g_range = $_POST['g-range'];
$title = $_POST['title'];
$price_crr = $_POST['price_crr'];
$price = $_POST['price'];

$final_price = $price_crr .' '. $price;
$desc = $_POST['descp'];

function message($class,$header,$message){
  echo '<div class="message '.$class.'">
  <div class="message_text">
<strong>'.$header.' </strong><p>'.$message.'</p>
  </div>

</div>
';

}
$img_name_1 = $_FILES['image_1']['name'];
$img_tmp_name_1 = $_FILES['image_1']['tmp_name'];
$img_name_2 = $_FILES['image_2']['name'];
$img_tmp_name_2 = $_FILES['image_2']['tmp_name'];
$img_name_3 = $_FILES['image_3']['name'];
$img_tmp_name_3 = $_FILES['image_3']['tmp_name'];

if($user_name !='' && $email !='' && $phone !='' && $categories != '' && $address !='' && $g_range !='' && $title !='' && $price !='' && $desc != '' && $img_name_1 !='' ){


 $sqlQ = "INSERT INTO `registeration` (`reg_user_id`, `reg_user_name`, `reg_title`, `reg_cat`, `reg_phone`, `reg_address`, `reg_price`, `reg_range`, `reg_desc`, `reg_img_1`, `reg_img_2`, `reg_img_3`, `reg_publish_date`, `reg_status`)
VALUES ($user_id,'$user_name','$title','$categories','$phone','$address','$final_price','$g_range','$desc','$img_name_1','$img_name_2','$img_name_3',current_timestamp(),'');";
$sql = mysqli_query($conn,$sqlQ);
if($sql){
      $sql_run = true;
      move_uploaded_file($img_tmp_name_1,'../register_image/'.$img_name_1);
      move_uploaded_file($img_tmp_name_2,'../register_image/'.$img_name_2);
      move_uploaded_file($img_tmp_name_3,'../register_image/'.$img_name_3);
     }
if(!$sql){
$sql_not_run = true;
     }

}


if( $email =='' || $phone =='' || $categories == '' || $address =='' || $g_range =='' || $title =='' || $price =='' || $desc == '' || $img_name_1 =='' ){
  $fill_error = true;
}
if($img_name_1 == '' || ($img_name_2 == '' || $img_name_3 == '')){
  $image_not_set = true;
}


 
if($sql_run){
 message('message_success','success','your account has been created ');
$image_not_set  = false;

}
if($sql_not_run){
 message('message_error','failed ','something wrong try again');
}

if($fill_error){
  $sql_not_run = false;
$image_not_set = false;
message('message_error','failed ','please fill out all field');
}

if($image_not_set){
  $sql_not_run = false;
$fill_error = false;
message('message_error','failed ','please select atleast one  image');
}



?>


