<?php
session_start();
require './php/config.php';
 if(!isset($_SESSION['user_id'])){
header('location:index.php');

 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <?php require 'hallOrRest_style.php';?>
  <?php require 'message.Style.php';?>
</head>
<body>

<div class="form" >
<div class="form-main">
    <div class="side-img">
        <img src="img/illustration_2.png" alt="">
    </div>
    <div class="form-info">
    <form action="#" method="POST" id="form">
        <div class="row" id="row-1"><h3> Register Yourself !</h3></div>
   
  
<div class="message_container">

</div>
        
            <input type="text" id="" placeholder="Email" name="f-name" value="<?=$_SESSION['user_name']?>" hidden>
            <input type="text" id="" placeholder="Email" name="l-name" value="<?=$_SESSION['user_lname']?>" hidden>

        <div class="row">
    
        <label>Category
            <br>
            <select class="reg_categories cate" name="category" id="">
                <option value="">choose categories</option>
                <option value="hall">hall</option>
                <option value="restaurant">restaurant</option>
            </select>
            <!-- <input type="text" id="" placeholder="e.g hall/restraunt" name="category"> -->
        </label>
    <label>Address
            <br>
            <input type="text" id="" placeholder="Address" name="address">
        </label>
            <input type="email" id="" placeholder="Email" name="email" value="<?=$_SESSION['user_email']?>" hidden>
        </div>
        <div class="row">
      <label>Guset-Range
            <br>
            <input type="number" id="" placeholder="Guest Range" name="g-range">
        </label>
         <label>Product Title
            <br>
            <input type="text" id="" placeholder="Title" name="title">
        </label>
        </div>
        <div class="row ">
        
      
        <label>Price Per Night
            <br>
            <div class="price_div">
 <select class="reg_categories"  id="price_crr" name="price_crr">
                <option value="Rs">Rs</option>
            </select>
            <input type="number" id="price" placeholder="Price" name="price"  >
            </div>
           
        </label>
        </div>
     
        <div class="row img_row">
        <label>choose images
            <br>
        
            <input type="file" id="" placeholder="Guest Range" name="image_1"  accept="image/*">
            <input type="file" id="" placeholder="Guest Range" name="image_2" accept="image/*">
            <input type="file" id="" placeholder="Guest Range" name="image_3" accept="image/*">
        </label>
        </div>
        <div class="row">
        <label id="label-inp">Product description
            <br>
            <textarea name="descp" id="" cols="65" rows="8" placeholder="Enter description"></textarea>
        </label>
        </div>
        <input type="submit" value="Next" name="submit-bttn" class="form-bttn">
    </form>
    </div>
</div>
</div>
</body>

<script>
     const inputs = document.querySelectorAll('input'),
     form_btn = document.querySelector('.form-bttn'),
     form = document.querySelector('#form'),
     reg_categories = document.querySelectorAll('.cate'),
     message_container = document.querySelector('.message_container');


     form.addEventListener('submit',(e)=>{
e.preventDefault();
     })

    function validate_input(){
      inputs.forEach((crr, i) => {
        if (crr.value == '') {
          crr.classList.add('error')
        

        } if (crr.value .length >= 2) {
          crr.classList.add('success')
        }
      })

    }

   form_btn.addEventListener('click', () => {
    reg_categories.forEach(crr=>{

    if(crr.value.length <1){
        crr.classList.add('error')
        
    }
     if (crr.value .length >= 2) {
          crr.classList.add('success')
        }



})
       validate_input()
       let xhr = new XMLHttpRequest();
       xhr.open('POST','./php/register.php',true)
       xhr.onload =()=>{
        if(xhr.status ==200 && XMLHttpRequest.DONE){
          message_container.innerHTML = xhr.responseText
      
          
        }
       }
       let formdata = new FormData(form);
       xhr.send(formdata);
       
    })
    

    
   
</script>
</html>