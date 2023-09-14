let user_profile_img = document.querySelector('.user_profile_img'),
user_profile_input = document.querySelector('#user_profile_input'),
user_profile_div = document.querySelector('.userprofile-input'),
img_inner_head = document.querySelector('.img_inner_head');

user_profile_div.onclick = ()=>{
    user_profile_input.click()
}

const imgLoad = (e)=>{
    let finalImg = e.target.files[0]
    user_profile_img.src = URL.createObjectURL(finalImg)

    if(user_profile_img.src != ''){
        user_profile_div.style.border='1px solid transparent'
        img_inner_head.style.display= 'none'
    }
    else{
        user_profile_div.style.border='.2rem  dotted #695CFE'
        img_inner_head.style.display= 'block'
    }
}



user_profile_input.addEventListener('change',imgLoad)


