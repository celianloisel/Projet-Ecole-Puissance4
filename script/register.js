const password_checker = document.querySelector('.user-box');
const password = document.querySelector('#password');
const progress_bar = document.querySelector('.bar');


password.onkeyup = ()=> {
    // console.log(password.value);
    checkPasswordStrength(password.value);
}

function checkPasswordStrength(password){
    let strength = 0;

if(password.match(/(?=.*[a-z])/) && password.match(/(?=.*[A-Z])/) && password.match(/(?=.{8,})/)) strength++;

if(password.match(/(?=.*[0-9])/)) strength++;

if(password.match(/(?=.*['!@#$%^&*])/)) strength++;

    console.log(strength);

    switch(strength){
        
        case 0:
            progress_bar.style.cssText = 'width : 0%; background-color: unset';
            break;      
        case 1:
            progress_bar.style.cssText = 'width : 33%; background-color: red';
            break;
        case 2:
            progress_bar.style.cssText = 'width : 66%; background-color: orangered';
            break;  
        case 3:
            progress_bar.style.cssText = 'width : 100%; background-color: lime';
            break;    
    } 
   
}