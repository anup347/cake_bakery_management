const btn = document.querySelector('.mobile-menu-button');
const sidebar = document.querySelector('.sidebar-main');
btn.addEventListener("click", ()=>{

    sidebar.classList.toggle("-translate-x-full");
});