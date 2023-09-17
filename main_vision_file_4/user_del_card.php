<?php 
session_start();
require './php/config.php';
 if(!isset($_SESSION['user_id'])){
header('location:index.php');
 }
$delete_id = $_GET['delete_id'];
$page_url = $_GET['page_url'];
echo $delete_id;
echo $page_url;
$delQ = "DELETE FROM `registeration` WHERE  `regi_id`= $delete_id";
if(mysqli_query($conn,$delQ)){
    header('location:'.$page_url);
}

?>