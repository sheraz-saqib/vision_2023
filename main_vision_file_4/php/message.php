<?php 
session_start();
require 'config.php';

$seller_id = $_POST['seller_id'];
$user_id = $_POST['user_id'];
$message_text = $_POST['message_text'];

$message_insertQ = "INSERT INTO `message_list`(`mess_user_id`, `mess_reciever_id`, `mesaage_text`, `message_time`)
 VALUES ($user_id,$seller_id,'$message_text',current_timestamp())";

$message_insert = mysqli_query($conn,$message_insertQ);


 if(!$message_insert){
    echo 'message not delivered';
 }





?>