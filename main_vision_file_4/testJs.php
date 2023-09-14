
 <?php require './component/_header.php';
 require './php/config.php';?>

<?php
$is_result = 0;
$query_search = "";
if(isset($_POST['submit_me'])){

$search = $_POST['search_bar'];

$get_result= mysqli_query($conn, "SELECT * FROM `registeration` WHERE reg_title LIKE '%$search%' OR reg_cat LIKE
'%$search%' OR reg_address LIKE '%$search%' OR reg_price LIKE '%$search%' OR reg_range LIKE '%$search%' OR reg_desc LIKE
'%$search%' OR reg_status LIKE '%$search%' OR reg_user_name LIKE '%$search%'");
$count_result = mysqli_num_rows($get_result);

if($count_result > 0){
$is_result = 1;
$query_search = "SELECT * FROM `registeration` WHERE reg_title LIKE '%$search%' OR reg_cat LIKE '%$search%' OR
reg_address LIKE '%$search%' OR reg_price LIKE '%$search%' OR reg_range LIKE '%$search%' OR reg_desc LIKE '%$search%' OR
reg_status LIKE '%$search%' OR reg_user_name LIKE '%$search%'";
}

}


?>
<!-- ------column 1----- -->
<div class="main">

    <?php
if($is_result == 1){
    $queryQ = $query_search;
}

if($is_result != 1){
    $queryQ = "SELECT * FROM `registeration` ";
}
if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
  $queryQ = "SELECT * FROM `registeration` WHERE NOT `reg_user_id`= $user_id";
 }


$result = mysqli_query($conn,$queryQ);

if(mysqli_num_rows($result) > 0)
{
    while($fetch_reg = mysqli_fetch_assoc($result)){
        $i+=1;
          $reg_user_id = $fetch_reg['reg_user_id'];
        
?>

    <div class="first-col">
        <div class="card-1 card-id">
            <div id="<?=" carouselExampleFade1".$i?>" class="
                <?=" slide carousel-fade slid carousel carousel-".$i?>">
                <div class="carousel-inner slid-inner">


                    <div class="carousel-item slid-img active">
                        <img src="./register_image/<?=$fetch_reg['reg_img_1']?>" class="d-block w-100"
                            alt="<?=$fetch_reg['reg_img_1']?>">
                    </div>
                    <?php
        if($fetch_reg['reg_img_2'] !=''){
            echo ' <div class="carousel-item slid-img">
                        <img src="./register_image/'.$fetch_reg['reg_img_2'].'" class="d-block w-100" alt="...">
                    </div> ';
                    
        }
        if($fetch_reg['reg_img_2'] !='' && $fetch_reg['reg_img_3'] !=''){
            echo ' <div class="carousel-item slid-img">
                        <img src="./register_image/'.$fetch_reg['reg_img_3'].'" class="d-block w-100" alt="...">
                    </div> ';
        }
        ?>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="<?=" .carousel-".$i?>"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="<?=" .carousel-".$i?>"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="info">
                <?php 
                    if($fetch_reg['reg_status'] !=''){
                        echo ' <div class="verify-btn"><button><i class="bx bx-check check"></i> Verify</button></div>';
                    }
                    ?>

                <div class="title-box">
                    <h2>
                        <?=$fetch_reg['reg_title'];?>
                    </h2>
                </div>
                <div class="description">
                    <?=$fetch_reg['reg_desc'] ?>
                </div>
                <div class="text"> Price per night</div>
                <div class="price">
                    <h4>
                        <?=$fetch_reg['reg_price'];?>
                    </h4>
                </div>
                <div class="rating"><button class="Explore">Explore</button><span>4.4</span></div>
            </div>

        </div>

        <?php
         $reg_user_dataQ = "SELECT * FROM `user` WHERE `user_id` = $reg_user_id";
$reg_user_data = mysqli_query($conn,$reg_user_dataQ);

$fetch_reg_user = mysqli_fetch_assoc($reg_user_data);

           ?>
        <div class="col-p-2 explore-info">
            <div class="col-profile">
                <div class="profile-p1"><img src="./user_images/<?=$fetch_reg_user['user_image']?>" alt=""><span>
                        <?=$fetch_reg_user['user_name'] .' '.$fetch_reg_user['user_last_name'] ?>
                    </span></div>
                <div class="profile-p2"><span>orders(<span>12</span>)</span> </div>
                <div class="profile-p3 close"><i class='bx bx-plus cross'></i></div>
            </div>
            <div class="col-2-info">
                <table>
                    <tr>
                        <td><b>Pulish-date</b></td>
                        <td><b>Location</b></td>
                        <td><b>Guest Range</b< /td>
                        <td><b>Categories</b></td>
                    </tr>
                    <tr>
                        <td>
                            <?=$fetch_reg['reg_publish_date'];?>
                        </td>
                        <td>
                            <?=$fetch_reg['reg_address'];?>
                        </td>
                        <td>
                            <?=$fetch_reg['reg_range'];?>
                        </td>
                        <td>
                            <?=$fetch_reg['reg_cat'];?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-chatbox">
                <div class="profile-name"><img src="./user_images/<?=$fetch_reg_user['user_image']?>" alt=""><span>
                        <?=$fetch_reg_user['user_name'] .' '.$fetch_reg_user['user_last_name'] ?>
                    </span> </div>
                <div class="chat">
                    <div class="customer-msg">
                        <p>customer</p>
                    </div>
                    <div class="customer-msg">
                        <p>customer</p>
                    </div>
                    <div class="seller-msg">
                        <p>seller</p>
                    </div>
                    <div class="customer-msg">
                        <p>customer</p>
                    </div>

                    <div class="seller-msg">
                        <p>seller</p>
                    </div>
                    <div class="seller-msg">
                        <p>seller</p>
                    </div>
                    <div class="seller-msg">
                        <p>seller</p>
                    </div>
                </div>
                <div class="message-box"><input type="text" placeholder="Message"><button><i
                            class='bx bxs-send'></i></button></div>
            </div>
            <div class="col-send"><button>book now</button></div>
        </div>

    </div>



    <?php

    }}?>
    <!-- ------column 1----- -->
    <div class="sideBar">
        <!-- side_links_container -->
        <div class="sideBar_inner">
            <div class="side_links_container">
                <div class="side_head">
                    <h2>Explore</h2>
                </div>

                <ul class="sideUl">
                    <li class="sideLi active"><a class="sideLinks" href="#">home <i class='bx bx-chevron-down'></i></a>
                    </li>
                    <li class="sideLi"><a class="sideLinks" href="#">recommended<i class='bx bx-chevron-down'></i></a>
                    </li>
                    <li class="sideLi"><a class="sideLinks" href="#">new <i class='bx bx-chevron-down'></i></a></li>
                    <li class="sideLi"><a class="sideLinks" href="#">top sales <i class='bx bx-chevron-down'></i></a>
                    </li>
                    <li class="sideLi"><a class="sideLinks" href="#">varifed saler <i
                                class='bx bx-chevron-down'></i></a></li>

                </ul>
            </div>
            <!-- side_links_container -->
            <!-- =================================== -->
            <!-- side_links_container -->
            <div class="side_links_container">
                <div class="side_head mt-2rem">
                    <h2>categories</h2>
                </div>
                <div class="side_select_cot_cont">
                    <i class='bx bx-chevron-down'></i>
                    <select name="" id="categories" class="side_categories_link">
                        <option value="hall">hall</option>
                        <option value="restaurant" selected>restaurant</option>
                    </select>

                    <!-- ========== -->
                    <div class="cat_conatiner">
                        <ul>
                            <li class="cat_li"><span class="categories_icon active"></span>hall</li>
                            <li class="cat_li"><span class="categories_icon"></span>restuarent</li>
                        </ul>
                    </div>
                </div>

            </div>


        </div>
    </div>

</div>
  <?php require './component/_sideBar.php'?>

<!-- ------column 1----- -->


</div>