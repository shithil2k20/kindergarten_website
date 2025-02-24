let loginForm = document.querySelector('.login-form');


let navbar = document.querySelector('.navbar');

window.onscroll = () =>{
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

document.getElementById('login-btn').addEventListener('click', function() {
    document.querySelector('.account-form').classList.toggle('active');
 });
document.getElementById('enroll').addEventListener('click', function() {
    document.querySelector('.account-form').classList.toggle('active');
 });
 
 document.getElementById('close-form').addEventListener('click', function() {
    document.querySelector('.account-form').classList.remove('active');
 }); 
 
 
 let rgbtn=document.querySelector(".register-btn");
 let lgbtn=document.querySelector(".login-btn");
 
 rgbtn.addEventListener('click', function() {
    rgbtn.style.opacity="100%";
    lgbtn.style.opacity="50%";
    document.querySelector('.loginform').style.display='none';
    document.querySelector('.registerform').style.display='flex';
 }); 
 
 lgbtn.addEventListener('click', function() {
    rgbtn.style.opacity="50%";
    lgbtn.style.opacity="100%";
    document.querySelector('.loginform').style.display='flex';
    document.querySelector('.registerform').style.display='none';
 
 }); 