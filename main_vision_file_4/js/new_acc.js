const create_acc_form = document.getElementById('create_acc_form'),
new_acc_submit = document.getElementById('new_acc_submit'),
inputs = document.querySelectorAll('input')

create_acc_form.addEventListener('submit',e=>{
e.preventDefault()
})

new_acc_submit.addEventListener('click',()=>{
inputs.forEach((crr,i) =>{
if(crr.value ==''){
    console.log(i +' '+ 'this is empty input');
}
if(crr.value.length > 3){
    window.location.assign('./take-profile.html')
}

else{
    console.log(i +' '+ 'this is not empty input');
}
})
})
