function gymWordPress() {
    if(document.querySelector(".swiper")) {
        const opciones = {
            loop: true,
            autoplay: {
                delay: 3000,
            }
        }
        new Swiper(".swiper", opciones);
    }
};

document.addEventListener("DOMContentLoaded", gymWordPress);

// letter animation

// Wrap every letter in a span
const textWrapper = document.querySelector('.ml2');


if(textWrapper) {
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    
        anime.timeline({loop: true})
        .add({
        targets: '.ml2 .letter',
        scale: [4,1],
        opacity: [0,1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 950,
        delay: (el, i) => 70*i
        }).add({
        targets: '.ml2',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
        });

        const hamburguer = document.querySelector(".hamburguer-menu svg");
        hamburguer.addEventListener("click", function() {
            const mainMenu = document.querySelector(".container-menu"); 
            mainMenu.classList.toggle("show");
        })

}


// sticky navbar

document.addEventListener("DOMContentLoaded", gymWordPress);

window.onscroll = function() {
    const scroll = window.scrollY;
    const navbar = document.querySelector(".navbar");

    if(scroll > 50) {
        navbar.classList.add("fixed-top");
    } else {
        navbar.classList.remove("fixed-top");
    }
}


