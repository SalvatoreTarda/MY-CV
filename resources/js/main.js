// elementi catturati

let navbar = document.querySelector('#navbar');
let links = document.querySelectorAll('.nav-link');
let offNavbar = document.querySelectorAll('#offcanvasNavbar');
// let linkof = document.querySelectorAll('.off-link')
// let offcanvas = document.querySelectorAll('.offcanvas');


// azioni degli elementi


window.addEventListener('scroll',()=>{
    if (window.scrollY>0) {
        
        navbar.classList.remove('bg-dark');
        navbar.classList.add('bg-t');
        // offNavbar.style.height ('100vh');
        links.forEach((el)=>{
            el.classList.remove('text-w')
            el.classList.add('text-b');
            
        })
       
    }
    else{
        
        navbar.classList.remove('bg-t');
        navbar.classList.add('bg-dark');
        
        links.forEach((el)=>{
            el.classList.remove('text-b');
            el.classList.add('text-w');
        })
        // offNavbar.style.height ('100vh');
    }
})


// offNavbar.addEventListener('onclick',()=>{
//     if (offNavbar.onclick){
//         offNavbar.style.height = '100%'
//     }
//     else
//     {
//         offNavbar.style.height = '50%'
//     }
// })



// links.forEach((el) => {
//     el.addEventListener('mouseover', () => {
//         el.classList.Remove('text-w');
//         el.classList.Add('text-r');
//     })
//     el.addEventListener('mouseleave', () => {
//         el.classList.Remove('text-r');
//         el.classList.Add('text-w');
//     })
// })











// const swiper = new Swiper('.swiper', {
//     autoplay: {
//         delay: 5000,
//     },
// });

