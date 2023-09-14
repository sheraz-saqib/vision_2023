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

.mt-2rem {
    margin-top: 2rem;
}

.main{
    width:calc(100% - 14%);
    display: flex;
    flex-direction: column;
    align-items: end;
    /* background-color: #7733X33; */
    padding: 1rem 3rem;
    padding-top:5%;
    float:right;
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
    width:100%;
    display: flex;
    justify-content: space-around;
 /* background-color: ; */
}
.slid {
    width: 50%;
    height:100%;
    background-color: rgb(230, 230, 230);
    border-radius: 1rem;
}

.slid-img {
    width: 100%;
    object-fit: contain;
}

.slid-img img {
    aspect-ratio: 8/5 !important;
}

.slid-inner {
    height: 100%;
    border-radius: 1rem;
}

.info {
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 2rem 0;
}

.title-box,
.price,
.text,
.rating,
.description {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.3rem 1.7rem;
}

.title-box h2,
.text {
    font-size: 1.6rem;
    color: #000000e1;
}

.text {
    font-size: 1.4rem;
}

.verify-btn {
    display: flex;
    flex-direction: column;
    align-items: end;
    justify-content: center;
}

.verify-btn button {
    outline: none;
    border: none;
    border-radius: 0.5rem;
    width: 7rem;
    height: 2rem;
    color: white;
    font-size: 1rem;
    background-color: #82ad66;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 0 1rem;
    float: right;
}

.rating button {
    background-color: #4192DC;
    border-radius: 1.8rem;
    color: #fff;
    border: none;
    outline: none;
    width: 9rem;
    height: 2.6rem;
    font-size: 1.2rem;
}

.rating span {
    font-size: 1.3rem;
}

.check {
    font-size: 1.2rem;
}

.description {
    font-size: 1.2rem;
    line-height: 2rem;
}

@media only screen and (max-width:1070px) {
    .main{
        padding-top: 10%;
        padding-left: 5%;
    }

    .slid-img img {
    aspect-ratio: 8/6 !important;
}
.slid {
        width: 100% !important;
    }

}

@media only screen and (max-width:800px) {
    .main {
        padding-top: 8%;
        /* padding-left: 32%; */
    }

    .card-1 {
        height: auto;
    }
}

@media only screen and (max-width:890px) {
    .main {
        padding-top: 10%;
        padding-left: 3%;
    }
    .slid-img img {
    aspect-ratio: 8/7 !important;
}
    .card-1 {
        height: auto;
        flex-direction: column;
    }

    .slid {
        width: 100% !important;
        height: 100% !important;
    }

    .info {
        width: 100% !important;
        height: 100%;
    }

}

@media only screen and (max-width:750px) {
    .card-1 {
        flex-direction: column;
    }
}

@media only screen and (max-width:590px) {
    .card-1 {
        flex-direction: column;
    }

    .slid {
        width: 100% !important;
        /* height: 80% !important; */
    }

    .info {
        width: 100% !important;
        /* height: 80%; */
    }

    .main {
        padding-top: 10%;
        /* padding-left: 37%; */
    }

}


.col-p-2{
    width:45% ;
    height: fit-content;
    background-color:#fcfcfc;
    /* display: flex;
    justify-content: space-between;
    flex-direction: column; */
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
    .col-2-info,.col-chatbox,.col-profile,.col-send{
        margin: 1.5rem 1.5rem;
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
       
        margin: 2rem;
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
    .first-col{
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }
    .card-1-js{
        width: 90%;
        height: auto !important;
        margin: auto;
        margin: 2rem;
    }
    .explore-js{
        width: 90%;
        margin: auto;
        margin: 1rem;

    }
    .sideBar{
        z-index: 99;
    }
    .col-profile{
        margin:1.5rem 0;
    }
    .col-p-2{
        padding:1.3rem 0rem;
        }
}

@media only screen and (max-width:900px){
    .main{
        padding-top: 10%;
        padding-left: 10%;
    }
}
@media only screen and (max-width:700px){
    .main{
        padding-top: 10%;
        padding-left: 18%;
    }
}
@media only screen and (max-width:550px){
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
        padding-left: 0 !important;
        padding-right: 0;
        padding-top: 18%;
        
    }
    .sideBar{
        display: none;
    }
    
}
/* ----------------main------------------- */
</style>