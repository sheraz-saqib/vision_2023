 <?php
    if (isset($_SESSION['user_id'])) {
        $userLogin = true;
    } else {
        $userLogin = false;
    }

    ?>
 <style>
     .chat::-webkit-scrollbar {
         width: 0;
     }

     .seller-msg,
     .customer-msg {
         margin: 1rem 0;
         font-size: 1.1rem;
         font-weight: 500;
     }

     .seller-msg p {
         border-bottom-right-radius: 0 !important;
       
     }

     .customer-msg p {
         border-bottom-left-radius: 0 !important;

     }

     .chat .chat .chat .login_btn {
         background-color: #4192DC;
         color: white;
         padding: .5rem 1rem;
         font-size: 1.2rem;
         border-radius: 2rem;
         text-transform: capitalize;
     }

     .login_btn i {
         font-size: 1rem;
         margin-right: 0.4rem;
     }

     .login_btn:hover {
         color: white;
     }

     /* profile satting */
     .profile-satting {
         position: absolute;
         right: 0;
         margin-top: 20rem;
         margin-right: 2rem;
         min-width: 15rem;
         min-height: 13rem;
         background-color: var(--body_color);
         z-index: 1;
         border-radius: .6rem;
         display: flex;
         flex-direction: column;
         padding-top: 1rem;
         transition: .4s;
         box-shadow: .2rem .2rem 1.4rem 0rem rgba(73, 73, 73, 0.103);
     }

     .profile-satting::before {
         content: '';
         width: 1.5rem;
         height: 1.5rem;
         background-color: var(--body_color);
         position: absolute;
         right: 2rem;
         top: -.5rem;
         transform: rotate(-46deg);

     }

     .profile-name {
         margin-left: 1.3rem;
         margin-bottom: 1rem;
         white-space: nowrap;
     }

     .profile-name :is(a) {
         font-size: 1.2rem;
         color: var(--var-text);
         font-weight: 300;
         transition: .3s;
         display: flex;
         align-items: center;
     }

     .profile-name i {
         margin-right: .6rem;
         font-weight: bold;
     }

     .profile-name:nth-last-child(2) i {
         font-size: 1.5rem;
         font-weight: bold;
     }

     .profile-name :is(a, i):hover {
         color: var(--primary_color);
     }

     .profile-satting .line {
         width: 100%;
         height: 1px;
         background-color: #70707038;
     }

     .log-out {
         display: flex;
         justify-content: center;
     }

     .log-out a {
         font-size: 1.2rem;
         color: var(--var-text);
         font-weight: 300;
         display: flex;
         align-items: center;
     }

     .log-out i {
         margin-right: .6rem;
         font-weight: 600;
     }

     .log-out a:hover {
         color: #df4a0f;
     }

     .profile-satting-hide {
         opacity: 0;
         visibility: hidden;
         pointer-events: none;
     }

     #search_form {
         background-color: transparent;
         margin: 0;
         padding: 0;
         width: inherit;
     }

     .compantName {
         width: 20rem;
     }

     .compantName h2 {
         margin-left: 0.2rem;
         margin-top: 0.6rem;
     }

     #logo_img {
         width: 6rem !important;
     }

     #logo_ancor {
         display: flex;
         align-items: center;
     }
 </style>
 <header class="header">
     <!-- topnav -->
     <!-- topnav -->
     <div class="topNav">

         <div class="navBar">
             <!-- compantName -->

             <div class="compantName">
                 <a id="logo_ancor" href="index.php">
                     <img id="logo_img" src="./img/HFS-LOGO2.png" alt="...">
                     <h2><span>HS</span> HMS</h2>
                 </a>
             </div>
             <div class="bars">
                 <div class="line"></div>
                 <div class="line"></div>
                 <div class="line"></div>
             </div>
             <!-- compantName -->
             <!-- ------------------- -->
             <!-- search bar -->
             <form method="POST" action="" id="search_form">
                 <div class="searchBar">
                     <input type="text" spellcheck="false" placeholder="Find the product" name="search_bar">
                     <button type="submit" name="submit_me" style="border: none;"> <i class='bx bx-search'></i></button>
                 </div>
             </form>
             <!-- search bar -->
             <!-- ------------------- -->

             <?php
                if (!$userLogin) {
                    echo '<div>
                    <a class="login_btn" href="login.php"><i class="fa-solid fa-user"></i>login</a>
                </div>';
                }
                if ($userLogin && $_SESSION['user_position'] == 2) {
                    echo '<div class="profile">
                    <img class="profile-img" src="./user_images/' . $_SESSION['user_image'] . '" alt="">
                </div>
                <div class="profile-satting profile-satting-hide" style="margin-top: 25rem;">
                    <div class="profile-name">
                        <a href="#"><i class="bx bxs-user"></i>
                            ' . $_SESSION['user_name'] . ' ' . $_SESSION['user_lname'] . '
                        </a>
                    </div>
                    <div class="profile-name">
                        <a href="#"><i class="bx bxs-edit"></i>
                            Edit Profile
                        </a>
                    </div>
                     <div class="profile-name">
                        <a href="hallOrRest_reg.php"><i class="bx bx-list-ul"></i>
                           become a seller
                        </a>
                    </div> 
                    <div class="profile-name">
                        <a href="reg_seller.php"><i class="bx bx-list-ul"></i>
                          seller varification
                        </a>
                    </div>
                    <div class="profile-name">
                        <a href="user_upload_reg.php"><i class="fa-solid fa-chart-simple"></i>
                            my Sells
                        </a>
                    </div>
                    <p class="line"></p>
                    <div class="log-out">
                        <a class="logout" href="logout.php"><i class="bx bx-log-out"></i>
                            Log out

                        </a>
                    </div>
                </div>';
                }
                ?>
             <?php
                if ($userLogin && $_SESSION['user_position'] == 0) {
                    echo '<div class="profile">
                    <img class="profile-img" src="./user_images/' . $_SESSION['user_image'] . '" alt="">
                </div>
                <div class="profile-satting profile-satting-hide">
                    <div class="profile-name">
                        <a href="#"><i class="bx bxs-user"></i>
                            ' . $_SESSION['user_name'] . ' ' . $_SESSION['user_lname'] . '
                        </a>
                    </div>
                    <div class="profile-name">
                        <a href="#"><i class="bx bxs-edit"></i>
                            Edit Profile
                        </a>
                    </div>
                     <div class="profile-name">
                        <a href="hallOrRest_reg.php"><i class="bx bx-list-ul"></i>
                           my bookings
                        </a>
                    </div> 
                    <p class="line"></p>
                    <div class="log-out">
                        <a class="logout" href="logout.php"><i class="bx bx-log-out"></i>
                            Log out

                        </a>
                    </div>
                </div>';
                }
                ?>

         </div>


     </div>
     <!-- topnav -->
     <!-- topnav -->

 </header>