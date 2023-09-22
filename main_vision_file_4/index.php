<?php
session_start();
require './php/config.php';







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision-Project 2023</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <?php require 'card_style.php';
    require 'main_style.php'
    ?>
    <style>
        .message-box input {
            height: 0 !important;
        }
    </style>
</head>

<body>


    <?php require './component/_header.php';



    $is_result = 0;
    $query_search = "";
    if (isset($_POST['submit_me'])) {

        $search = $_POST['search_bar'];

        $get_result = mysqli_query($conn, "SELECT * FROM `registeration` WHERE reg_title LIKE '%$search%' OR reg_cat LIKE '%$search%'  OR reg_address LIKE '%$search%'  OR reg_price LIKE '%$search%' OR reg_range LIKE '%$search%'  OR reg_desc LIKE '%$search%' OR reg_status LIKE '%$search%'  OR reg_user_name LIKE '%$search%'");
        $count_result     = mysqli_num_rows($get_result);

        if ($count_result > 0) {
            $is_result = 1;
            $query_search = "SELECT * FROM `registeration` WHERE reg_title LIKE '%$search%' OR reg_cat LIKE '%$search%'  OR reg_address LIKE '%$search%'  OR reg_price LIKE '%$search%' OR reg_range LIKE '%$search%'  OR reg_desc LIKE '%$search%' OR reg_status LIKE '%$search%'  OR reg_user_name LIKE '%$search%'";
        }
    }


    ?>
    <!-- ------column 1----- -->
    <div class="main">

        <?php
        if ($is_result == 1) {
            $queryQ = $query_search;
        }

        if ($is_result != 1) {
            $queryQ = "SELECT * FROM `registeration` ";
        }
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $queryQ = "SELECT * FROM `registeration` WHERE NOT `reg_user_id`= $user_id";
        }


        $result = mysqli_query($conn, $queryQ);
        if (mysqli_num_rows($result) > 0) {
            while ($fetch_reg = mysqli_fetch_assoc($result)) {
                $i += 1;
                $reg_user_id = $fetch_reg['reg_user_id'];
        ?>
                <div class="first-col">
                    <div class="card-1 card-id">
                        <div id="<?= "carouselExampleFade1" . $i ?>" class="<?= " slide carousel-fade slid carousel carousel-" . $i ?>">
                            <div class="carousel-inner slid-inner">


                                <div class="carousel-item slid-img active">
                                    <img src="./register_image/<?= $fetch_reg['reg_img_1'] ?>" class="d-block w-100" alt="<?= $fetch_reg['reg_img_1'] ?>">
                                </div>
                                <?php
                                if ($fetch_reg['reg_img_2'] != '') {
                                    echo ' <div class="carousel-item slid-img">
                        <img src="./register_image/' . $fetch_reg['reg_img_2'] . '" class="d-block w-100" alt="...">
                    </div> ';
                                }
                                if ($fetch_reg['reg_img_2'] != '' && $fetch_reg['reg_img_3'] != '') {
                                    echo ' <div class="carousel-item slid-img">
                        <img src="./register_image/' . $fetch_reg['reg_img_3'] . '" class="d-block w-100" alt="...">
                    </div> ';
                                }
                                ?>


                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="<?= ".carousel-" . $i ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="<?= ".carousel-" . $i ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="info">
                            <?php
                            if ($fetch_reg['reg_status'] != '') {
                                echo ' <div class="verify-btn"><button><i class="bx bx-check check"></i> Verify</button></div>';
                            }
                            ?>

                            <div class="title-box">
                                <h2><?= $fetch_reg['reg_title']; ?></h2>
                            </div>
                            <div class="description"><?= $fetch_reg['reg_desc'] ?></div>
                            <div class="text">Price per night</div>
                            <div class="price">
                                <h4><?= $fetch_reg['reg_price']; ?></h4>
                            </div>
                            <div class="rating"><button class="Explore">Explore</button><span>4.4</span></div>
                        </div>

                    </div>

                    <?php
                    $reg_user_dataQ = "SELECT * FROM `user` WHERE `user_id` = $reg_user_id";
                    $reg_user_data = mysqli_query($conn, $reg_user_dataQ);

                    $fetch_reg_user = mysqli_fetch_assoc($reg_user_data);

                    ?>
                    <div class="col-p-2 explore-info">
                        <div class="col-profile">
                            <div class="profile-p1"><img src="./user_images/<?= $fetch_reg_user['user_image'] ?>" alt=""><span><?= $fetch_reg_user['user_name'] . ' ' . $fetch_reg_user['user_last_name'] ?></span></div>
                            <div class="profile-p2"><span>orders(<span>12</span>)</span> </div>
                            <div class="profile-p3 close"><i class='bx bx-plus cross'></i></div>
                        </div>
                        <div class="col-2-info">
                            <table>
                                <tr>
                                    <td><b>Pulish-date</b></td>
                                    <td><b>Location</b></td>
                                    <td><b>Guest Range</b></td>
                                    <td><b>Categories</b></td>
                                </tr>
                                <tr>
                                    <td><?= $fetch_reg['reg_publish_date']; ?></td>
                                    <td><?= $fetch_reg['reg_address']; ?></td>
                                    <td><?= $fetch_reg['reg_range']; ?></td>
                                    <td><?= $fetch_reg['reg_cat']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <?php
                        if ($userLogin) {
                        ?>

                            <div class="col-chatbox">
                                <div class="profile-name"><img src="./user_images/<?= $fetch_reg_user['user_image'] ?>" alt=""><span><?= $fetch_reg_user['user_name'] . ' ' . $fetch_reg_user['user_last_name'] ?></span> </div>
                                <div class="chat">

                                    <input class="reg_user_id" type="text" value="<?php echo $reg_user_id; ?>">
                                    <!-- <?php

                                            $user_id = $_SESSION['user_id'];
                                            $select_messQ = "SELECT * FROM `message_list` WHERE mess_reciever_id= $reg_user_id AND mess_user_id = $user_id OR mess_reciever_id= $user_id AND mess_user_id = $reg_user_id";
                                            $select_mess = mysqli_query($conn, $select_messQ);
                                            if (mysqli_num_rows($select_mess) > 0) {
                                                while ($message = mysqli_fetch_assoc($select_mess)) {
                                                    if ($message['mess_user_id'] == $user_id) {
                                                        echo ' <div class="seller-msg"><p>' . $message['mesaage_text'] . '</p></div>';
                                                    }
                                                    if ($message['mess_user_id'] == $reg_user_id) {
                                                        echo ' <div class="customer-msg"><p>' . $message['mesaage_text'] . '</p></div>';
                                                    }
                                                }
                                            }
                                            ?> -->


                                    <!-- <div class="customer-msg"><p>customer</p></div> -->
                                    <!-- <div class="seller-msg"><p>seller</p></div> -->
                                    <!-- <div class="customer-msg"><p>customer</p></div>
                       
                       
                        <div class="seller-msg"><p>seller</p></div>
                        <div class="seller-msg"><p>seller</p></div> -->
                                </div>
                                <form action="" class="message_form">
                                    <div class="message-box">
                                        <input class="seller_id" name="seller_id" type="number" value="<?php echo $reg_user_id ?>" hidden>
                                        <input name="user_id" type="number" value="<?php echo $_SESSION['user_id'] ?>" hidden>
                                        <input type="text" name="message_text" placeholder="Message">
                                        <button class="message_send_btn"><i class='bx bxs-send'></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-send"><button>book now</button></div>
                    </div>
                </div>
    <?php
                        }
                        if (!$userLogin) {
                            echo ' <div class="col-chatbox">
                    
                </div>
            </div>

        </div>';
                        }
                    }
                } ?>

    </div>
    <?php require './component/_sideBar.php' ?>




</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="app.js"></script>
<script src="./js/card_code.js"></script>



<script>
    const message_forms = document.querySelectorAll('.message_form')
    let chat_box = document.querySelectorAll('.chat');

    function scroll_bottom() {
        chat_box.forEach(crr => {
            crr.scrollTop = crr.scrollHeight
        })
    }

    message_forms.forEach(crr => {
        crr.addEventListener('submit', e => {
            e.preventDefault()
        })


        let messageBtn = crr.querySelector('.message_send_btn')

        messageBtn.addEventListener('click', () => {

            let xhr = new XMLHttpRequest()
            xhr.open('POST', './php/message.php', true)
            xhr.onload = () => {
                if (xhr.status == 200 && XMLHttpRequest.DONE) {
                    console.log(xhr.responseText);
                    scroll_bottom()
                }
            }
            let form_data = new FormData(crr);
            xhr.send(form_data)

        })

    })














    const reg_user_id = document.querySelectorAll('.reg_user_id');
    reg_user_id.forEach(crr => {
        let crr_reg_id = crr.value
        console.log(crr_reg_id);
        let xhr = new XMLHttpRequest()
        setInterval(() => {



            message_forms.forEach(crr => {
                let crr_seller = crr.querySelector('.seller_id').value;
                crr.addEventListener('submit', e => {
                    e.preventDefault()
                })



                xhr.open('GET', './php/get_message.php?reg_user_id=' + crr_reg_id, true)
                xhr.onload = () => {
                    if (xhr.status == 200 && XMLHttpRequest.DONE) {
                        chat_box.forEach(crr => {
                            crr.innerHTML = xhr.responseText;
                        })

                    }
                }
                let form_data = new FormData(crr);
                xhr.send(form_data)

            })
        }, 500)


    })
</script>

</html>