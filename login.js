const container = document.querySelector('.main');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', ()=> {
    container.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    container.classList.remove('active');
});

// const btnPopup = document.querySelector('.login-btn');

// btnPopup.addEventListener('click', ()=>{
//     container.classList.add('active-popup');
// });