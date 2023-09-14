let sideLi = document.querySelectorAll('.sideLi');
let categories = document.querySelector(' option');
let categories_icon= document.querySelectorAll('.categories_icon');


sideLi.forEach(crr=>{
    crr.addEventListener('click',()=>{
        crr.classList.toggle('active')
    })
})



bars=document.querySelector(".bars");
bars.onclick = function () {
    navbar=document.querySelector(".sideBar");
    navbar.classList.toggle("active-2");
}


let profleImg = document.querySelector(".profile-img");
let profileSatting = document.querySelector(".profile-satting");

profleImg.addEventListener("click", () => {
  profileSatting.classList.toggle("profile-satting-hide");
  console.log("work");
});
