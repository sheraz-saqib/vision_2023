 <div class="sideBar">
        <!-- side_links_container -->
        <div class="sideBar_inner">
            <div class="side_links_container">
                <div class="side_head">
                    <h2>Explore</h2>
                </div>

                <ul class="sideUl">
                    <li id="home" class="sideLi "><a class="sideLinks " href="index.php">home <i class='bx bx-chevron-down'></i></a>
                    </li>
                    <li id="recommented" class="sideLi"><a class="sideLinks" href="recommented.php">recommended<i class='bx bx-chevron-down'></i></a>
                    </li>
                    <li id="new" class="sideLi"><a class="sideLinks" href="new.php">new <i class='bx bx-chevron-down'></i></a></li>
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
                        <option value="" selected >categories</option>
                        <option value="hall" >hall</option>
                        <option value="restaurant" >restaurant</option>
                    </select>

                    <!-- ========== -->
                    <div class="cat_conatiner">
                        <ul>
                            <li class="cat_li"><span class="categories_icon "></span>hall</li>
                            <li class="cat_li"><span class="categories_icon "></span>restaurant</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="silder-btn">
                <?php
                if(!$userLogin)
{
    echo '
    <a href="login.html"><a href="login.php" class="nav-btn"><button type="button"><a href="login.php" class="link-text"><i class="fa-solid fa-user"></i>login</a><a
                                href="login.php"><i class="fa-solid fa-arrow-right "></i></a></button></a></a>

                <a href="newAcc.php"><a href="newAcc.php" class="nav-btn"><button type="button"> <a href="newAcc.php"
                                class="link-text"> <i class="fa-solid fa-arrow-right-to-bracket"></i>sign
                                in</a><a href="newAcc.php"><i
                                    class="fa-solid fa-arrow-right"></i></a></button></a></a>
    
    
    ';
}
if($userLogin){
echo '
    <a href="logout.php"><a href="logout.php" class="nav-btn"><button type="button"><a href="logout.php" class="link-text"><i class="fa-solid fa-right-from-bracket"></i>logout</a><a
                                href="logout.php"><i class="fa-solid fa-arrow-right "></i></a></button></a></a>    
    ';
}
                
                ?>
                
            </div>

        </div>
    </div>

        <script>
//         let page_url = window.location.href;
//         let page_split = page_url.split(8,10)[1]
//         let get_url = page_split.split('/',page_split.length)[2]
       
// let links = document.querySelectorAll('.sideLi');
// console.log(links);


// links.forEach(crr =>{
//     let ancor = crr.querySelector('a');
//     let ancor_href = ancor.href;
//         let ancor_href_split = ancor_href.split(8,10)[1]
//         let get_href = ancor_href_split.split('/',ancor_href_split.length)[2]
// if(get_url == get_href){
//     crr.classList.add('active')
// }
// else{
//       crr.classList.remove('active')
// }
// })





    setInterval(()=>{
        let categories = document.querySelector('#categories');

let cat_li = document.querySelectorAll('.cat_li');

cat_li.forEach(crr =>{
    let categories_icon = crr.querySelector('.categories_icon');
    if(crr.textContent == categories.value){
        categories_icon.classList.add('active')
    }else{
         categories_icon.classList.remove('active')
    }
})

        if(categories.value !=''){
let xhr = new XMLHttpRequest();
    xhr.open('GET','./php/categories.php?catval='+categories.value,true);

    xhr.onload = ()=>{
        if(xhr.readyState == 4 && xhr.status == 200){
            console.log(xhr.responseText);
            document.querySelector('.main').innerHTML = xhr.responseText
        }
    }


    xhr.send();
        }

    },500)


    

// console.log(get_url);

    </script>