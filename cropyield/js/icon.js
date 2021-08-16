const icon = document.querySelector('.container .nav .icon');
const mobile_menu = document.querySelector('.container .nav ul');
const header = document.querySelector ('.container');


icon.addEventListener('click',()=>{
  icon.classList.toggle('active');
  mobile_menu.classList.toggle('active'); 
})