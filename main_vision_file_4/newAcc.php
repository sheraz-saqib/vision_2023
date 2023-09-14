
<?php

if(isset($_SESSION['user_id'])){
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sheraz saqib dashboard login</title>
   
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
        <link rel="stylesheet" href="take-profile.css" />
         <link rel="stylesheet" href="newAcc.css" />
           <?php require 'message.Style.php';?>
    <style>
     
.submit-btn #new_acc_submit{
  width: 100% !important;
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
}
.submit-btn  input{
  color: var(--var-sideBar) !important;
}
.submit-btn  button:hover{
  transform: scale(.99);
}
.user_profile_img{
  aspect-ratio: 16/9;
  max-width: 4rem;
  min-height: 4rem;
  object-fit: cover;

}
.userprofile-input{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 4rem;
    height: 4rem;
    background-color: transparent;
    border-radius: 50rem;
    border: .2rem  dotted #4192DC;
    margin-top: 0;
    cursor: pointer;
  }
  .userprofile-input input{
   height: 4rem;
   border-radius: 50rem;
    opacity: 0;
  }
  .userprofile-input h2{
    position: absolute;
    display: flex;
    justify-content: center;
    font-size:1rem;
    color: var(--var-text);
    margin-left: 13rem;
    margin-top: .9rem;
    background-color: #4192DC;
    color: white;
    border-radius: .5rem;
    padding: .3rem .5rem;
    cursor: pointer;
  }
  .userprofile-input img{
    width: 4rem;
    height:4rem;
    border-radius: 50rem;
  }
  .already{
    width: 100% !important;
 
  }
   .already a{
   
    background-color: #4687c5;
    border: none;
    font-size: 1.2rem;
    font-weight: 500;
    padding: .5rem ;
    border-radius: .7rem;
    cursor: pointer;
    color: var(--var-sideBar);
    transition: .4s;
    margin-bottom: 1rem;
      width: 100% !important;
  }
  .already  a{
    color: var(--var-sideBar);
  }
  .already  a:hover{
    transform: scale(.99);
  }
  .reg_categories{
    appearance: none;
     width: 100%;
    appearance: none;
    outline: none;
    border: transparent;
    padding: .3rem;
   width: 100%;
    padding: 0.8rem 1rem;
    border: none;
    outline: none;
    margin-top: 1rem;
    border-radius: 0.8rem;
}
.price_div{
    display: flex;

}
.price_div #price_crr{
    width: 12%;
    padding-right: 0;
      border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}
.price_div #price{
    border-top-left-radius: 0 !important;
  border-bottom-left-radius: 0 !important;
  padding-left: 0;
}
    </style>
  </head>
  <body>
    <!-- particles.js container -->

<!-- login page -->
<div class="center">
<div class="login-page">
<div class="left-cont">
    <img src="./icon/undraw_account_re_o7id.svg" alt="">
</div>

<div class="right-cont">
    <div class="header">
        <h2>Welcome sheraz dashboad!</h2>
    </div>

      <form action=""  id="create_acc_form" enctype="multipart/form-data">

<div class="message_container">

</div>
     
    <div class="input">
      <h2>user name</h2>
    <div class="f-input ">
        <div class="f-name"><input type="text" placeholder="Enter yout first name" name="f-name" ></div>
        <div class="l-name"><input type="text" placeholder="Enter yout Last name" name="l-name" ></div>
    </div>
    <div class="h-input">
      <h2>email</h2>
        <input name="email" type="email" placeholder="Enter your gmail" >
    </div>
    <div class="h-input">
      <h2>phone number</h2>
        <input name="phone" class="phone" type="number" placeholder="Enter your phone number" >
    </div>
      <h2>you are a seller/client</h2>
     <div class="price_div">
 <select class="reg_categories cate" name="position" id="">
                <option value="" selected>choose a postion</option>
                <option value="0">client</option>
                <option value="2">seller</option>
            </select>
            </div>
    <div class="h-input">
      <h2>password</h2>
        <input name="password" type="password" placeholder="Enter your password" >
    </div>
    <div class="h-input" >
      <h2>confirm password</h2>
        <input  name="confirm_password" type="password" placeholder="Enter your confirm password" >
    </div>
      <div class="userprofile-input">
     <h2 class="img_inner_head">select image</h2>
    <input type="file" placeholder="img" name="user_profile_image" id="user_profile_input" hidden accept="image/*">
    <img class="user_profile_img" src="" alt="" >
</div>
<div class="submit-btn">
  <input id="new_acc_submit"  type="submit" value="Create Account" name="new_acc_submit">
  </div>

 

</div>
  </div>
  </div>



</div>
</div>


</form>

</div><!-- min -->
</div>
  </body>
<script src="/js/new_acc.js"></script>
<script>

  const create_acc_form = document.getElementById('create_acc_form'),
      new_acc_submit = document.getElementById('new_acc_submit'),
      inputs = document.querySelectorAll('input'),
      input_cont = document.querySelectorAll('.h-input'),
      message_cross_btn = document.querySelectorAll('.message_cross_btn'),
      message = document.querySelector('.message_container');

    create_acc_form.addEventListener('submit', e => {
      e.preventDefault()
    })

    message_cross_btn.forEach(crr=>{
      let message = crr.parentNode.parentNode.parentNode;
     crr.addEventListener('click',()=>{
      message.remove()
      console.log('remove condition');
     })
    })

    function validate_input(){
      inputs.forEach((crr, i) => {
        if (crr.value.length < 1) {
          crr.classList.add('error')

        } if (crr.value .length >= 2) {
          crr.classList.add('success')
        }
      })

    }

    new_acc_submit.addEventListener('click', () => {
       validate_input()
       let user_submit = new XMLHttpRequest();
       user_submit.open('POST','./php/new_user.php',true)
       user_submit.onload =()=>{
        if(user_submit.status ==200 && XMLHttpRequest.DONE){
          message.innerHTML = user_submit.responseText
          
        }
       }
       let formdata = new FormData(create_acc_form);
       user_submit.send(formdata);
       
    })
    
   

</script>
<script src="./js/takePic.js"></script>
</html>
