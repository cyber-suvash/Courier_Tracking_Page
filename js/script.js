let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
} 
// const   openModalButtons = document.querySelectorAll('[data-modal-target]')
// const   closeModalButtons = document.querySelectorAll('[data-modal-close]')
// const overlay = document.getElementById('overlay')

// openModalButtons.forEach(button =>{
//     button.addEventListener('click', () => {
//         const modal = document.querySelector(button.CDATA_SECTION_NODE.modalTarget)
//         openModal(modal)
//     })
// })
// closeModalButtons.forEach(button =>{
//     button.addEventListener('click', () => {
//         const modal = button.closest('modal')
//         closeModal(modal)
//     })
// })

// function openModal(modal){
//     if (modal == null) return
//     modal.classList.add('active')
//     overlay.classList.add('active')
// }
// function closeModal(modal){
//     if (modal == null) return
//     modal.classList.remove('active')
//     overlay.classList.remove('active')
// }
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');


registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});
loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});