<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap'); */

@import url(color.css);
* {
    padding: 0;
    margin: 0;
    text-decoration: none !important;
    list-style: none;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

html,
button {
    font-size: 62.5%;
}

body {
    background-color:whitesmoke !important;
}

::-webkit-scrollbar {
    width: .7rem;
}

::-webkit-scrollbar-track {
    background-color: var(--body_color);
}

::-webkit-scrollbar-thumb {
    background-color: var(--primary_color);
    border-radius: 5rem;
    background-clip: content-box !important;
    border: 0.2rem solid transparent;
}

:root {
    --body_color: #F6F6F6;
    --primary_color: #4192DC;
    --text_color: #9A9A9A;
    --light_black: rgba(0, 0, 0, 0.774);
    --light_grey: #D9D9D9;
    --light_white: #EBEBEB;
    --light_green: #18dd11;
    --nav_color: #F3F3F3;
    --transition-02s: .2s;
}
.carousel-item img{
    aspect-ratio: 16/9;
    object-fit: cover !important;
    border-radius: .5rem !important;
    display: flex !important;
    align-items: center !important;
}
.mt-2rem {
    margin-top: 2rem;
}

.header {
    display: flex;
    width: 100%;
    justify-content: center;
    position: fixed;
    top: 0;
    background-color: var(--nav_color);
    z-index: 2;
}

.topNav {
    width: 98%;
}

.navBar {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    min-height: 7rem;
    height: 100%;
}

.profile img {
    max-height: 3.5rem;
    height: 100%;
    cursor: pointer;
    border-radius: 50%;
}

.profile {
    display: flex;
    align-items: center;
}
/* profile satting */
.profile-satting {
    position: absolute;
    right: 0;
    margin-top: 20rem;
    margin-right: 2rem;
    width: 12rem;
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
.profile-satting::before{
    content: '';
    width: 1.5rem;
    height:1.5rem;
    background-color: var(--body_color);
    position: absolute;
    right: 2rem;
    top: -.5rem;
    transform: rotate(-46deg);
   
}
.profile-name {
    margin-left: 2rem;
    margin-bottom: 1rem;
 
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

/* ================= */

.silder-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: calc(15vh - 6rem);
    white-space: nowrap;
  
}

.silder-btn :is(.fa-arrow-right) {
    transition: .4s;
    transform: .3s;
    opacity: 0;
}

.silder-btn :is(button) {
    background-color: var(--primary_color);
    color: var(--light_white);
    border: none;
    border-radius: .5rem;
    margin-bottom: 1.5rem;
    padding: 0.6rem 1rem;
    max-width: 100%;
    width: 15rem;
    cursor: pointer;
    font-weight: 500;
    box-shadow: .2rem .2rem 1rem 0rem rgba(73, 73, 73, 0.336);
    font-size: 1.2rem;
}
.silder-btn button i{
    margin-right: 0.2rem;
}
.silder-btn button:hover .login-arrow {
    opacity: 1;
    margin-left: 16rem;
    transform: translateX(15%);
    color: var(--light_white);
}

.nav-btn .fa-user {
    padding-right: 0.3rem;
}

.silder-btn .link-text {
    color: var(--var-sideBar);
}

.silder-btn button:hover .fa-arrow-right {
    opacity: 1;
    margin-left: 5rem;
    color: var(--light_white);
}

.nav-btn {
    color: var(--var-sideBar);
}
/* ================= */
.compantName {
    color: var(--light_black);
    margin-left: 2rem;
}

.compantName h2 {
    font-size: 2rem;
    color: var(--text_color);
}

.compantName span {
    color: var(--primary_color);
    font-size: 3rem;
    font-weight: 700;
}

.searchBar {
    display: flex;
    align-items: center;
    background-color: var(--light_white);
    max-width: 50rem; 
    /* min-height: 3rem; */
     width: 100%;
    height: 3.2rem;
    border-radius: 3rem;
    margin-right: 20rem;
} 

.searchBar input {
    width: inherit;
    appearance: none;
    outline: none;
    border: transparent;
    background-color: transparent;
    padding: .3rem;
    margin: 0 1rem;
    caret-color: var(--primary_color);
}

.searchBar i {
    font-size: 1.7rem;
    margin-right: 1rem;
    cursor: pointer;
    color: var(--text_color);
    margin-top: 0.3rem;
}
/* .login{
    width: 30%;

} */
#search_form{
    width: 40% !important;
    height: 100%;
    background-color: #f6f5ff;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    border-radius: 1rem;
    padding: 2rem 2rem;

}
.bars{
    display:none;
}

@media only screen and (max-width:850px){

    .searchBar{
        margin-right: 10rem;
    }
}
@media only screen and (max-width:650px){
    
.searchBar{
        width: 100%;
        margin-right: 0rem;
    }
}
@media only screen and (max-width:450px){
    .compantName{
        margin-left:1rem;
    }
    #search_form{
        width: 30% !important;
    }
    .searchBar{
            width: 100%;
            margin-right: 0rem;
        }
    }

.sideBar {
    background-color: var(--nav_color);
    max-width: 20rem;
    width: 100%;
    height: 100vh;
    position: fixed;
    left: 0;
    top: 4rem;
    padding: .5rem;
}

.sideBar_inner {
    width: inherit;
    max-height: 85vh;
    width: 100%;
    height: 100%;
    margin-top: 2rem;
    overflow-y: scroll;
    padding: 2rem 0;
}

.side_head {
    display: flex;
    justify-content: center;
    font-size: 1.2rem;
    color: var(--light_grey);
}

.sideUl {
    width: inherit;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-top: 2rem;
    min-height: 32rem !important;
    align-items: center;
    padding: 0 1rem;

}

.sideLi {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--light_white);
    height: 3.7rem;
    border-radius: .5rem;
    text-transform: capitalize;

}

.sideLinks {

    color: var(--text_color);
    width: inherit;
    font-size: 1.4rem;
    padding: 0 1.5rem;
    font-weight: 500;
    display: flex;
    justify-content: space-between;
    align-items: center;

}

.sideLinks i {
    font-size: 1.5rem;
    transition: all var(--transition-02s);
    padding: .3rem;
    border-radius: 50%;
}

.sideLi.active {
    background-color: var(--primary_color);
}

.sideLi.active .sideLinks {
    color: white;
}

.sideLi.active .sideLinks i {
    transform: rotate(-90deg);
    background-color: white;

    color: var(--light_black);
}


.side_select_cot_cont {
    width: inherit;
    display: flex;
    flex-direction: column;
    margin-top: 2rem;
    min-height: 10rem !important;
    align-items: center;
    padding: 0 1rem;
    position: relative; 
    text-transform: capitalize;
    font-weight: 500;
}

.side_select_cot_cont i {
    position: absolute;
    right: 2.5rem;
   /* top: 1rem; */
    color: var(--text_color);
    top: 0.6rem;
    font-size: 1.5rem;
    transition: all var(--transition-02s);
    padding: .3rem;
    border-radius: 50%;
}

.side_categories_link {
    width: 100%;
    display: flex;
    align-items: center;
    background-color: var(--light_white);
    height: 3.7rem;
    border-radius: .5rem;
    text-transform: capitalize;
    outline: none !important;
    border: transparent !important;
    color: var(--text_color);
    appearance: none;
    font-size: 1.4rem;
    padding: 0 1.5rem;
    cursor: pointer;
}

.side_categories_link option {
    appearance: none;
    background-color: var(--light_grey);
    color: black;
}
.cat_conatiner{
    display: flex;
    justify-content: center;
    flex-direction: column;
    width: 100%;
    background-color: var(--light_white);
    margin-top: 2rem;
    min-height: 6rem;
    height: 100%;
    color: var(--text_color);
    appearance: none;
    font-size: 1.3rem;
    padding: 0 1.5rem;
    cursor: pointer;
    border-radius: .5rem;
}
.cat_conatiner ul li{
    margin: 1rem 0;
    display: flex;
    align-items: center;
}
.cat_conatiner ul li span{
    width: .5rem;
    height: .5rem;
    background-color: var(--light_grey);
    border-radius: 50%;
    margin-right: 0.5rem;
}
.cat_conatiner ul li span.active{
    background-color: var(--light_green);
}
@media only screen and (max-width:550px){
    /* .sideBar {
        display: none;
    } */
.bars{
    display: block !important;
}
.bars .line{
    background-color:#a6a6a6;
    width: 20px;
    height: 3px;
    margin: 5px 0;
    border-radius: 10px;
}
.sideBar{
    display: block;
    width: 0px;
    min-height: 100vw;
    height:100%;
    position: fixed;
    top:7rem;
    left: -1rem;
    bottom:0;
    background-color:var(--nav_color);
    overflow: hidden;
    transition: 0.3s;
    z-index: 99999;
}
.sideBar_inner{
    padding: 1rem 1rem;
    opacity: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
/* .heart,.bag,.user{

    width: 100%;
    height: 50px;
    text-align: center;
    justify-content: center;
}
.heart .navtxt ,.bag .navtxt ,.user .navtxt{
margin-top: 15px;
margin-left: 20px;
} */
.sideBar.active-2 .sideBar_inner{
    opacity: 1;
    padding: 1rem 4rem;
    overflow-x:hidden;
    height:auto;
}
.sideBar.active-2{
    width:100rem;
    overflow: hidden;

}
.sideLi{
    padding: 0 1rem;
}
.sideLinks{
    width: 80%;
    font-size: 1.2rem;
    padding: 0 0;
    justify-content:space-between;
}
.box{
    width: 50%;
}

}
/* ----------------main------------------- */

/* ----------------main------------------- */
/* ---------------form------------- */
.form {
    width: 100%;
    height: 96.5rem;
    background-color: #0094dc;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-main {
    width: 70%;
    height: 85rem;
    margin: auto;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;

}

.side-img,
.form-info {
    width: 55%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.side-img {
    width: 45%;
    background-color: #ffff;
}

.side-img img {
    width: 100%;
    height: 70%;
}



.row {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem;

}

.row h3 {
    font-size: 2.6rem;
    color: #0000005e;
    text-align: center !important;
    font-weight: 400;
}

#row-1 {
    justify-content: center !important;
}

input,
textarea {
    width: 100%;
    padding: 0.8rem 3rem;
    border: none;
    outline: none;
    margin-top: 1rem;
    border-radius: 0.8rem;
}

textarea {
    width: 100% !important;
    height: 40%;
    resize: none;
    overflow-y: scroll;
}

label {
    width: 47%;
    font-size: 1.5rem;
    padding: 0;
    text-align: start;
    color: #000;
    font-weight: 500;
    letter-spacing: 0.5px;
    text-transform: capitalize;
}

.form-bttn {
    width: 90%;
    height: 4rem;
    border-radius: 1rem;
    background-color: #0094dc !important;
    color: white;
    font-weight: 1.4rem;
    font-size: 1.4rem;
    border: none;
    outline: none;
}

#label-inp {
    width: 100%;
}

#label-inp textarea,
input {
    padding-left: 0.9rem;
}

input::placeholder,
textarea::placeholder {
    color: #80808063;
    font-weight: 100;
    font-size: 1.2rem;
}

@media only screen and (max-width:1190px) {
    .side-img {
        display: none;
    }

    .form-info {
        width: 100%;
    }
}

@media only screen and (max-width:580px) {
    .form-info {
        width: 100%;
    }

    .row {
        flex-direction: column;
    }

    input,
    label {
        width: 100%;
    }

    .form {
        height: 110rem;
    }

    .form-main {
        height: auto;
        width: 90%;
    }

}

/* ------------------form------------------- */
</style>