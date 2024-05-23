// elementi catturati

let navbar = document.querySelector('#navbar');
let links = document.querySelectorAll('.nav-link');
let offNavbar = document.querySelectorAll('#offcanvasNavbar');
var modals = document.querySelectorAll(".modal");
var modalBtns = document.querySelectorAll("[id^='myBtn']");
// var backToTop = document.querySelector(".back-to-top")


// azioni degli elementi


window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {

    navbar.classList.remove('bg-bl');
    navbar.classList.add('bg-t');
    // offNavbar.style.height ('100vh');
    links.forEach((el) => {
      el.classList.remove('text-w')
      el.classList.add('text-b');

    })

  }
  else {

    navbar.classList.remove('bg-t');
    navbar.classList.add('bg-bl');

    links.forEach((el) => {
      el.classList.remove('text-b');
      el.classList.add('text-w');
    })
    
  }
})





// swiper


const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 10000,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  on: {
    autoplayTimeLeft(s, time, progress) {
      progressCircle.style.setProperty("--progress", 10 - progress);
      progressContent.textContent = `${Math.ceil(time / 10000)}s`;
    }
  }
});



modalBtns.forEach(function (btn, index) {
  var modal = modals[index];
  var span = modal.querySelector(".close");

  btn.onclick = function () {
    modal.style.display = "block";
  }

  span.onclick = function () {
    modal.style.display = "none";
  }

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
});

// btn Torna Su

window.onscroll = function() {
  // Verifica se si è scesi oltre metà della pagina
  const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
  const halfPageHeight = document.documentElement.scrollHeight / 2;

  if (scrollPosition > halfPageHeight) {
      document.getElementById("tornaSuDiv").classList.add("show");
  } else {
      document.getElementById("tornaSuDiv").classList.remove("show");
  }
};

// Gestisce il clic sul tasto "Torna Su"
document.getElementById("tornaSuBtn").onclick = function(event) {
  event.preventDefault();
  // Torna all'inizio della pagina con un'animazione fluida
  window.scrollTo({ top: 0, behavior: 'smooth' });
};
  
  






