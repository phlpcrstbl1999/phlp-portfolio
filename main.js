var typed = new Typed(".auto-input", {
    strings:["Programmer", "Web Developer"],
    typeSpeed: 80,
    backSpeed: 50,
    loop: true
})

document.addEventListener('scroll', () => {
    const header = document.querySelector('header');

    if(window.scrollY > 0) {
        header.classList.add('scrolled');
        
    } else {
        header.classList.remove('scrolled');
    }
})

const borger = document.querySelector(".borger");
const navMenu = document.querySelector(".nav-menu");

borger.addEventListener("click", () => {
    borger.classList.toggle("active");
    navMenu.classList.toggle("active");
})