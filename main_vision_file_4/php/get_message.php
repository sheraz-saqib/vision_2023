<?php 
session_start();
require 'config.php';
   $user_id = $_SESSION['user_id'];
$reg_user_id = $_POST['seller_id'];

// echo $user_id;
echo $reg_user_id;
$select_messQ = "SELECT * FROM `message_list` WHERE mess_user_id = $user_id AND mess_reciever_id= $reg_user_id";
                    $select_mess = mysqli_query($conn,$select_messQ);
               
 if(mysqli_num_rows($select_mess) > 0){
    
     while($message = mysqli_fetch_assoc($select_mess)){
    
if($message['mess_user_id'] === $user_id){
            echo ' <div class="seller-msg"><p>' . $message['mesaage_text'] . '</p></div>';
}
if ($message['mess_user_id'] !== $user_id) {
    echo ' <div class="customer-msg"><p>' . $message['mesaage_text'] . '</p></div>';
}

         
     }
 }
