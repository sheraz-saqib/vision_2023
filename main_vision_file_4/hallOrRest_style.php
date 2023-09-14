<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

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
input.error{
    border: 1px solid red;
}
input.success{
    border: 1px solid green;
}
select.error{
    border: 1px solid red;
}
select.success{
    border: 1px solid green;
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
input[type='number']::-webkit-inner-spin-button{
display: none;
}
input[type='file']{
/* background-color:var(--primary_color); */
color:white;
width: 100%;
}
input[type='file']::-webkit-file-upload-button{
    visibility: hidden;
}
input[type='file']::before{
    content: 'image upload';

  color: rgb(255, 255, 255);
background-color:var(--primary_color);
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
 user-select: none;
  cursor: pointer;

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
    width: 96%;
}

.navBar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    min-height: 4rem;
    height: 100%;
}

.profile {
    /* max-width: 14rem;
    width: 100%; */
    margin-top: 0.5rem;
    cursor: pointer;
}

.profile .userImage img {
    max-width: 4rem;
    max-height: 4rem;
    aspect-ratio: 1/1;
    object-fit: cover;
    border-radius: 50%;
}

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
    margin-right: 40rem;
    margin-left: 4rem;

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
@media only screen and (max-width:750px){
    .searchBar{
        margin-right: 10rem;
    }
}
@media only screen and (max-width:750px){
    .searchBar{
        margin-right: 4rem;
    }
}
.searchBar i {
    font-size: 1.7rem;
    margin-right: 1rem;
    cursor: pointer;
    color: var(--text_color);
    margin-top: 0.3rem;
}

.sideBar {
    background-color: var(--nav_color);
    max-width: 20rem;
    width: 100%;
    height: 100vh;
    position: fixed;
    left: 0;
    top: 5rem;
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
/* ----------------main------------------- */
.main{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: end;
    /* background-color: #7733X33; */
    padding: 1rem 3rem;
    padding-left: 15%;
    padding-top:5%;
}
.card-1{
width:98% ;
height: auto;
background-color:white;
display: flex;
justify-content: space-between;
padding: 1.3rem 1.5rem;
border-radius: 0.6rem;
margin: 1rem;
}
.first-col{
    display: flex;
    justify-content: space-around;
    /* background-color: #e7e7e7; */
}
.slid{
    width: 50%;
    height: 100%; 
    background-color: rgb(230, 230, 230); 
    border-radius: 1rem;
}
.slid-img{
    height: 100% !important;
    width: 100% ; 
    object-fit: contain;
}
.slid-img img{
    aspect-ratio: 8/4 !important;
}
.slid-inner{
    height: 100%;
    border-radius: 1rem;
}
.info{
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 2rem 0;
}
.title-box,.price,.text,.rating,.description {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.3rem 1.7rem;
}
.title-box h2,.text{
    font-size: 1.6rem;
    color: #000000e1;
}
.text{
    font-size: 1.4rem;
}
.verify-btn{
    display: flex;
    flex-direction: column;
    align-items: end;
    justify-content: center;
}
.verify-btn button{
    outline: none;
    border: none;
    border-radius: 0.5rem;
    width: 7rem;
    height: 2rem;
    color:white;
    font-size: 1rem;
    background-color: #82ad66;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 0 1rem;
    float: right;
}
.rating button{
    background-color: #4192DC;
    border-radius: 1.8rem;
    color: #fff;
    border: none;
    outline: none;
    width: 9rem;
    height: 2.6rem;
    font-size: 1.2rem;
}
.rating span{
    font-size: 1.3rem;
}
.check{
    font-size: 1.2rem;
}
.description{
    font-size: 1.2rem;
    line-height: 2rem;
}
@media only screen and (max-width:1070px){
    .main{
        padding-left: 23%;
    }
    .card-1{
        height: 35rem;
    }
}
@media only screen and (max-width:800px){
    .main{
        padding-top: 8%;
        padding-left: 32%;
    }
    .card-1{
        height: 40rem;
    }
}
@media only screen and (max-width:890px){
    .card-1{
        height: 58rem;
        flex-direction: column;
    }
    .slid{
        width: 100% !important;
        height: 60% !important;
    }
    .info{
        width: 100% !important;
        height: 100%;
    }
    
}
@media only screen and (max-width:750px){
    .card-1{
        flex-direction: column;
    }
}
@media only screen and (max-width:590px){
    .card-1{
        flex-direction: column;
    }
    .slid{
        width: 100% !important;
        height: 80% !important;
    }
    .info{
        width: 100% !important;
        height: 80%;
    }
    .main{
        padding-top: 10%;
        padding-left: 37%;
    }

}

.col-p-2{
    width:45% ;
    height: 450px;
    background-color:#fcfcfc;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    padding: 1.3rem 1rem;
    border-radius: 1rem;
    
    }
    .col-profile{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .col-profile .profile-p1 img ,.profile-name img{
        width: 10%;
        border-radius: 50%;
        padding: 0.5rem 0.9rem;
    }
    .profile-p1{
        display: flex;
        align-items: center;
        
    }
    .profile-p3{
        padding: 1rem 1rem;
    }
    .col-2-info{
        border-radius: 1rem;
        background-color: var(--light_grey);
        display: flex;
        justify-content: center;
        padding: 1.7rem 0;
    }
    .col-2-info table td{
        padding: .5rem 1.8rem;
        font-size: 1.1rem;
        text-align: center;
    }
    .col-chatbox{
        background-color: var(--light_grey);
        border-radius: 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        
    }
    .profile-name{
        margin: .5rem 0;
    }
    .chat{
        width: 100%;
        height: 10.7rem;
        overflow-y: scroll;
    }
    .chat .customer-msg ,.chat .seller-msg{
        height: 2rem;
        width: 100%;
    }
    .chat .customer-msg p{
        float: left;
        display: block;
    }
    .chat .seller-msg p{
        float: right;
        display: block;
    }
    .chat .customer-msg p ,.chat .seller-msg p{
        color:#111111;
        background-color: #ebebeb;
        border-radius: 2rem;
        height: 2rem;
        width: fit-content;
        padding: .3rem .8rem;
        margin: 0 1rem;
    
    }
    .message-box input{
        width: 75%;
        height: 3rem;
        overflow: scroll;
        color: var(--text_color);
        background-color:#ebebeb;
        border: none;
        outline: none;
        border-radius: 1.6rem;
    
    }
    .message-box input::placeholder{
        padding-left: 1rem;
    }
    .message-box {
        width: 90%;
        display: flex;
        justify-content: space-between;
        background-color:#ebebeb;
        margin: 1rem 0;
        border-radius: 1.6rem;
    
    }
    .message-box button{
        border-radius: 50%;
        background-color:#ebebeb;
        width: 3rem;
        height: 3rem;
        border: none;
        outline: none;
    }
    .message-box button i{
        transform: rotate(-45deg);
        font-size: 1.5rem;
        color: #8b8a8a;
        margin-top: .3rem;
    }
    .col-send{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .col-send button{
        background-color: #4192DC;
        width: 100%;
        height: 2.6rem;
        border-radius: 2rem;
        color: white;
        font-weight: 500;
        font-size: 1.4rem;
        border: none;
        outline: none;
    }
    .explore-info{
        display: none;
    }
    .explore-js{
        display: block !important;
        height:46rem !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: space-around !important;
        margin: 1rem;
    }
    .card-1-js{
        width: 50%;
        height: fit-content !important;
        flex-direction: column !important;
        padding: 1rem 1rem;
    }
    .slid-js{
        width: 100%;
    }
    .cross{
        font-size: 2.9rem;
        color: #000000d7;
        transform: rotate(45deg);
    }
@media only screen and (max-width:1150px){
    .main{
        padding-left: 20%;
    }
    .first-col{
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }
    .card-1-js{
        width: 80%;
        height: 58rem !important;
        margin: auto;
        margin: 2rem;
    }
    .explore-js{
        width: 80%;
        margin: auto;
        margin: 2rem;

    }
    .sideBar{
        z-index: 99;
    }
}
@media only screen and (max-width:900px){
    .main{
        padding-top: 10%;
        padding-left: 28%;
    }
}
@media only screen and (max-width:540px){
    .card-1{
        flex-direction: column;
    }
    .slid{
        width: 100% !important;
        height: 80% !important;

    }
    .info{
        width: 100% !important;
        height: 80%;
    }
    .main{
        width: 100%;
        margin: auto;
        padding-left: 0;
        padding-right: 0;
        padding-top: 18%;
    }
    .sideBar{
        display: none;
    }
    
}
/* ----------------main------------------- */
/* ---------------form------------- */
.form{
    width: 100%;
    height: 96.5rem;
    background-color: #0094dc;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-main{
    width: 70%;
    height: 85rem;
    margin: auto;
    background-color:white;
    display: flex;
    justify-content: center;
    align-items:center;

}
.side-img,.form-info{
    width: 55%;   
    height: 100%; 
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.side-img{
    width: 45%;   
    background-color: #ffff;
}
.side-img img{
    width: 100%;
    height: 70%;
}

form{
    width: 100%;
    height:100%;
    margin: auto;
    background-color: #f6f5ff;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    border-radius: 1rem;
    padding: 2rem 2rem;

}
.row{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem;
    
}
.row h3{
    font-size: 2.6rem;
    color: #0000005e;
    text-align: center !important;
    font-weight: 400;
}
#row-1{
    justify-content: center !important;
}
input,textarea{
    width: 100%;
    padding: 0.8rem 3rem;
    border: none;
    outline: none;
    margin-top: 1rem;
    border-radius: 0.8rem;
}
textarea{
    width: 100% !important;
    height: 40%;
    resize: none;
    overflow-y: scroll;
}
label{
    width: 47%;
    font-size: 1.5rem;
    padding: 0;
    text-align:start;
    color: #000;
    font-weight: 500;
    letter-spacing: 0.5px;
    text-transform: capitalize;
}
.form-bttn{
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
#label-inp{
    width: 100%;
}
#label-inp textarea ,input {
    padding-left: 0.9rem;
}
input::placeholder,textarea::placeholder{
    color: #80808063;
    font-weight: 100;
    font-size: 1.2rem;
}
@media only screen and (max-width:1190px){
    .side-img{
        display: none;
    }
    .form-info{
        width: 100%;
    }
}
@media only screen and (max-width:580px){
    .form-info{
        width: 100%;
    }
    .row{
        flex-direction: column;
    }
    input,label{
        width: 100%;
    }
    .form{
        height: 110rem;
    }
    .form-main{
        height: auto;
        width: 90%;
    }
    
}

/* ------------------form------------------- */

</style>