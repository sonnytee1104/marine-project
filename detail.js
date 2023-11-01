const addEventOnElements = function(elements, eventType, callback){
    for(let i = 0, len = elements.length; i < len; i++){
        elements[i].addEventListener(eventType, callback);
    }
}

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");

const toggleNav = function(){
    navbar.classList.toggle("active");
    document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNav);

const header = document.querySelector("[data-header]");
window.addEventListener("scroll", function(){
    header.classList[this.window.scrollY > 100 ? "add" : "remove"] ("active");
})

var imgFeature = document.querySelector('.img-feature');
var listImg = document.querySelectorAll('.list-image img');
var prevBtn = document.querySelector('.prev');
var nextBtn = document.querySelector('.next');

var currentIndex = 0;
function updateImageByIndex(index){
    //remove active class
    document.querySelectorAll('.list-image div').forEach(item => {
        item.classList.remove('active');
    })
    currentIndex = index;
    imgFeature.src = listImg[index].getAttribute('src');
    listImg[index].parentElement.classList.add('active');
}

listImg.forEach((imgElement, index) => {

    imgElement.addEventListener('click', e=> {
        updateImageByIndex(index);   
    })
})

prevBtn.addEventListener('click', e => {
    if(currentIndex == 0){
        currentIndex = listImg.length - 1;
    }else{
        currentIndex --;
    }
    updateImageByIndex(currentIndex);
 })

 nextBtn.addEventListener('click', e => {
    if(currentIndex == listImg.length-1){
        currentIndex = 0;
    }else{
        currentIndex ++;
    }
    updateImageByIndex(currentIndex);
 })

 updateImageByIndex(0);

 let thisPage = 1;
let limit = 6;
let list = document.querySelectorAll('.seli-list .seli-card');

function loadCard(){
    let beginGet = limit * (thisPage - 1);
    let endGet = limit * thisPage - 1;
    list.forEach((seliCard, key) => {
        if(key >= beginGet && key <= endGet){
            seliCard.style.display = 'block'
        }else{
            seliCard.style.display = 'none';
        }
    })
    listPage();
}
loadCard();

function listPage(){
    let count = Math.ceil(list.length / limit);
    document.querySelector('.pagination').innerHTML = '';

    if(thisPage != 1){
        let prev = document.createElement('li');
        prev.innerText = '<';
        prev.setAttribute('onclick', "changePage(" + (thisPage - 1) + ")");
        document.querySelector('.pagination').appendChild(prev);
    }

    for(i = 1; i <= count; i++){
        let newPage = document.createElement('li');
        newPage.innerHTML = i;
        if(i == thisPage){
            newPage.classList.add('active');
        }
        newPage.setAttribute('onclick', "changePage(" + i + ")");
        document.querySelector('.pagination').appendChild(newPage);
    }

    if(thisPage !== count){
        let next = document.createElement('li');
        next.innerText = '>';
        next.setAttribute('onclick', "changePage(" + (thisPage + 1) + ")");
        document.querySelector('.pagination').appendChild(next);
    }
}

function changePage(i){
    thisPage = i;
    loadCard();
}