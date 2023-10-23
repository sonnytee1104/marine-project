const preloader = document.querySelector("[data-preloader]")
 
window.addEventListener("load", () => {
    preloader.classList.add("remove");
});

/**
 * add event on mutiple elements
 */

const addEventOnElements =  function(elements, eventType, callback) {
    for (let i = 0, len = elements.length; i<len; i++){
        elements[i].addEventListener(eventType, callback);
    }
}

/**
 * Navcar toggle for mobile
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNav  = function (){
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("nav-active");

}

addEventOnElements(navTogglers, "click", toggleNav);

/**
 * Header
 */

const header = document.querySelector("[data-header]");
window.addEventListener("scroll", function (){
    header.classList[window.scrollY > 100 ? "add" : "remove"] ("active");
});
  

var input = document.querySelector('.img');

var glide = new Glide('.glide', {
    type: 'carousel',
    autoplay: 2000,
    hoverpause: false,
    perView: 4,
    breakpoints: {
        1024: {
          perView: 2
        },
        600: {
          perView: 1
        }
      }
})

input.addEventListener('input', function (event) {
    glide.update({
    autoplay: (event.target.value != 0) ? event.target.value : false
  })
})
glide.mount()
